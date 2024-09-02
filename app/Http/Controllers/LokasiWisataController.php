<?php

namespace App\Http\Controllers;

use App\Models\Banten;
use App\Models\Jakarta;
use App\Models\JawaBarat;
use App\Models\JawaTengah;
use App\Models\JawaTimur;
use App\Models\JawaYogyakarta;
use Illuminate\Http\Request;

class LokasiWisataController extends Controller
{
    public function banten() {
        $bantens = Banten::all();
        return view('lokasiwisata.banten', compact('bantens'));
    }
    public function jawabarat() {
        $jawabarats = JawaBarat::all();
        return view('lokasiwisata.jawabarat', compact('jawabarats'));
    }
    public function jakarta() {
        $jakartas = Jakarta::all();
        return view('lokasiwisata.jakarta', compact('jakartas'));
    }
    public function yogyakarta() {
        $yogyakartas = JawaYogyakarta::all();
        return view('lokasiwisata.yogyakarta', compact('yogyakartas'));
    }
    public function jawatengah() {
        $jawatengahs = JawaTengah::all();
        return view('lokasiwisata.jawatengah', compact('jawatengahs'));
    }
    public function jawatimur() {
        $jawatimurs = JawaTimur::all();
        return view('lokasiwisata.jawatimur', compact('jawatimurs'));
    }


    // Route Tambah Wisata
    public function tambahwisatabanten() {
        return view('createwisata.createwisatabanten');
    }
    public function tambahwisatajawabarat() {
        return view('createwisata.createwisatajawabarat');
    }
    public function tambahwisatajakarta() {
        return view('createwisata.createwisatajakarta');
    }
    public function tambahwisatayogyakarta() {
        return view('createwisata.createwisatayogyakarta');
    }
    public function tambahwisatajawatengah() {
        return view('createwisata.createwisatajawatengah');
    }
    public function tambahwisatajawatimur() {
        return view('createwisata.createwisatajawatimur');
    }



}
