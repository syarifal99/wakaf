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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/mitra', function () {
//     return view('mitra');
// });

Route::get('/', 'PagesController@home');

//admin daftar mitra
Route::put('/upload/update/{id}', 'MitraController@update');
Route::get('/upload', 'MitraController@upload');
Route::get('/tambah', 'MitraController@create');
Route::get('/upload/{id}', 'MitraController@show');
Route::post('/upload/proses', 'MitraController@store');
Route::get('/upload/hapus/{id}', 'MitraController@destroy');
Route::get('/upload/edit/{id}','MitraController@edit');

//Gabungan front end + back end
Route::get('/PendaftaranMitra','MitraController2@upload');
Route::get('/TambahMitra', 'MitraController2@create');
Route::post('/TambahMitra/proses', 'MitraController2@store');
Route::get('/Mitra/hapus/{id}', 'MitraController2@destroy');

Route::put('/Mitra/update/{id}', 'MitraController2@update');
Route::get('/upload', 'MitraController2@upload');
Route::get('/Mitra/detail/{id}', 'MitraController2@show');
Route::get('/Mitra/edit/{id}','MitraController2@edit');

Route::get('/pendaftaran', 'PendaftaranController@index');
Route::get('/pendaftaran/create', 'PendaftaranController@create');
Route::get('/pendaftaran/{id}', 'PendaftaranController@show');
Route::post('/pendaftaran', 'PendaftaranController@store');
Route::delete('/pendaftaran/{pendaftaran}', 'PendaftaranController@destroy');
Route::get('/pendaftaran/{pendaftaran}/edit', 'PendaftaranController@edit');
Route::patch('/pendaftaran/{pendaftaran}', 'PendaftaranController@update');

Route::get('/validasi', 'ValidasiController@index');
Route::get('/validasi/create', 'ValidasiController@create');
Route::get('/validasi/{id}', 'ValidasiController@show');
Route::post('/validasi', 'ValidasiController@store');

Route::get('/kota','KotaController@show')->name('kota.show');