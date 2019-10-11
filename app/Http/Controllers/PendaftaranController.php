<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use App\petugas;
use App\penimjam;
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
        $petugas = Petugas::all();
        $penimjam = Penimjam::all();
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.create',compact('pendaftaran','petugas','penimjam'));
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
        $pendaftaran->petugas_id = $request->ptg_nama;
        $pendaftaran->peminjams_id = $request->pjm_nama;
        $pendaftaran->kartu_pembuatan = $request->kartu_pembuatan;
        $pendaftaran->kartu_akhir = $request->kartu_akhir;
        

       
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
         $petugas = Petugas::all();
        $penimjam = Penimjam::all();
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.show', compact('pendaftaran','penimjam','petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $petugas = Petugas::all();
        $penimjam = Penimjam::all();
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran','penimjam','petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $pendaftaran = new Pendaftaran();
        $pendaftaran->petugas_id = $request->ptg_nama;
        $pendaftaran->peminjams_id = $request->pjm_nama;
        $pendaftaran->kartu_pembuatan = $request->kartu_pembuatan;
        $pendaftaran->kartu_akhir = $request->kartu_akhir;
        

       
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
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
