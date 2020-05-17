<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*------------Halaman User -----------------*/
Route::get('/', function () {
    return view('user.Homepage');
});

Route::get('HalamanLoginUser','HalamanLoginUserController@index');
Route::get('HalamanLoginUser','HalamanLoginUserController@login');
Route::post('loginPost','HalamanLoginUserController@loginPost');
Route::get('HalamanRegisterUser','HalamanLoginUserController@register');
Route::post('registerPost','HalamanLoginUserController@registerPost');
Route::get('logout','HalamanLoginUserController@logout');

Route::get('HalamanFasilitas','HalamanFasilitasController@index');

/*---<<Route halaman Informasi belum dibuat>>-------*/

Route::get('HalamanSewaGedung','HalamanSewaGedungController@pilih_gedung');
Route::post('AksiSewa','HalamanSewaGedungController@store');

Route::get('HalamanGaleri','HalamanGaleriController@index');

Route::get('HalamanKonfirmasiBayar', function () {
    return view('user.halaman.HalamanKonfirmasiBayar');
});
Route::get('HalamanKonfirmasiBayar{id_penyewaan}','HalamanKonfirmasiBayarController@index');
Route::get('HalamanKonfirmasiBayar/cari','HalamanKonfirmasiBayarController@cari');
Route::post('AksiKonfirmasiBayar','HalamanKonfirmasiBayarController@store');

/*------End Halaman User------------*/

/*--------Halaman Admin-------------*/
Route::get('DashboardAdmin', function () {
    return view('admin.DashboardAdmin');
});

Route::get('CrudAkunUser', function () {
    return view('admin.halaman.CrudAkunUser');
});

Route::get('CrudGedung','CrudGedungController@index');
Route::get('TambahGedung','CrudGedungController@tambah');
Route::post('AksiTambahGedung','CrudGedungController@store');
Route::get('EditGedung{id_gedung}','CrudGedungController@edit');
Route::put('AksiEditGedung{id_gedung}','CrudGedungController@update');
Route::get('HapusGedung{id_gedung}','CrudGedungController@delete');

Route::get('CrudFasilitas','CrudFasilitasController@index');
Route::get('TambahFasilitas','CrudFasilitasController@tambah');
Route::get('TambahFasilitas','CrudFasilitasController@pilih_gedung');
Route::post('AksiTambahFasilitas','CrudFasilitasController@store');
Route::get('EditFasilitas{id_fasilitas}','CrudFasilitasController@edit');
Route::post('AksiEditFasilitas{id_fasilitas}','CrudFasilitasController@update');
Route::get('HapusFasilitas{id_fasilitas}','CrudFasilitasController@delete');

/*-----<<Halaman Crud Kalender Acara belum dibuat>>-------*/

Route::get('CrudGaleri','CrudGaleriController@index');
Route::get('TambahGaleri','CrudGaleriController@tambah');
Route::get('TambahGaleri','CrudGaleriController@pilih_gedung');
Route::post('AksiTambahGaleri','CrudGaleriController@store');
Route::get('EditGaleri{id_galeri}','CrudGaleriController@edit');
Route::post('AksiEditGaleri{id_galeri}','CrudGaleriController@update');
Route::get('HapusGaleri{id_galeri}','CrudGaleriController@delete');

/*------End Halaman Admin------------*/

/*--------Halaman Pemilik-------------*/
Route::get('DashboardPemilik', function () {
    return view('pemilik.DashboardPemilik');
});

Route::get('CrudAkunAdmin','CrudAkunAdminController@index');
Route::get('TambahAkunAdmin','CrudAkunAdminController@tambah');
Route::post('AksiTambahAkunAdmin','CrudAkunAdminController@store');
Route::get('EditAkunAdmin{id_admin}','CrudAkunAdminController@edit');
Route::put('AksiEditAkunAdmin{id_admin}','CrudAkunAdminController@update');
Route::get('HapusAkunAdmin{id_admin}','CrudAkunAdminController@delete');


Route::get('LaporanPenyewaan', function () {
    return view('pemilik.halaman.LaporanPenyewaan');
});

Route::get('LihatKalender', function () {
    return view('pemilik.halaman.LihatKalender');
});
Route::get('LihatGaleri', function () {
    return view('pemilik.halaman.LihatGaleri');
});