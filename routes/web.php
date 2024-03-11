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

Route::get('/', function () {
    return view("web.index");
});

Route::get('/dimensi', function () {
    return view("web.dimensi");
});

Route::get('/dimensidetail', function () {
    return view("web.dimensidetail");
});

Route::get('/dimensiutama', function () {
    return view("web.dimensiutama");
});

Route::get('/experience', function () {
    return view("web.experience");
});

Route::get('/soloevent', function () {
    return view("web.soloevent");
});

Route::get('/tentang', function () {
    return view("web.tentang");
});