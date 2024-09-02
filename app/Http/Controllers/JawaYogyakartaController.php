<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawaYogyakarta;
use Illuminate\Support\Facades\Auth;

class JawaYogyakartaController extends Controller
{
    public function addyogya(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        JawaYogyakarta::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('lokasiwisata.yogyakarta');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
