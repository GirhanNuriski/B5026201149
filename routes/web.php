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

//route CRUD
Route::get('/pegawai','PegawaiController@index');

//route tambah file
Route::get('/pegawai/tambah','PegawaiController@tambah');

//route pegawai/store
Route::post('/pegawai/store','PegawaiController@store');

//route edit
Route::get('/pegawai/edit/{id}','PegawaiController@edit');

//route update
Route::post('/pegawai/update','PegawaiController@update');

//route hapus
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
