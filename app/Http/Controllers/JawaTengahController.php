<?php

namespace App\Http\Controllers;

use App\Models\JawaTengah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JawaTengahController extends Controller
{
    public function addjateng(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        JawaTengah::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('lokasiwisata.jawatengah');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
