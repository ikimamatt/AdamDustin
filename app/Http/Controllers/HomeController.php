<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron; // Pastikan Anda sudah mengimpor model Jumbotron
use App\Models\SignatureNews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Mengambil data jumbotron pertama (jika ada)
        $jumbotron = Jumbotron::first();

    // Mengambil data berita fitur
    $featuredNews = SignatureNews::where('is_featured', 1)->get();

    // Mengirimkan data jumbotron dan berita fitur ke tampilan home
    return view('home', compact('jumbotron', 'featuredNews'));
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
