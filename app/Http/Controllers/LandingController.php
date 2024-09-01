<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perda;
use App\Models\Pergub;
use App\Models\News;
use App\Models\Pelaporan;
use App\Models\Struktur;

class LandingController extends Controller
{
    public function index()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(4)->get();
        return view('landing.index', compact('latestNews'));
    }

    public function perda()
    {
        $perdas = Perda::all();

        return view('landing.perda', compact('perdas'));
    }
    public function pergub()
    {
        $pergubs = Pergub::all();

        return view('landing.pergub', compact('pergubs'));
    }
    public function berita()
    {
        $newses = News::all();

        return view('landing.berita', compact('newses'));
    }
    public function pelaporan()
    {
        $pelaporans = Pelaporan::all();

        return view('landing.pelaporan', compact('pelaporans'));
    }
    public function tentang()
    {
        $strukturs = Struktur::orderBy('created_at', 'asc')->get();
        return view('landing.tentang', compact('strukturs'));
    }
}
