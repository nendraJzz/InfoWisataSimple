<?php

namespace App\Http\Controllers;

use App\Models\Banten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BantenController extends Controller
{
    public function addbanten(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        Banten::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
        return redirect()->route('lokasiwisata.banten');
    }

    public function storeImage ($file): string{
        $fileName = rand() .  $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }
}
