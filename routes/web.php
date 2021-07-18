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

Route::get('/generate/{nama}', 'antrianController@printAntrian');

Route::get('/panggil', 'antrianController@suara');

Route::get('/antrian-baru', 'antrianController@antrian-baru');

Route::get('/ada-antrian', 'antrianController@ada-antrian');

Route::get('/tidak-ada', 'antrianController@tidak_ada_antrian');

Route::get('/', function () {

    return view('antrian');
    // return view('welcome');
});

?>