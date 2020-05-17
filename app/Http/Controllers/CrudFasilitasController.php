<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelFasilitas;
use App\ModelGedung;

class crudfasilitasController extends Controller
{
    public function index()     {         
        $datas = ModelFasilitas::get();         
        return view('admin.halaman.CrudFasilitas',compact('datas'));     
    }  

    public function tambah() {
        return view('admin.halaman.tambah_data.TambahFasilitas');
    }

    public  function pilih_gedung(){
        $gedungs = ModelGedung::all();     
        return view('admin.halaman.tambah_data.TambahFasilitas',compact('gedungs')); 
    } 

    public function store( Request $request) {
        $this->validate($request, [
            'gedung' => 'required',
            'ruangan_tambahan' => 'nullable',
            'toilet' => 'nullable',
            'perlengkapan_operator' => 'nullable',
            'kursi' => 'nullable', 
            'musholah' => 'nullable', 
            'fasilitas_tambahan1' => 'nullable', 
            'fasilitas_tambahan2' => 'nullable', 
            'fasilitas_tambahan3' => 'nullable', 
            'fasilitas_tambahan4' => 'nullable', 
            'fasilitas_tambahan5' => 'nullable', 
        ]);

        $data = new ModelFasilitas();
        $data->id_gedung = $request->gedung;
        $data->ruangan_tambahan = $request->ruangan_tambahan;
        $data->toilet = $request->toilet;
        $data->perlengkapan_operator = $request->perlengkapan_operator;
        $data->kursi = $request->kursi;
        $data->musholah = $request->musholah;
        $data->fasilitas_tambahan1 = $request->fasilitas_tambahan1;
        $data->fasilitas_tambahan2 = $request->fasilitas_tambahan2;
        $data->fasilitas_tambahan3 = $request->fasilitas_tambahan3;
        $data->fasilitas_tambahan4 = $request->fasilitas_tambahan4;
        $data->fasilitas_tambahan5 = $request->fasilitas_tambahan5;
        $data->save();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil ditambahkan !');
    }

    public function edit($id_fasilitas) {
        $datas = ModelFasilitas::find($id_fasilitas);
        $gedungs = ModelGedung::all(); 
        return view('admin.halaman.edit_data.EditFasilitas',compact('datas', 'gedungs'));
    }

    public function update($id_fasilitas, Request $request) {
        $this->validate($request, [
            'gedung' => 'required',
            'ruangan_tambahan' => 'nullable',
            'toilet' => 'nullable',
            'perlengkapan_operator' => 'nullable',
            'kursi' => 'nullable', 
            'musholah' => 'nullable', 
            'fasilitas_tambahan1' => 'nullable', 
            'fasilitas_tambahan2' => 'nullable', 
            'fasilitas_tambahan3' => 'nullable', 
            'fasilitas_tambahan4' => 'nullable', 
            'fasilitas_tambahan5' => 'nullable', 
        ]);

        $data = ModelFasilitas::find($id_fasilitas);
        $data->id_gedung = $request->gedung;
        $data->ruangan_tambahan = $request->ruangan_tambahan;
        $data->toilet = $request->toilet;
        $data->perlengkapan_operator = $request->perlengkapan_operator;
        $data->kursi = $request->kursi;
        $data->musholah = $request->musholah;
        $data->fasilitas_tambahan1 = $request->fasilitas_tambahan1;
        $data->fasilitas_tambahan2 = $request->fasilitas_tambahan2;
        $data->fasilitas_tambahan3 = $request->fasilitas_tambahan3;
        $data->fasilitas_tambahan4 = $request->fasilitas_tambahan4;
        $data->fasilitas_tambahan5 = $request->fasilitas_tambahan5;
        $data->save();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_fasilitas) {
        $datas = ModelFasilitas::find($id_fasilitas);
        $datas->delete();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil dihapus!');
    } 
}
