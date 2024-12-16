<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    // memanggil view landing.blade.php
    public function index()
    {
        return view('home.landing');
    }

    // memanggil view tentang.blade.php
    public function tentang()
    {
        return view('home.tentang');
    }

    // memanggil view layanan.blade.php
    public function layanan()
    {
        return view('home.layanan');
    }

    // memanggil view kontak.blade.php
    public function kontak()
    {
        return view('home.kontak');
    }
}
