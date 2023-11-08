<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaLulusanDosenController extends Controller
{
    
    public function beranda() {
        return view('home');
    }
    
    public function berita() {
        return view('ksi.berita');
    }

    public function lulusan() {
        return view('ksi.lulusan');
    }

    public function dosen() {
        return view('ksi.dosen');
    }

    

    
}

    