<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;




// Rute autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute admin (protected)
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/news', function () {
        return view('admin.news');
    })->name('admin.new');
});

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('/Profil', function () {
    return view('Profil');
});
Route::get('/Berita', function () {
    return view('Berita');
});

/
