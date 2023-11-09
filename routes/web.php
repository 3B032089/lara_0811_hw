<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/about', [AboutVController::class,'index'])->name('about.index');

Route::get('/news', [AboutVController::class,'index'])->name('news.index');