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
