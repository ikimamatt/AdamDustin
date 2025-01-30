<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function berita()
    {
        return view('berita');
    }
    public function profil()
    {
        return view('profil');
    }
}
