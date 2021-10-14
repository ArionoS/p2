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

Auth::routes();

Route::get('/welcome', function () {
    return view('Auth.welcome');
});

Route::get('/login1', function () {
  return view('Auth.login1');
});

Route::get('shop.index/', function () {
    return view('shop.index');
  });

Route::get('artikel.index/', function () {
    return view('artikel.index');
  });

Route::get('cekkal.index/', function () {
    return view('cekkal.index');
  });

Route::get('konsultasi.index/', function () {
    return view('konsultasi.index');
  });

Route::get('GymTerdekat.index/', function () {
    return view('GymTerdekat.index');
  });

//MOVIE
Route::get('vidtutor.index/', function () {
    return view('vidtutor.index');
  });

Route::get('vidtutor.Tutor1/', function () {
    return view('vidtutor.Tutor1');
  });
  
  Route::get('about-us/', function () {
    return view('about-us');
  });

  Route::get('category/', function () {
    return view('category');
  });

  Route::get('howitworks/', function () {
    return view('howitworks');
  });

  Route::get('indexx/', function () {
    return view('indexx');
  });

  Route::get('pricing/', function () {
    return view('pricing');
  });

  Route::get('productpage/', function () {
    return view('productpage');
  });

  Route::get('profile/', function () {
    return view('profile');
  });


//Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home1');
Route::get('/', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('register', 'UserController');

Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');
Route::get('/format_buku', 'BukuController@format');
Route::post('/import_buku', 'BukuController@import');

Route::resource('transaksi', 'TransaksiController');
Route::get('/laporan/trs', 'LaporanController@transaksi');
Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
Route::get('/laporan/trs/excel', 'LaporanController@transaksiExcel');

Route::get('/laporan/buku', 'LaporanController@buku');
Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
Route::get('/laporan/buku/excel', 'LaporanController@bukuExcel');


