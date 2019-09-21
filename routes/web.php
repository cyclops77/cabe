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
//     return view('welcome');
// });

Route::post('/send/registration','RegisterController@create');

Route::get('/daftar-mahasiswa','RegisterController@index');

Route::get('/json-prodi/','RegisterController@prodi');

Route::get('/daftar-perusahaan','PerusahaanController@index');

Route::post('send/regis-perusahaan','PerusahaanController@register');


Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');

//===||login perusahaan||===// 

Route::group(['middleware' => ['auth','checkRole:perusahaan']], function(){
	
// Route::get('/index','BeasiswaController@index');
	
Route::get('/buat-beasiswa','BeasiswaController@createLink');
	
Route::post('/send/buat-beasiswa','BeasiswaController@create');

});

//===||login SEMUA||===// 

Route::group(['middleware' => ['auth','checkRole:mahasiswa,perusahaan,admin']], function(){

Route::get('/index','BeasiswaController@listBeasiswa');

});

//===||login mahasiswa||===// 

Route::group(['middleware' => ['auth','checkRole:mahasiswa']], function(){

Route::get('/beasiswa/{slug}', 'BeasiswaController@detail');

});

//===||login admin||===// 

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::get('/pendaftar','PerusahaanController@listPendaftar');

Route::post('/data-pendaftaran/terima-perusahaan','PerusahaanController@accRegisterPerusahaan');

});