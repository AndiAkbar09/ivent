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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// route kegiatan
Route::group(['prefix'=> 'kegiatans'], function(){
    Route::get('index','KegiatanController@index')->name('kegiatans');

    Route::get('create','KegiatanController@create')->name('kegiatans.create');

    Route::post('save-Newkegiatan','KegiatanController@store')->name('kegiatans.save-Newkegiatan');
    
    Route::get('formEdit/{kegiatan}','KegiatanController@edit')->name('kegiatans.formEdit');
    
    Route::patch('update/{kegiatan}','KegiatanController@update')->name('kegiatans.update');

    Route::delete('formDelete/{kegiatan}','KegiatanController@destroy')->name('kegiatans.formDelete');

});

// route pendaftaran
Route::group(['prefix'=> 'pendaftarans'], function(){
    Route::get('index', 'Pendaftaran\PendaftaranController@index')->name('pendaftarans');

    Route::get('create','Pendaftaran\PendaftaranController@create')->name('pendaftarans.create');

    Route::get('Showpendaftaran','Pendaftaran\PendaftaranController@show')->name('pendaftarans.Showpendaftaran');

});
 
// route user
Route::group(['prefix'=> 'users'], function(){
    Route::get('index','User\UserController@index')->name('users');

    Route::get('check', 'Kegiatan\ActifityController@index')->name('cek-kegiatan');
});
