<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGedung;
use App\ModelPenyewaan;
use App\ModelPembayaran;

class CrudPembayaranGedungController extends Controller
{
    public function index(){         
        $datas = ModelPenyewaan::orderBy('tanggal_sewa','DESC')->get();        
        return view('admin.halaman.CrudPembayaranGedung',compact('datas'));     
    }  

    public function validasi($id_penyewaan) {
        $bayar = ModelPembayaran::where('id_penyewaan',$id_penyewaan)->first();
        $sewa = ModelPenyewaan::where('id_penyewaan',$id_penyewaan)->first();

        $bayar->status_bayar = 'Pembayaran Selesai';
        $bayar->save();

        $sewa->status_sewa = 'Disewa';
        $sewa->save();

        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil di Validasi!');
    }

    public function bayarSalah($id_pembayaran) {
        
        $salah = ModelPembayaran::find($id_pembayaran);
        $salah->status_bayar = 'Tidak Sesuai';
        
        $salah->save();
        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil di Validasi!');
    }

}
