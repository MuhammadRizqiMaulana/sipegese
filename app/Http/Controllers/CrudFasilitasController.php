<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fasilitas;

class crudfasilitasController extends Controller
{
    public function index()     {         
    	$datas = fasilitas::get();         
    	return view('admin.halaman.CrudFasilitas',compact('datas'));     
    }     
    public function create()     {         
    	return view('admin.tambahfasilitas');     
    }     
    public function store(Request $request)     {         
    	fasilitas::create([             
    		'fasilitas1' => $request->input('fasilitas1'),             
    		'fasilitas2' => $request->input('fasilitas2'),             
    		'fasilitas3' => $request->input('fasilitas3'),             
    		'fasilitas4' => $request->input('fasilitas4'),             
    		'fasilitas5' => $request->input('fasilitas5'),             
    		'fasilitas6' => $request->input('fasilitas6'),             
    		'fasilitas7' => $request->input('fasilitas7'),             
    		'fasilitas8' => $request->input('fasilitas8'),             
    		'fasilitas9' => $request->input('fasilitas9'),             
    		'fasilitas10' => $request->input('fasilitas10'),          
    	]);         
    	return redirect()->route('/crudfasilitas');     
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
