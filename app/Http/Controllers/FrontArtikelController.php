<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontArtikelController extends Controller
{
    public function index()
    {
        return view('artikel', [
            "artikels" => Artikel::with('kategori')->latest()->paginate(8)
        ]);
    }

    public function show(Artikel $artikel)
    {
        return view('read', [
            "artikel" => $artikel
        ]);
    }
}
