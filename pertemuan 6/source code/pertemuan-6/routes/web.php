<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/edit/{id}',[HomeController::class,'edit']);
Route::post('/{id}',[HomeController::class,'processEdit']);
Route::get('/add',[HomeController::class,'add']);
Route::post('/',[HomeController::class,'processAdd']);
Route::get('/delete/{id}',[HomeController::class,'processDelete']);
