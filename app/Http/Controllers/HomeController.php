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
/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Galery page
     *
     * @return \Illuminate\Contracts\View\View
     */
/******  8eb58f62-8d9a-4b5d-8248-882842af7014  *******/
    public function galery()
    {
        return view('galery');
    }
}
