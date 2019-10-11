<?php

namespace App\Http\Controllers;

use App\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $petugas = Petugas::all();
        return view('admin.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new Petugas();
        $petugas->ptg_nama = $request->ptg_nama;
        
        $petugas->save();
        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
         'ptg_nama' => 'required',
         
        ]);
        $petugas = Petugas::findOrFail($id);
        $petugas->ptg_nama = $request->ptg_nama;
        
       
        $petugas->save();
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $petugas = Petugas::destroy($id);
        return redirect()->route('petugas.index');
    }
}
