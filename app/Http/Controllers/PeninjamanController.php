<?php

namespace App\Http\Controllers;

use App\peninjaman;
use Illuminate\Http\Request;

class PeninjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $peninjaman = Peninjaman::all();
        return view('admin.peminjaman.index', compact('peninjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peninjaman = Peninjaman::all();
        return view('admin.peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peninjaman = new Peninjaman();
        $peninjaman->petugas_id = $request->petugas_id;
        $peninjaman->peminjams_id = $request->peminjams_id;
        $peninjaman->pjmn_tgl = $request->pjmn_tgl;
        $peninjaman->pjmn_tgl_kembali = $request->pjmn_tgl_kembali;
       
        
        $peninjaman->save();
        return redirect()->route('peminjaman.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function show(peninjaman $peninjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(peninjaman $peninjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peninjaman $peninjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(peninjaman $peninjaman)
    {
        //
    }
}
