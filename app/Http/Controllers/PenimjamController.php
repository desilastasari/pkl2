<?php

namespace App\Http\Controllers;

use App\penimjam;
use Illuminate\Http\Request;

class PenimjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Penimjam::all();
        return view('peminjam.index', compact('penimjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $peminjam = Penimjam::all();
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new Penimjam();
        $peminjam->pjm_nama = $request->pjm_nama;
        $peminjam->pjm_alamat = $request->pjm_alamat;
        $peminjam->pjm_tlp = $request->pjm_tlp;

        if($request->hasFile('pjm_foto')) {
            $file = $request->file('pjm_foto');
            $Path = public_path() .'/assets/img/peminjam/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->pjm_foto = $filename;
        }
       
        $peminjam->save();
        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function show(penimjam $penimjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function edit(penimjam $penimjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penimjam $penimjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(penimjam $penimjam)
    {
        //
    }
}
