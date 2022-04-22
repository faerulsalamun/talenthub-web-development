<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', [HomeController::class,'index']);

// Login
Route::get('/login',[LoginController::class,'index']);
Route::post('/processLogin',[LoginController::class,'processLogin'])->name('processLogin');

// Logout
Route::get('/processLogout',[LoginController::class,'processLogout'])->name('processLogout');

// Register
Route::get('/register',[RegisterController::class,'index']);
Route::post('/processRegister',[RegisterController::class,'processRegister'])->name('processRegister');

// Gallery
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/gallery/add',[GalleryController::class,'add']);
Route::post('/gallery/processAdd',[GalleryController::class,'processAdd'])->name('processAddGallery');
Route::get('/gallery/edit/{id}',[GalleryController::class,'edit']);
Route::post('/gallery/processEdit',[GalleryController::class,'processEdit'])->name('processEditGallery');
Route::get('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('processDeleteGallery');