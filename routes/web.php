<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KacaController;
use App\Http\Controllers\JenisController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('kaca', KacaController::class);
Route::resource('jenis', JenisController::class);