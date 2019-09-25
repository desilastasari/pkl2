<?php

namespace App\Http\Controllers;

use App\penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penerbit = Penerbit::all();
        return view('admin.penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $penerbit = Penerbit::all();
        return view('admin.penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerbit = new Penerbit();
        $penerbit->pbt_nama = $request->pbt_nama;
        $penerbit->pbt_alamat = $request->pbt_alamat;
        $penerbit->pbt_telp = $request->pbt_telp;
       
        $penerbit->save();
        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('admin.penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('admin.penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
         'pbt_nama' => 'required',
         'pbt_alamat' => 'required',
         'pbt_telp' => 'required',
        ]);
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->pbt_nama = $request->pbt_nama;
        $penerbit->pbt_alamat = $request->pbt_alamat;
        $penerbit->pbt_telp= $request->pbt_telp;
       
        $penerbit->save();
        return redirect()->route('penerbit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::destroy($id);
        return redirect()->route('penerbit.index');
    }
}
