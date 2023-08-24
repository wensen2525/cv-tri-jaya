<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KacaController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\UkuranController;

//auth -> login register passwordConfirm passwordReset logout
Auth::routes();

//landing page
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product']);

//dashboard
Route::get('/dashboard', [HomeController::class, 'check'])->name('dashboard');

Route::resource('kaca', KacaController::class);
Route::resource('jenis', JenisController::class);
Route::resource('ukuran', UkuranController::class);