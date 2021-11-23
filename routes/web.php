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
    return view('home');
});
Route::get('/iht', function () {
    return view('iht');
});
Route::get('/jpl', function () {
    return view('jpl');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/orientasi', function () {
    return view('orientasi');
});
Route::get('/tna', function () {
    return view('tna');
});