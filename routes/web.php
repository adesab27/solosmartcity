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
    return view("index");
});

Route::get('/dimensi', function () {
    return view("dimensi");
});

Route::get('/dimensidetail', function () {
    return view("dimensidetail");
});

Route::get('/dimensiutama', function () {
    return view("dimensiutama");
});

Route::get('/experience', function () {
    return view("experience");
});

Route::get('/soloevent', function () {
    return view("soloevent");
});

Route::get('/tentang', function () {
    return view("tentang");
});

// Route::get('/beranda', [berandaController::class,'index']);
Route::get('/beranda', [App\Http\Controllers\berandaController::class, 'index']);
