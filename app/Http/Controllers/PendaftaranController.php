<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        $pendaftaran->petugas_id = $request->petugas_id;
        $pendaftaran->peminjams_id = $request->peminjams_id;
        $pendaftaran->kartu_pembuatan = $request->kartu_pembuatan;
        $pendaftaran->kartu_akhir = $request->kartu_akhir;
        $pendaftaran->kartu_aktif = $request->kartu_aktif;

       
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftaran $pendaftaran)
    {
        //
    }
}
