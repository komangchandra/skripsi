<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kedelai;
use Illuminate\Http\Request;

class KedelaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kedelai.index', [
            'kedelais' => Kedelai::with('kecamatan')->latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kedelai.create', [
            'kecamatans' => Kecamatan::all()
        ]);
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
            'kelas' => 'required',
            'kecamatan_id' => 'required',
            'warna' => 'required',
            'geojson' => 'required',
        ]);

        Kedelai::create($validatedData);

        return redirect('/dashboard/kesesuaianlahan')->with('success', 'Data Kecamatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kedelai  $kedelai
     * @return \Illuminate\Http\Response
     */
    public function show(Kedelai $kedelai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kedelai  $kedelai
     * @return \Illuminate\Http\Response
     */
    public function edit(Kedelai $kedelai)
    {
        return view('dashboard.kedelai.edit', [
            'kedelai' => $kedelai,
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kedelai  $kedelai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kedelai $kedelai)
    {
        $rules = [
            'kelas' => 'required',
            'kecamatan_id' => 'required',
            'warna' => 'required',
            'geojson' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Kedelai::where('id', $kedelai->id)->update($validatedData);
        return redirect('/dashboard/kesesuaianlahan')->with('success', 'Artikel telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kedelai  $kedelai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kedelai $kedelai)
    {
        Kedelai::destroy($kedelai->id);

        return redirect('/dashboard/kesesuaianlahan')->with('success', 'Data berhasil dihapus');
    }

}
