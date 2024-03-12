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

Route::get('/beranda', [App\Http\Controllers\berandaController::class, 'index']);

Route::get('/tentang', [App\Http\Controllers\tentangController::class, 'index']);

Route::get('/dimensi', [App\Http\Controllers\dimensiController::class, 'index']);

Route::get('/soloevent', [App\Http\Controllers\soloeventController::class, 'index']);

Route::get('/experience', [App\Http\Controllers\experienceController::class, 'index']);

Route::get('/dimensiutama', [App\Http\Controllers\dimensiutamaController::class, 'index']);

Route::get('/dimensidetail', [App\Http\Controllers\dimensidetailController::class, 'index']);