<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kedelai.index', [
            'lahans' => Lahan::with('kecamatan')->latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function show(Lahan $lahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lahan $lahan)
    {
        dd($lahan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lahan $lahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lahan $lahan)
    {
        //
    }
}
