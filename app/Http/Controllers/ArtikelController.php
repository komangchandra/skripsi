<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use App\Http\Requests\StoreArtikelRequest;
// use App\Http\Requests\UpdateArtikelRequest;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            "artikels" => Artikel::with('kategori')->latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artikel.create', [
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'slug' => 'required',
            'kategori_id' => 'required',
            'body' => 'required',
            'foto' => 'image|file|max:3024'
        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-artikel');
        }; 

        Artikel::create($validatedData);

        return redirect('/dashboard/artikel')->with('success', 'Artikel baru telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('dashboard.artikel.edit', [
            'artikel' => $artikel,
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtikelRequest  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'judul' => 'required',
            'slug' => 'required',
            'kategori_id' => 'required',
            'body' => 'required',
            'foto' => 'image|file|max:3024'
        ];

        if ($request->slug != $artikel->slug) {
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-artikel');
        };

        Artikel::where('id', $artikel->id)->update($validatedData);
        return redirect('/dashboard/artikel')->with('success', 'Artikel telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        // if($artikel->foto){
        //     Storage::delete($artikel->foto);
        // }
        Artikel::destroy($artikel->id);
        return redirect('/dashboard/artikel')->with('success', 'Artikel telah dihapus');
    }
}
