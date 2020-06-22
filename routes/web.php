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

Route::get('/mitra', 'MitraController@index');
Route::get('/mitra/create', 'MitraController@create');
Route::get('/mitra/{mitra}', 'MitraController@show');
Route::post('/mitra', 'MitraController@store');
Route::delete('/mitra/{mitra}', 'MitraController@destroy');
Route::get('/mitra/{mitra}/edit', 'MitraController@edit');
Route::patch('/mitra/{mitra}', 'MitraController@update');

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