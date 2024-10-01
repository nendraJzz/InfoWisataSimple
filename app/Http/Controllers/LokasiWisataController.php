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
    public function banten(Request $request) {
        $search = $request->input('search');
    
        $bantens = Banten::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'bantens' => $bantens
            ]);
        }
    
        return view('lokasiwisata.banten', compact('bantens', 'search'));
    }
    
    
    
    public function jawabarat(Request $request) {
        $search = $request->input('search');
    
        $jawabarats = JawaBarat::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'jawabarats' => $jawabarats
            ]);
        }
    
        return view('lokasiwisata.jawabarat', compact('jawabarats', 'search'));
    }

    public function jakarta(Request $request) {
        $search = $request->input('search');
    
        $jakartas = Jakarta::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'jakartas' => $jakartas
            ]);
        }
    
        return view('lokasiwisata.jakarta', compact('jakartas', 'search'));
    }
    public function yogyakarta(Request $request) {
        $search = $request->input('search');
    
        $yogyakartas = JawaYogyakarta::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'yogyakartas' => $yogyakartas
            ]);
        }
    
        return view('lokasiwisata.yogyakarta', compact('yogyakartas', 'search'));
    }

    public function jawatengah(Request $request) {
        $search = $request->input('search');
    
        $jawatengahs = JawaTengah::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'jawatengahs' => $jawatengahs
            ]);
        }
    
        return view('lokasiwisata.jawatengah', compact('jawatengahs', 'search'));
    }


    public function jawatimur(Request $request) {
        $search = $request->input('search');
    
        $jawatimurs = JawaTimur::when($search, function ($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('keterangan', 'LIKE', "%{$search}%");
        })->get();
    
        if ($request->ajax()) {
            return response()->json([
                'jawatimurs' => $jawatimurs
            ]);
        }
    
        return view('lokasiwisata.jawatimur', compact('jawatimurs', 'search'));
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
