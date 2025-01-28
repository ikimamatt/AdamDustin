<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('/Profil', function () {
    return view('Profil');
});
Route::get('/Berita', function () {
    return view('Berita');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/news.admin', function () {
    return view('admin.news');
})->name('admin.new');
