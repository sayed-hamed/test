<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'create']);
Route::get('/create',[UserController::class,'create'])->name('create');
Route::post('/store',[UserController::class,'store'])->name('userStore');
Route::get('/index',[UserController::class,'index'])->name('index');
