<?php

namespace App\Http\Controllers;

use App\Models\JawaTimur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JawaTimurController extends Controller
{
    public function addjatim(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        JawaTimur::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('lokasiwisata.jawatimur');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
