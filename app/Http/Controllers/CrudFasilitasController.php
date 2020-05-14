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

    public function edit($id_fasilitas)     {         
    	$data = fasilitas::findOrFail($id_fasilitas);         
    	return view('/editfasilitas',compact('data'));     
    } 
 
    public function update(Request $request, $id_fasilitas)     {         
    	$data = fasilitas::findOrFail($id_fasilitas);         
    	$data->fasilitas1 = $request->input('fasilitas1');         
    	$data->fasilitas2 = $request->input('fasilitas2');         
    	$data->fasilitas3 = $request->input('fasilitas3');         
    	$data->fasilitas4 = $request->input('fasilitas4');         
    	$data->fasilitas5 = $request->input('fasilitas5');         
    	$data->fasilitas6 = $request->input('fasilitas6');        
    	$data->fasilitas7 = $request->input('fasilitas7');        
    	$data->fasilitas8 = $request->input('fasilitas8');         
    	$data->fasilitas9 = $request->input('fasilitas9');         
    	$data->fasilitas10 = $request->input('fasilitas10');         
    	       
    	$data->update(); 
 
        return redirect()->to('/crudfasilitas');     
    }     
    public function destroy($id_fasilitas)     {         
    	$hapus              = fasilitas::findOrFail($id_fasilitas);         
    	$hapus->delete();          
    	return redirect()->to('/crudfasilitas');     } 
}
