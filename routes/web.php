<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KacaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisController;

//auth -> login register passwordConfirm passwordReset logout
Auth::routes();

//landing page
Route::get('/', [HomeController::class, 'index']);

//dashboard
Route::get('/dashboard', [HomeController::class, 'check'])->name('dashboard');

Route::resource('kaca', KacaController::class);
Route::resource('jenis', JenisController::class);