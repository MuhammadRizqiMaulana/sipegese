<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\ModelGaleri;
use App\ModelGedung;

class CrudGaleriController extends Controller
{
    public function index()     {         
    	$datas = ModelGaleri::get();         
    	return view('admin.halaman.CrudGaleri',compact('datas'));     
    }  

    public function tambah() {
    	return view('admin.halaman.tambah_data.TambahGaleri');
    }

    public  function pilih_gedung(){
    	$gedungs = ModelGedung::all();     
    	return view('admin.halaman.tambah_data.TambahGaleri',compact('gedungs')); 
    } 

    public function store( Request $request) {
    	$this->validate($request, [
    		'gedung' => 'required',
    		'nama_galeri' => 'required',
    		'gambar_galeri' => 'required|'
    		]);


        $file = $request->file('gambar_galeri'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/galeri',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $data = new ModelGaleri();
        $data->id_gedung = $request->gedung;
        $data->nama_galeri = $request->nama_galeri;
        $data->gambar_galeri = $nama_file;

    	$data->save();
    	return redirect('CrudGaleri')->with('alert-success','Data berhasil ditambahkan !');;
    }
}
