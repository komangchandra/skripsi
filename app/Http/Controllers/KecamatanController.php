<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kecamatan.index', [
            "kecamatans" => Kecamatan::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idkc' => 'required',
            'namakecamatan' => 'required',
            'warna' => 'required',
            'geojson' => 'required',
        ]);

        // if ($request->file('geojson')) {
        //     $validatedData['geojson'] = $request->file('geojson')->store('geojson-kecamatan');
        // }; 

        Kecamatan::create($validatedData);

        return redirect('/dashboard/kecamatan')->with('success', 'Data Kecamatan berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan)
    {
        dd($kecamatan);

        return view('dashboard.kecamatan.edit', [
            "kecamatan" => $kecamatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $rules = [
            'idkc' => 'required',
            'namakecamatan' => 'required',
            'warna' => 'required',
            'geojson' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Kecamatan::where('id', $kecamatan->id)->update($validatedData);
        return redirect('/dashboard/kecamatan')->with('success', 'Kecamatan telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        Kecamatan::destroy($kecamatan->id);

        return redirect('/dashboard/kecamatan')->with('success', 'Kecamatan berhasil dihapus');
    }
}
