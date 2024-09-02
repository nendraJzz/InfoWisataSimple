<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BantenController;
use App\Http\Controllers\JakartaController;
use App\Http\Controllers\JawaBaratController;
use App\Http\Controllers\JawaTengahController;
use App\Http\Controllers\JawaTimurController;
use App\Http\Controllers\JawaYogyakartaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LokasiWisataController;
use App\Models\JawaBarat;
use App\Models\JawaTengah;
use App\Models\JawaTimur;
use App\Models\JawaYogyakarta;

Route::get('/', function () {
    return view('landpage');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Lokasi Wisata
    Route::get('/dashboard/banten', [LokasiWisataController::class, 'banten'])->name('lokasiwisata.banten');
    Route::get('/dashboard/jawabarat', [LokasiWisataController::class, 'jawabarat'])->name('lokasiwisata.jawabarat');
    Route::get('/dashboard/jakarta', [LokasiWisataController::class, 'jakarta'])->name('lokasiwisata.jakarta');
    Route::get('/dashboard/yogyakarta', [LokasiWisataController::class, 'yogyakarta'])->name('lokasiwisata.yogyakarta');
    Route::get('/dashboard/jawatengah', [LokasiWisataController::class, 'jawatengah'])->name('lokasiwisata.jawatengah');
    Route::get('/dashboard/jawatimur', [LokasiWisataController::class, 'jawatimur'])->name('lokasiwisata.jawatimur');
    // End 

    // Route Tambah Wisata
    Route::get('/dashboard/banten/tambahwisatabanten', [LokasiWisataController::class, 'tambahwisatabanten'])->name('createwisata.tambahwisatabanten');
    Route::get('/dashboard/jawabarat/tambahwisatajawabarat', [LokasiWisataController::class, 'tambahwisatajawabarat'])->name('createwisata.tambahwisatajawabarat');
    Route::get('/dashboard/jakarta/tambahwisatajakarta', [LokasiWisataController::class, 'tambahwisatajakarta'])->name('createwisata.tambahwisatajakarta');
    Route::get('/dashboard/yogyakarta/tambahwisatayogyakarta', [LokasiWisataController::class, 'tambahwisatayogyakarta'])->name('createwisata.tambahwisatayogyakarta');
    Route::get('/dashboard/jawatengah/tambahwisatajawatengah', [LokasiWisataController::class, 'tambahwisatajawatengah'])->name('createwisata.tambahwisatajawatengah');
    Route::get('/dashboard/jawatimur/tambahwisatajawatimur', [LokasiWisataController::class, 'tambahwisatajawatimur'])->name('createwisata.tambahwisatajawatimur');
    // End

    // Route Post
    Route::post('/addbanten', [BantenController::class, 'addbanten'])->name('addbanten');
    Route::post('/addjakarta', [JakartaController::class, 'addjakarta'])->name('addjakarta');
    Route::post('/addjabar', [JawaBaratController::class, 'addjabar'])->name('addjabar');
    Route::post('/addyogya', [JawaYogyakartaController::class, 'addyogya'])->name('addyogya');
    Route::post('/addjateng', [JawaTengahController::class, 'addjateng'])->name('addjateng');
    Route::post('/addjatim', [JawaTimurController::class, 'addjatim'])->name('addjatim');
    // End
});

require __DIR__.'/auth.php';
