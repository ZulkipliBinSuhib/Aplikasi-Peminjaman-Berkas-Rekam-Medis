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

Route::get('/', function () {
    return view('pageLogin');
});
//Peminjaman
Route::get('/peminjaman/cetak', 'PeminjamanController@cetak')->name('peminjaman.cetakSemua');
route::get('/peminjaman/cetak/{id}','PeminjamanController@cetak_id')->name('peminjaman.cetak');



Route::get('peminjaman/get_data', 'PeminjamanController@ajax_create')->name('peminjaman.ajax_create');
route::resource('/peminjaman','PeminjamanController');
Route::get('pengembalian/get_data', 'PengembalianController@ajax_create')->name('pengembalian.ajax_create');

route::resource('/admin','AdminController');
Route::get('/cetak_test', 'PasienController@cetak_test')->name('pasien.cetak_test');
route::get('/pasien/cetak','PasienController@cetak')->name('pasien.cetak');

//Login
route::get('/login','admin\AuthController@pageLogin')->name('login')->middleware('guest');
route::post('/ceklogin','admin\AuthController@cekLogin')->name('ceklogin')->middleware('guest');
route::get('/logout','admin\AuthController@logoutLogin')->name('logout');

route::get('/home','admin\AuthController@dashboard')->name('home')->middleware('auth');
//Pasien
route::resource('/pasien','PasienController');

//Pengembalian 
route::resource('/pengembalian','PengembalianController');




//Laporan Pasien
Route::get('/pasien/cetak', 'PasienController@cetak')->name('pasien.cetakSemua');
route::get('/pasien/cetak/{id}','PasienController@cetak_id')->name('pasien.cetak_id');

//Laporan Peminjaman


Route::get('/pasien/cetak_test', 'PasienController@cetak_test')->name('pasien.cetak_test');

