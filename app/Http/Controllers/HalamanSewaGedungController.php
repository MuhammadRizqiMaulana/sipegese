<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenyewaan;
use App\ModelGedung;


class HalamanSewaGedungController extends Controller
{
    

    public  function pilih_gedung(){

    	$datas = ModelGedung::all();     
    	return view('user.halaman.HalamanSewaGedung',compact('datas'));     
    } 

    public function store( Request $request) {
        $this->validate($request, [
            'id_penyewaan' => 'required|unique:penyewaan',
            'gedung' => 'required',
            'tanggal_sewa' => 'nullable',
            'nama_acara' => 'required',
            'nama_penyewa' => 'required', 
            'email' => 'required'
        ]);

        $data = new ModelPenyewaan();
        $data->id_penyewaan = $request->id_penyewaan;
        $data->id_gedung = $request->gedung;
        $data->tanggal_sewa = $request->tanggal_sewa;
        $data->tanggal_selesai = $request->tanggal_sewa;
        $data->nama_acara = $request->nama_acara;
        $data->nama_penyewa = $request->nama_penyewa;
        $data->email_penyewa = $request->email;
        $data->status_sewa = 'menunggu';
        $data->save();
        return redirect('HalamanKonfirmasiBayar'.$request->id_penyewaan.'');
    }

    
}
