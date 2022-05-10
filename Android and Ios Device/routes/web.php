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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tampildata', 'benchmarksController@readdata');
Route::get('/tambahdata','benchmarksController@input');
Route::post('/mahasiswa/store', 'benchmarksController@store');

Route::get('/mahasiswa/edit/{cpu_rating}', 'benchmarksController@edit');
Route::post('/mahasiswa/update', 'benchmarksController@update');
Route::get('/mahasiswa/hapus/{cpu_rating}', 'benchmarksController@hapus');
