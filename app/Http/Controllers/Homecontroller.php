<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $namaAplikasi = "Aplikasi Web Sekolah";
        $pengembang = "Kylaria";
        $tahun = 2025;

        return view ('about', compact('namaAplikasi', 'pengembang', 'tahun'));
    }
}
