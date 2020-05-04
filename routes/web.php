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

Route::get('HalamanFasilitas',function() {
    $bangunan=['Luas Ruang Utama' => '500', 'Luas Lobby' => '100', 'Luas Teras Depan' => '50'];
    return view('user.halaman.HalamanFasilitas', compact('bangunan'));
});

/*Route::get('HalamanFasilitas','HalamanFasilitasController@index');*/

/*---<<Route halaman Informasi belum dibuat>>-------*/

Route::get('HalamanSewaGedung','HalamanSewaGedungController@pilih_gedung');
Route::post('AksiSewa','HalamanSewaGedungController@store');

Route::get('HalamanGaleri', function () {
    return view('user.halaman.HalamanGaleri');
});

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

Route::get('CrudFasilitas', function () {
    return view('admin.halaman.CrudFasilitas');
});

/*Route::get('CrudFasilitas', 'CrudFasilitasController@index'); */

/*-----<<Halaman Crud Kalender Acara belum dibuat>>-------*/

Route::get('CrudGaleri', function () {
    return view('admin.halaman.CrudGaleri');
});

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