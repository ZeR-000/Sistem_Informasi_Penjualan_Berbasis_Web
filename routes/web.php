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
    return view('v_home');
});
Route::get('/dashboard','App\Http\Controllers\HomeController@index');
//Route::view('/dashboard', 'v_dashboard');

// Route untuk halaman data karyawan
Route::get('/data_karyawan','App\Http\Controllers\KaryawanController@tampil');
Route::get('/inputkaryawan','App\Http\Controllers\KaryawanController@tambah');
Route::post('/data_karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/deletekaryawan/{id}','App\Http\Controllers\KaryawanController@destroy');
Route::get('/editkaryawan/{id}','App\Http\Controllers\KaryawanController@edit');
Route::post('/updatekaryawan','App\Http\Controllers\KaryawanController@update');
Route::get('/carikaryawan','App\Http\Controllers\KaryawanController@cari');
Route::get('/cetakkaryawan','App\Http\Controllers\KaryawanController@cetak');

// Route untuk halaman data pembeli
Route::get('/data_pembeli','App\Http\Controllers\PembeliController@tampil');
Route::get('/inputpembeli','App\Http\Controllers\PembeliController@tambah');
Route::post('/data_pembeli/store','App\Http\Controllers\PembeliController@store');
Route::get('/deletepembeli/{id}','App\Http\Controllers\PembeliController@destroy');
Route::get('/editpembeli/{id}','App\Http\Controllers\PembeliController@edit');
Route::post('/updatepembeli','App\Http\Controllers\PembeliController@update');
Route::get('/caripembeli','App\Http\Controllers\PembeliController@cari');
Route::get('/cetakpembeli','App\Http\Controllers\PembeliController@cetak');

//Route untuk halaman data stok barang
Route::get('/data_stok_barang','App\Http\Controllers\StokController@tampil');
Route::get('/inputstok','App\Http\Controllers\StokController@tambah');
Route::post('/data_stok_barang/store','App\Http\Controllers\StokController@store');
Route::get('/deletestok/{id}','App\Http\Controllers\StokController@destroy');
Route::get('/editstok/{id}','App\Http\Controllers\StokController@edit');
Route::post('/updatestok','App\Http\Controllers\StokController@update');
Route::get('/caristok','App\Http\Controllers\StokController@cari');
Route::get('/cetakstok','App\Http\Controllers\StokController@cetak');

//Route untuk halaman data jenis
Route::get('/data_jenis','App\Http\Controllers\JenisController@tampil');
Route::get('/inputjenis','App\Http\Controllers\JenisController@tambah');
Route::post('/data_jenis/store','App\Http\Controllers\JenisController@store');
Route::get('/deletejenis/{id}','App\Http\Controllers\JenisController@destroy');
Route::get('/editjenis/{id}','App\Http\Controllers\JenisController@edit');
Route::post('/updatejenis','App\Http\Controllers\JenisController@update');
Route::get('/carijenis','App\Http\Controllers\JenisController@cari');
Route::get('/cetakjenis','App\Http\Controllers\JenisController@cetak');

//Route untuk halaman data penjualan
Route::get('/data_penjualan','App\Http\Controllers\PenjualanController@tampil');
Route::get('/inputpenjualan','App\Http\Controllers\PenjualanController@tambah');
Route::post('/data_penjualan/store','App\Http\Controllers\PenjualanController@store');
Route::get('/deletepenjualan/{id}','App\Http\Controllers\PenjualanController@destroy');
Route::get('/editpenjualan/{id}','App\Http\Controllers\PenjualanController@edit');
Route::post('/updatepenjualan','App\Http\Controllers\PenjualanController@update');
Route::get('/caripenjualan','App\Http\Controllers\PenjualanController@cari');
Route::get('/cetakpenjualan','App\Http\Controllers\PenjualanController@cetak');

//Route untukk halaman data admin
Route::get('/data_admin','App\Http\Controllers\AdminController@tampil');
Route::get('/inputadmin','App\Http\Controllers\AdminController@tambah');
Route::post('/data_admin/store','App\Http\Controllers\AdminController@store');
Route::get('/deleteadmin/{id}','App\Http\Controllers\AdminController@destroy');
Route::get('/editadmin/{id}','App\Http\Controllers\AdminController@edit');
Route::post('/updateadmin','App\Http\Controllers\AdminController@update');
Route::get('/cariadmin','App\Http\Controllers\AdminController@cari');
Route::get('/cetakadmin','App\Http\Controllers\AdminController@cetak');



// Route::get('/data_karyawan', [KaryawanController::class, 'tampil']);
// Route::view('/data_pembeli', 'v_data_pembeli');
// Route::view('/data_stok_barang', 'v_data_stok_barang');
