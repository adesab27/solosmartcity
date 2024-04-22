<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminSoloEventController;
use App\Http\Controllers\AdminInovasiController;

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
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

// Frontend routes
Route::get('/beranda', [App\Http\Controllers\berandaController::class, 'index']);
Route::get('/tentang', [App\Http\Controllers\tentangController::class, 'index']);
Route::get('/dimensi', [App\Http\Controllers\dimensiController::class, 'index']);
Route::get('/soloevent', [App\Http\Controllers\soloeventController::class, 'index']);
Route::get('/experience', [App\Http\Controllers\experienceController::class, 'index']);
Route::get('/dimensiutama', [App\Http\Controllers\dimensiutamaController::class, 'index']);
Route::get('/dimensidetail', [App\Http\Controllers\dimensidetailController::class, 'index']);
Route::get('/dimensidetail/{id}', [App\Http\Controllers\dimensidetailController::class, 'index'])->name('dimensidetail');


// admin
Route::get('/admin/soloevent', [App\Http\Controllers\AdminSoloEventController::class, 'index'])->name('indexSoloEvent');
Route::get('/admin/soloevent/add', [App\Http\Controllers\AdminSoloEventController::class, 'add'])->name('addViewSoloEvent');
Route::post('/admin/soloevent/add', [App\Http\Controllers\AdminSoloEventController::class, 'create'])->name('addSoloEvent');
Route::get('/admin/soloevent/edit/{id}', [App\Http\Controllers\AdminSoloEventController::class, 'edit'])->name('editSoloEvent');
Route::post('/admin/soloevent/update', [App\Http\Controllers\AdminSoloEventController::class, 'update'])->name('updateSoloEvent');
Route::get('/admin/soloevent/delete/{id}', [App\Http\Controllers\AdminSoloEventController::class, 'delete'])->name('deleteSoloEvent');

Route::get('/admin/opdlink', [App\Http\Controllers\AdminOpdController::class, 'index'])->name('indexOpdLink');
Route::get('/admin/opdlink/add', [App\Http\Controllers\AdminOpdController::class, 'add'])->name('addViewOpdLink');
Route::post('/admin/opdlink/add', [App\Http\Controllers\AdminOpdController::class, 'create'])->name('addOpdLink');
Route::get('/admin/opdlink/edit/{id}', [App\Http\Controllers\AdminOpdController::class, 'edit'])->name('editOpdLink');
Route::post('/admin/opdlink/update', [App\Http\Controllers\AdminOpdController::class, 'update'])->name('updateOpdLink');
Route::get('/admin/opdlink/delete/{id}', [App\Http\Controllers\AdminOpdController::class, 'delete'])->name('deleteOpdLink');

Route::get('/admin/article', [AdminArticleController::class, 'index'])->name('indexArticle');
Route::get('/admin/article/add', [AdminArticleController::class, 'add'])->name('addviewArticle');
Route::post('/admin/article/add', [AdminArticleController::class, 'create'])->name('addArticle');
Route::get('/admin/article/edit/{id}', [AdminArticleController::class, 'edit'])->name('editArticle');
Route::post('/admin/article/update', [AdminArticleController::class, 'update'])->name('updateArticle');
Route::get('/admin/article/delete/{id}', [AdminArticleController::class, 'delete'])->name('deleteArticle');

Route::get('/admin/inovasi', [App\Http\Controllers\AdminInovasiController::class, 'index'])->name('indexInovasi');
Route::get('/admin/inovasi/add', [App\Http\Controllers\AdminInovasiController::class, 'add'])->name('addViewInovasi');
Route::post('/admin/inovasi/add', [App\Http\Controllers\AdminInovasiController::class, 'create'])->name('addInovasi');
Route::get('/admin/inovasi/edit/{id}', [App\Http\Controllers\AdminInovasiController::class, 'edit'])->name('editInovasi');
Route::post('/admin/inovasi/update', [App\Http\Controllers\AdminInovasiController::class, 'update'])->name('updateInovasi');
Route::get('/admin/inovasi/delete/{id}', [App\Http\Controllers\AdminInovasiController::class, 'delete'])->name('deleteInovasi');

Route::get('/admin/prodhukum', [App\Http\Controllers\AdminProdHukumController::class, 'index'])->name('indexProdHukum');
Route::get('/admin/prodhukum/add', [App\Http\Controllers\AdminProdHukumController::class, 'add'])->name('addviewProdHukum');
Route::post('/admin/prodhukum/add', [App\Http\Controllers\AdminProdHukumController::class, 'create'])->name('addProdHukum');
Route::get('/admin/prodhukum/edit/{id}', [App\Http\Controllers\AdminProdHukumController::class, 'edit'])->name('editProdHukum');
Route::post('/admin/prodhukum/update', [App\Http\Controllers\AdminProdHukumController::class, 'update'])->name('updateProdHukum');
Route::get('/admin/prodhukum/delete/{id}', [App\Http\Controllers\AdminProdHukumController::class, 'delete'])->name('deleteProdHukum');

// Search Dimensi
Route::get('/search/dimensi', [App\Http\Controllers\dimensiController::class, 'search'])->name('searchDimensi');

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'staff.'], function () {
    // admin
    Route::get('/admin/soloevent', [App\Http\Controllers\AdminSoloEventController::class, 'index'])->name('indexSoloEvent');
    Route::get('/admin/soloevent/add', [App\Http\Controllers\AdminSoloEventController::class, 'add'])->name('addViewSoloEvent');
    Route::post('/admin/soloevent/add', [App\Http\Controllers\AdminSoloEventController::class, 'create'])->name('addSoloEvent');
    Route::get('/admin/soloevent/edit/{id}', [App\Http\Controllers\AdminSoloEventController::class, 'edit'])->name('editSoloEvent');
    Route::post('/admin/soloevent/update', [App\Http\Controllers\AdminSoloEventController::class, 'update'])->name('updateSoloEvent');
    Route::get('/admin/soloevent/delete/{id}', [App\Http\Controllers\AdminSoloEventController::class, 'delete'])->name('deleteSoloEvent');

    Route::get('/admin/opdlink', [App\Http\Controllers\AdminOpdController::class, 'index'])->name('indexOpdLink');
    Route::get('/admin/opdlink/add', [App\Http\Controllers\AdminOpdController::class, 'add'])->name('addViewOpdLink');
    Route::post('/admin/opdlink/add', [App\Http\Controllers\AdminOpdController::class, 'create'])->name('addOpdLink');
    Route::get('/admin/opdlink/edit/{id}', [App\Http\Controllers\AdminOpdController::class, 'edit'])->name('editOpdLink');
    Route::post('/admin/opdlink/update', [App\Http\Controllers\AdminOpdController::class, 'update'])->name('updateOpdLink');
    Route::get('/admin/opdlink/delete/{id}', [App\Http\Controllers\AdminOpdController::class, 'delete'])->name('deleteOpdLink');

    Route::get('/dashboard-web-opd', [App\Http\Controllers\berandaController::class, 'WebOpd'])->name('website-dashboard');
    Route::get('/create-web-opd', [App\Http\Controllers\berandaController::class, 'create'])->name('create-link');
    Route::post('/store-web-opd', [App\Http\Controllers\berandaController::class, 'store'])->name('store-link');
    Route::get('/edit-web-opd/{id}', [App\Http\Controllers\berandaController::class, 'edit'])->name('edit-link');
    Route::put('/update-web-opd/{id}', [App\Http\Controllers\berandaController::class, 'update'])->name('update-link');
    Route::delete('/delete-web-opd/{id}', [App\Http\Controllers\berandaController::class, 'delete'])->name('delete-link');


    Route::get('/dashboard-tentang', [App\Http\Controllers\tentangController::class, 'linkFile'])->name('produk-tentang');
    Route::get('/create-tentang', [App\Http\Controllers\tentangController::class, 'createFile'])->name('create-tentang');
    Route::post('/store-tentang', [App\Http\Controllers\tentangController::class, 'storeFile'])->name('store-tentang');
    Route::get('/edit-file/{id}', [App\Http\Controllers\tentangController::class, 'edit'])->name('edit-tentang');
    Route::put('/update-file/{id}', [App\Http\Controllers\tentangController::class, 'update'])->name('update-tentang');
    Route::delete('/delete-file/{id}', [App\Http\Controllers\tentangController::class, 'deleteFile'])->name('delete-tentang');


    Route::get('/dashboard', [App\Http\Controllers\dimensiController::class, 'dashboard'])->name('dashboard');
    Route::get('/create', [App\Http\Controllers\dimensiController::class, 'create'])->name('dimensi.create');
    Route::post('/store', [App\Http\Controllers\dimensiController::class, 'store'])->name('dimensi.store');
    Route::get('/edit/{id}', [App\Http\Controllers\dimensiController::class, 'edit'])->name('dimensi.edit');
    Route::put('/update/{id}', [App\Http\Controllers\dimensiController::class, 'update'])->name('dimensi.update');
    Route::delete('/delete/{id}', [App\Http\Controllers\dimensiController::class, 'delete'])->name('dimensi.delete');


    Route::get('/admin/article', [AdminArticleController::class, 'index'])->name('indexArticle');
    Route::get('/admin/article/add', [AdminArticleController::class, 'add'])->name('addviewArticle');
    Route::post('/admin/article/add', [AdminArticleController::class, 'create'])->name('addArticle');
    Route::get('/admin/article/edit/{id}', [AdminArticleController::class, 'edit'])->name('editArticle');
    Route::post('/admin/article/update', [AdminArticleController::class, 'update'])->name('updateArticle');
    Route::get('/admin/article/delete/{id}', [AdminArticleController::class, 'delete'])->name('deleteArticle');

    Route::get('/admin/prodhukum', [App\Http\Controllers\AdminProdHukumController::class, 'index'])->name('indexProdHukum');
    Route::get('/admin/prodhukum/add', [App\Http\Controllers\AdminProdHukumController::class, 'add'])->name('addviewProdHukum');
    Route::post('/admin/prodhukum/add', [App\Http\Controllers\AdminProdHukumController::class, 'create'])->name('addProdHukum');
    Route::get('/admin/prodhukum/edit/{id}', [App\Http\Controllers\AdminProdHukumController::class, 'edit'])->name('editProdHukum');
    Route::post('/admin/prodhukum/update', [App\Http\Controllers\AdminProdHukumController::class, 'update'])->name('updateProdHukum');
    Route::get('/admin/prodhukum/delete/{id}', [App\Http\Controllers\AdminProdHukumController::class, 'delete'])->name('deleteProdHukum');
});

