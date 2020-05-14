<?php

namespace App\Http\Controllers;

use App\ModelGedung;
use Illuminate\Http\Request;

class CrudGedungController extends Controller
{
    public function index()     {         
    	$datas = ModelGedung::get();         
    	return view('admin.halaman.CrudGedung',compact('datas'));     
    }  

    public function tambah() {
    	return view('admin.halaman.tambah_data.TambahGedung');
    }

    public function store( Request $request) {
    	$this->validate($request, [
    		'nama_gedung' => 'required',
    		'alamat' => 'required',
    		'deskripsi' => 'required',
            'harga' => 'required',
    		'gambar_gedung' => 'required' 
    		]);


        $file = $request->file('gambar_gedung'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/gedung',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $data = new ModelGedung();
        $data->nama_gedung = $request->nama_gedung;
        $data->alamat = $request->alamat;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;        
        $data->gambar_gedung = $nama_file;

    	$data->save();
    	return redirect('CrudGedung');
    }

   	public function edit($id_gedung) {
    	$datas = ModelGedung::find($id_gedung);
    	return view('admin.halaman.edit_data.EditGedung',compact('datas'));
    }

    public function update($id_gedung, Request $request) {
    	$this->validate($request,[
    		'nama_gedung' => 'required',
    		'alamat' => 'required',
    		'deskripsi' => 'required',
            'harga' => 'required',
    		'gambar' => 'required', 
    		
    	]);

    	$datas = ModelGedung::find($id_gedung);
    	$datas->nama_gedung = $request->nama_gedung;
    	$datas->alamat = $request->alamat;
    	$datas->deskripsi = $request->deskripsi;
        $datas->harga = $request->harga;
    	$datas->gambar = $request->gambar;
    	$datas->save();
    	return redirect('CrudGedung');
    }

    public function delete($id_gedung) {
    	$datas = Modelgedung::find($id_gedung);
    	$datas->delete();
    	return redirect('CrudGedung');
    }

}
