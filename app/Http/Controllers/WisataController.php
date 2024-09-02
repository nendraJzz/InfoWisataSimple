<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    
    public function addpost(Request $request) {
        $request->validate([
            'namawisata' => ['required'],
            'keterangan' => ['required'],
            'gambar' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('gambar'));

        Wisata::create([
            'user_id' => Auth::id(),
            'namawisata' => $request->namawisata,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('home');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
