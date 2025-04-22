<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

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
