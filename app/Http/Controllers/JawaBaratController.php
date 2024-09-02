<?php

namespace App\Http\Controllers;

use App\Models\JawaBarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JawaBaratController extends Controller
{
    public function addjabar(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        JawaBarat::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('lokasiwisata.jawabarat');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
