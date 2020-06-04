<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HalamanLoginUserController extends Controller
{
    public  function index(){

		if(Session::get('login')){
    		return redirect('/');
    	} else {
    		return view('user.halaman.HalamanLoginUser');
    	}
    }

    public function login(){
    	return view('user.halaman.HalamanLoginUser');
    }

    public function loginPost(Request $request){

    	$email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama_user);
                Session::put('email',$data->email);
                Session::put('id_user',$data->id_user);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
    			return redirect('HalamanLoginUser')->with('alert','Username atau Password salah !');
    		}
    	} else {
    			return redirect('HalamanLoginUser')->with('alert','Username atau Password salah !');
    	}
    }

    public function logout(){
    	Session::flush();
    	return redirect('HalamanLoginUser')->with('alert-success','Anda berhasil logout');
    }

    public function register(){
    	return view('user.halaman.HalamanRegisterUser');
    }

    public function registerPost(Request $request){
    	$this->validate($request, [
    		'nama' => 'required',
    		'email' => 'required|min:11|unique:user',
    		'password' => 'required|min:8',
    		'confirmation' => 'required|same:password', 
    	]);

    	$data = new ModelUser();
    	$data->nama_user = $request->nama;
    	$data->email = $request->email;
    	$data->password = bcrypt($request->password);
    	$data->no_hp = $request->no_telp;
    	$data->alamat = $request->alamat;
    	$data->save();
    	return redirect('HalamanLoginUser')->with('alert-success','Berhasil Register');
    }
}
