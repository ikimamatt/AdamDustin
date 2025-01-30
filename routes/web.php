<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rute autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/Berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/Profil', [HomeController::class, 'profil'])->name('profil');

// Rute admin (protected)
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/news', function () {
        return view('admin.news');
    })->name('admin.new');
});
