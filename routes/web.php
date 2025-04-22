<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');

// Pembelajaran
Route::group(['middleware' => ['role:Admin'], 'prefix' => 'admin'], function () {
  Route::resource('pembelajaran', \App\Http\Controllers\PembelajaranController::class);
});

Route::group(['middleware' => ['role:Siswa'], 'prefix' => 'siswa'], function () {
  Route::resource('pembelajaran', \App\Http\Controllers\PembelajaranController::class)->only('index', 'show');
});

Route::resource('pembelajaran', \App\Http\Controllers\PembelajaranController::class)->only('index', 'show');
