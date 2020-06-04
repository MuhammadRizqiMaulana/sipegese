<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\ModelGedung;
use App\ModelPenyewaan;
use App\ModelPembayaran;

class CrudPenyewaanGedungController extends Controller
{

    public function index(){ 
    	$now = Carbon::now()->format('y-m-d');
    	$tanggalwaktu = Carbon::now();

        $datas = ModelPenyewaan::orderBy('tanggal_sewa','DESC')->get(); 

        $selesai = ModelPenyewaan::all();

        foreach ($selesai as $updet) {
        	if ($updet->tanggal_sewa > $now && $updet->status_sewa == 'Disewa') {

        		$tglsewa = ModelPenyewaan::find($updet->id_penyewaan);
        		$tglsewa->status_sewa = 'Selesai';
        		$tglsewa->save();
        	}
        }

        foreach ($selesai as $batal) {
			$selisihHari = $batal->created_at->diffInDays($tanggalwaktu);

        	if ($selisihHari >= 1  && $batal->status_sewa == 'Menunggu Pembayaran') {

        		$updetbatal = ModelPenyewaan::find($updet->id_penyewaan);
        		$updetbatal->status_sewa = 'Batal';
        		$updetbatal->save();
        	}
        }


        return view('admin.halaman.CrudPenyewaanGedung',compact('datas'));     
    }  

}
