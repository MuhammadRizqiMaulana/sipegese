<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelPenyewaan;
use App\ModelGedung;
use App\ModelPembayaran;

class HalamanKonfirmasiBayarController extends Controller
{
    public function index($id_penyewaan) 
    {
        \Carbon\Carbon::setLocale('id');

    	$datas = ModelPenyewaan::find($id_penyewaan);

        $besok = $datas->created_at->addDays(1)->format('l, d F Y H:i');
    	return view('user.halaman.HalamanKonfirmasiBayar',compact('datas','besok'));
    }
 
	public function cari(Request $request)
	{
		$query = $request->get('q');
        $datas = ModelPenyewaan::where(
        	$datas->id_penyewaan, 'LIKE', $query
        );

      	return view('user.halaman.HalamanKonfirmasiBayar', compact('datas')); 
	}

    public function store( Request $request) {
        $this->validate($request, [
            'id_penyewaan' => 'required',
            'bukti_pembayaran' => 'required',
            'jumlah_bayar' => 'required'
            ]);


        $file = $request->file('bukti_pembayaran'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/bukti_bayar',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $data = new ModelPembayaran();
        $data->id_penyewaan = $request->id_penyewaan;        
        $data->bukti_pembayaran = $nama_file;
        $data->jumlah_bayar = $request->jumlah_bayar;
        $data->status_bayar = 'Menunggu Validasi';
        $data->save();

        $statusSewa = ModelPenyewaan::find($request->id_penyewaan);
        $statusSewa->status_sewa = 'Sedang Dalam Proses';
        $statusSewa->save();

        return redirect('HalamanSewaGedung')->with('alert-success','Terimakasih, Data berhasil disimpan !');
    }
}
