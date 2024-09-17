<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function gunungtertinggidipulaujawa() {
        return view('berita.gunungtertinggi');
    }

    public function rekomendasihoteldijakarta() {
        return view('berita.rekomendasihotel');
    }

    public function rekomendasiwisatasaljudijakarta() {
        return view('berita.rekomendasiwisatasalju');
    }

    public function rekomendasipasarbunga() {
        return view('berita.pasarbunga');
    }
}
