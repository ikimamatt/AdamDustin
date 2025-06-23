<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron; // Pastikan Anda sudah mengimpor model Jumbotron
use App\Models\SignatureNews;
use App\Models\Introduction;
use App\Models\Logo;
use App\Models\News;
use App\Models\Video;
use App\Models\Quote;
use App\Models\MainQuote;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\SocialMedia;


class HomeController extends Controller
{
    public function home()
    {
        // Mengambil data jumbotron pertama (jika ada)
        $jumbotron = Jumbotron::first();

    // Mengambil data berita fitur
    $featuredNews = SignatureNews::where('is_featured', 1)->get();

    $allnews = SignatureNews::all();

    $quote = Quote::all();

    $mainquotes = MainQuote::first();

    $introduction = Introduction::first();

    $videoLink = Video::first();

    $logo = Logo::first();

    $socialMedia = SocialMedia::first() ?? new SocialMedia();

    // Mengirimkan data jumbotron dan berita fitur ke tampilan home
    return view('home', compact('jumbotron', 'featuredNews','allnews','quote','mainquotes', 'introduction', 'videoLink', 'logo', 'socialMedia'));
    }

    public function berita()
    {
        $allnews = SignatureNews::all();
    $socialMedia = SocialMedia::first() ?? new SocialMedia();


        $logo = Logo::first();
        return view('Berita', compact('logo', 'allnews', 'socialMedia'));
    }

    public function profil()
    {
        $logo = Logo::first();
    $socialMedia = SocialMedia::first() ?? new SocialMedia();

        return view('Profil', compact('logo', 'socialMedia'));
    }
    public function galery()
    {
        $logo = Logo::first();
        $galleries = Gallery::all();
    $socialMedia = SocialMedia::first() ?? new SocialMedia();


        return view('galery', compact('logo', 'galleries', 'socialMedia'));
    }
}
