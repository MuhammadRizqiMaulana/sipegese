<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenyewaan;
use App\ModelGedung;


class FormulirSewaGedungController extends Controller
{
	public function tampil($id_gedung) {
    	$datas = ModelGedung::find($id_gedung);

    	$tgldisable =ModelPenyewaan::select('tanggal_sewa')->where('id_gedung', $id_gedung)->get();

    	$tgl = array(
    		0=>"2020-06-25",
    		1=>"2020-06-18",
    		2=>"2020-06-20",
    	);

    	
    	return view('user.halaman.FormulirSewaGedung',compact('datas','tgldisable','tgl'));
    }

	public function tanggaldisable($id_gedung) {
    	$tgldisable = DB::table('penyewaan')->select('tanggal_sewa')->get();

    	$sites = array(
    		0=>"2020-06-25",
    		1=>"2020-06-18",
    		2=>"2020-06-20",
    	);

    	return view('user.layout.TampilanUser',compact('sites'));
    }    

    public function store( Request $request) {
        $this->validate($request, [
            'id_penyewaan' => 'required|unique:penyewaan',
            'gedung' => 'required',
            'tanggal_sewa' => 'nullable',
            'nama_acara' => 'required',
            'nama_penyewa' => 'required', 
            'email' => 'required',
            'id_user' => 'nullable'
        ]);

        $data = new ModelPenyewaan();
        $data->id_penyewaan = $request->id_penyewaan;
        $data->id_gedung = $request->gedung;
        $data->tanggal_sewa = $request->tanggal_sewa;
        $data->tanggal_selesai = $request->tanggal_sewa;
        $data->nama_acara = $request->nama_acara;
        $data->id_user = $request->id_user;
        $data->nama_penyewa = $request->nama_penyewa;
        $data->email_penyewa = $request->email;
        $data->status_sewa = 'Menunggu Pembayaran';
        $data->save();

        return redirect('HalamanKonfirmasiBayar'.$request->id_penyewaan.'');
    }
}
