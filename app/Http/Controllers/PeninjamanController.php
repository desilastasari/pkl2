<?php

namespace App\Http\Controllers;

use App\peninjaman;
use App\petugas;
use App\penimjam;
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
        $petugas = Petugas::all();
        $penimjam = Penimjam::all();
        $peninjaman = Peninjaman::all();
        return view('admin.peminjaman.create',compact('peninjaman','petugas','penimjam'));
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
        $peninjaman->petugas_id = $request->ptg_nama;
        $peninjaman->peminjams_id = $request->pjm_nama;
        $peninjaman->pjmn_tgl = $request->pjmn_tgl;
        $peninjaman->pjmn_tgl_kembali = $request->pjmn_tgl_kembali;
       
        
        $peninjaman->save();
         return redirect()->route('peninjaman.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
         
        $petugas = Petugas::all();
        $penimjam = Penimjam::all();
        $peninjaman = Peninjaman::findOrFail($id);
        return view('admin.peminjaman.show', compact('peninjaman','penimjam','petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
            $petugas = Petugas::all();
            $penimjam = Penimjam::all();
            $peninjaman = Peninjaman::findOrFail($id);
        return view('admin.peminjaman.edit', compact('peninjaman','penimjam','petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $peninjaman = Peninjaman::findOrFail($id);
        $peninjaman->petugas_id = $request->ptg_nama;
        $peninjaman->peminjams_id = $request->pjm_nama;
        $peninjaman->pjmn_tgl = $request->pjmn_tgl;
        $peninjaman->pjmn_tgl_kembali = $request->pjmn_tgl_kembali;
        
        $peninjaman->save();
         return redirect()->route('peninjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peninjaman  $peninjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
          $peninjaman = Peninjaman::destroy($id);
        return redirect()->route('peninjaman.index');
    }
}
