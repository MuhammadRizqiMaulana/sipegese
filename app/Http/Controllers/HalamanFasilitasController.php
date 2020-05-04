<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fasilitas;

class HalamanFasilitasController extends Controller
{
    public function index() {
    	$semua=fasilitas::all();

    	return view('user.halaman.HalamanFasilitas', ['datas'=>$semua]);
    }
}
