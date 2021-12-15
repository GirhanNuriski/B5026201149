<?php

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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//praktikum 1
Route::get('praktikum1', function () {
    return view('prak1web');
});

//tugas 4
Route::get('tugas4', function (){
    return view('tugas4web');
});

//praktikum 2
Route::get('praktikum2','ViewController@showPraktikum2');

//ets
Route::get('ets','ViewController@showETS');

//filephp
Route::get('filephp','ViewController@showFilePHP');
Route::post('indexphp','ViewController@showIndexPHP');

//route pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route pendapatan
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','PendapatanController@cari');

//route absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route home
Route::get('/home' , 'HomeController@index');

//route penggaris
Route::get('/penggaris','PenggarisController@index');
Route::get('/penggaris/tambah','PenggarisController@tambah');
Route::post('/penggaris/store','PenggarisController@store');
Route::get('/penggaris/cari','PenggarisController@cari');
Route::get('/penggaris/edit/{id}','PenggarisController@edit');
Route::post('/penggaris/update','PenggarisController@update');
Route::get('/penggaris/hapus/{id}','PenggarisController@hapus');
Route::get('/penggaris/detail/{id}','PenggarisController@view');

Route::get('/belanja','BelanjaController@index');
Route::get('/belanja/tambah','BelanjaController@tambah');
Route::post('/belanja/store','BelanjaController@store');
Route::get('/belanja/hapus/{id}','BelanjaController@hapus');
