<?php

namespace App\Http\Controllers;

use App\ModelAdmin;
use Illuminate\Http\Request;


class CrudAkunAdminController extends Controller
{
    public function index()     {         
    	$datas = ModelAdmin::get();         
    	return view('pemilik.halaman.CrudAkunAdmin',compact('datas'));     
    }  

    public function tambah() {
    	return view('pemilik.halaman.tambah_data.TambahAkunAdmin');
    }

    public function store( Request $request) {
    	$this->validate($request, [
    		'nama' => 'required',
    		'username' => 'required|unique:admin',
    		'password' => 'required|min:8',
            'email' => 'required|unique:admin',
    		'no_hp' => 'required', 
    		'foto' => 'nullable', 
    		'level' => 'required', 
    	]);

    	$data = new ModelAdmin();
    	$data->nama_admin = $request->nama;
    	$data->username = $request->username;
    	$data->password = bcrypt($request->password);
        $data->email = $request->email;
    	$data->no_hp = $request->no_hp;
    	$data->foto = $request->foto;
    	$data->level = $request->level;
    	$data->save();
    	return redirect('CrudAkunAdmin');
    }

   	public function edit($id_admin) {
    	$datas = ModelAdmin::find($id_admin);
    	return view('pemilik.halaman.edit_data.EditAkunAdmin',compact('datas'));
    }

    public function update($id_admin, Request $request) {
    	$this->validate($request,[
    		'nama' => 'required',
    		'username' => 'required|unique:admin',
    		'password' => 'required|min:8',
            'email' => 'required|unique:admin',
    		'no_hp' => 'required|max:15', 
    		'foto' => 'nullable', 
    		'level' => 'required', 
    	]);

    	$datas = ModelAdmin::find($id_admin);
    	$datas->nama_admin = $request->nama;
    	$datas->username = $request->username;
    	$datas->password = bcrypt($request->password);
        $datas->email = $request->email;
    	$datas->no_hp = $request->no_hp;
    	$datas->foto = $request->foto;
    	$datas->level = $request->level;
    	$datas->save();
    	return redirect('CrudAkunAdmin');
    }

    public function delete($id_admin) {
    	$datas = ModelAdmin::find($id_admin);
    	$datas->delete();
    	return redirect('CrudAkunAdmin');
    }

}

