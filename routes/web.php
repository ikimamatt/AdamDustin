<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('admin.index');
})->name('admin.test');
// Rute autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute pengunjung (tidak perlu login)
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/Berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/Profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/galery', [HomeController::class, 'galery'])->name('galery');

// Rute admin (protected)
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Route::get('/news', function () {
    //     return view('admin.news');
    // })->name('admin.new');
    // Route::resource('jumbotron', JumbotronController::class);
    Route::resource('news', NewsController::class);
    Route::get('/jumbotron', [JumbotronController::class, 'index'])->name('jumbotron.index');
    Route::get('jumbotron/create', [JumbotronController::class, 'create'])->name('jumbotron.create');
    Route::post('jumbotron', [JumbotronController::class, 'store'])->name('jumbotron.store');
    Route::get('jumbotron/{id}/edit', [JumbotronController::class, 'edit'])->name('jumbotron.edit');
    Route::put('jumbotron/{id}', [JumbotronController::class, 'update'])->name('jumbotron.update');
    Route::delete('jumbotron/{id}', [JumbotronController::class, 'destroy'])->name('jumbotron.destroy');
});



