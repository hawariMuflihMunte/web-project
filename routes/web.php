<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\UpgradeInsecureRequests;

Route::middleware([UpgradeInsecureRequests::class])->group(function() {
  // Home
  Route::get('/', [HomeController::class, 'index'])->name('home');

  // Auth
  Route::get('/login', [LoginController::class, 'index'])->name('login.index');
  Route::post('/login', [LoginController::class, 'store'])->name('login.store');
  Route::delete('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
  Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
  Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

  // Pembelajaran
  Route::group(['middleware' => ['role:Admin'], 'prefix' => 'admin'], function () {
    Route::resource('pembelajaran', PembelajaranController::class);
  });

  Route::group(['middleware' => ['role:Siswa'], 'prefix' => 'siswa'], function () {
    Route::resource('pembelajaran', PembelajaranController::class)->only('index', 'show');
  });

  Route::resource('pembelajaran', PembelajaranController::class)->only('index', 'show');

  // Quiz
  Route::group(['middleware' => ['role:Admin'], 'prefix' => 'admin'], function () {
    Route::resource('quiz', QuizController::class);
  });

  Route::group(['middleware' => ['role:Siswa'], 'prefix' => 'siswa'], function () {
    Route::resource('quiz', QuizController::class)->only('index', 'show', 'edit');
  });

  Route::resource('quiz', QuizController::class)->only('index', 'show', 'edit');
});
