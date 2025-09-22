<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShortController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes - Updated to use FrontendController
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/tourpackage', [FrontendController::class, 'tourPackage'])->name('tourpackage');
Route::get('/carrental', [FrontendController::class, 'carRental'])->name('carrental');
Route::get('/tourexperience', [FrontendController::class, 'tourExperience'])->name('tourexperience');
Route::get('/articles', [FrontendController::class, 'articles'])->name('articles');
Route::get('/articles/{id}', [FrontendController::class, 'articleDetail'])->name('articles.detail');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

// Authentication Routes
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/loginproses', 'loginproses')->name('login.proses');
    Route::post('/logout', 'logout')->name('logout');
});

// Protected Backoffice Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BeritaController::class, 'dashboard'])->name('dashboard');

    // ## LOGIN ACCOUNT ## //
    Route::get('/akun', [LoginController::class, 'akun'])->name('akun');
    Route::get('/add', [LoginController::class, 'add'])->name('add');
    Route::post('/insertacc',[LoginController::class, 'insertacc'])->name('insertacc');
    Route::get('/tampilkanacc/{id}', [LoginController::class, 'tampilkanacc'])->name('tampilkanacc');
    Route::post('/updateacc/{id}', [LoginController::class, 'updateacc'])->name('updateacc');
    Route::delete('/deleteacc/{id}', [LoginController::class, 'deleteacc'])->name('deleteacc');

    // ## SHORT CONTENT ## //
    Route::get('/short', [ShortController::class, 'short'])->name('short');
    Route::get('/tambahsc',[ShortController::class, 'tambahsc'])->name('tambahsc');
    Route::post('/insertsc',[ShortController::class, 'insertsc'])->name('insertsc');
    Route::get('/tampilkansc/{id}',[ShortController::class, 'tampilkansc'])->name('tampilkansc');
    Route::post('/updatesc/{id}',[ShortController::class, 'updatesc'])->name('updatesc');
    Route::get('/deletesc/{id}',[ShortController::class, 'deletesc'])->name('deletesc');

    // ## GALERY ## //
    Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');
    Route::get('/tambahgaleri',[GaleriController::class, 'tambahgaleri'])->name('tambahgaleri');
    Route::post('/insertgaleri',[GaleriController::class, 'insertgaleri'])->name('insertgaleri');
    Route::get('/tampilkangaleri/{id}',[GaleriController::class, 'tampilkangaleri'])->name('tampilkangaleri');
    Route::post('/updategaleri/{id}',[GaleriController::class, 'updategaleri'])->name('updategaleri');
    Route::get('/deletegaleri/{id}',[GaleriController::class, 'deletegaleri'])->name('deletegaleri');

    // ## PROGRAM ## //
    Route::get('/programs',[ProgramController::class, 'programs'])->name('programs');
    Route::get('/tambahprogram',[ProgramController::class, 'tambahprogram'])->name('tambahprogram');
    Route::post('/insertprogram',[ProgramController::class, 'insertprogram'])->name('insertprogram');
    Route::get('/tampilkanprogram/{id}',[ProgramController::class, 'tampilkanprogram'])->name('tampilkanprogram');
    Route::post('/updateprogram/{id}',[ProgramController::class, 'updateprogram'])->name('updateprogram');
    Route::get('/deleteprogram/{id}',[ProgramController::class, 'deleteprogram'])->name('deleteprogram');

    // ## BERITA  ## //
    Route::get('/newss',[BeritaController::class, 'newss'])->name('newss');
    Route::get('/tambahdata',[BeritaController::class, 'tambahdata'])->name('tambahdata');
    Route::post('/insertdata',[BeritaController::class, 'insertdata'])->name('insertdata');
    Route::get('/tampilkandata/{id}',[BeritaController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}',[BeritaController::class, 'updatedata'])->name('updatedata');
    Route::get('/deletenews/{id}',[BeritaController::class, 'deletenews'])->name('deletenews');
    Route::get('/exportpdf',[BeritaController::class, 'exportpdf'])->name('exportpdf');

    //Review
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/tambah_review', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/simpan_review', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/edit_review/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::put('/update_review/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

    //category
    Route::get('/category', [CategoryController::class, 'category'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
