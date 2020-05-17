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

    public function edit($id_galeri) {
        $datas = ModelGaleri::find($id_galeri);
        $gedungs = ModelGedung::all();
        return view('admin.halaman.edit_data.EditGaleri',compact('datas','gedungs'));
    }

    public function update($id_galeri, Request $request) {
        $this->validate($request, [
            'gedung' => 'required',
            'nama_galeri' => 'required',
            'gambar_galeri' => 'nullable|'
            ]);

        $datas = ModelGaleri::find($id_galeri);
        $datas->id_gedung = $request->gedung;
        $datas->nama_galeri = $request->nama_galeri;

        if (empty($request->gambar_galeri)){
            $datas->gambar_galeri = $datas->gambar_galeri;
        }
        else{
            unlink('img/galeri/'.$datas->gambar_galeri); //menghapus file lama
            $file = $request->file('gambar_galeri'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/galeri',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $datas->gambar_galeri = $nama_file;

        }
        $datas->save();
        return redirect('CrudGaleri')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_galeri) {
        $datas = ModelGaleri::find($id_galeri);
        $datas->delete();
        return redirect('CrudGaleri')->with('alert-success','Data berhasil dihapus!');
    }

}
