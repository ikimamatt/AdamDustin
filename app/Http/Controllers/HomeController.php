<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron; // Pastikan Anda sudah mengimpor model Jumbotron
use App\Models\SignatureNews;
use App\Models\Introduction;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Mengambil data jumbotron pertama (jika ada)
        $jumbotron = Jumbotron::first();

    // Mengambil data berita fitur
    $featuredNews = SignatureNews::where('is_featured', 1)->get();

    $allnews = News::all();

    $introduction = Introduction::first();

    // Mengirimkan data jumbotron dan berita fitur ke tampilan home
    return view('home', compact('jumbotron', 'featuredNews','allnews', 'introduction'));
    }

    public function berita()
    {
        return view('berita');
    }

    public function profil()
    {
        return view('profil');
    }
    public function galery()
    {
        return view('galery');
    }
}
