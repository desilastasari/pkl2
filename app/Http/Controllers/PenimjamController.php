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
        $penimjam = Penimjam::all();
        return view('peminjam.index', compact('penimjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $penimjam = Penimjam::all();
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
        $penimjam = new Penimjam();
        $penimjam->pjm_nama = $request->pjm_nama;
        $penimjam->pjm_alamat = $request->pjm_alamat;
        $penimjam->pjm_telp = $request->pjm_telp;

        if($request->hasFile('pjm_foto')) {
            $file = $request->file('pjm_foto');
            $Path = public_path() .'/assets/img/peminjam/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $penimjam->pjm_foto = $filename;
        }
       
        $penimjam->save();
        return redirect()->route('penimjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $penimjam = Penimjam::findOrFail($id);
        return view('peminjam.show', compact('penimjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $penimjam = Penimjam::findOrFail($id);
        return view('peminjam.edit', compact('penimjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
         'pjm_nama' => 'required',
         'pjm_alamat' => 'required',
         'pjm_telp' => 'required',
        ]);
        $penimjam = Penimjam::findOrFail($id);
        $penimjam->pjm_nama = $request->pjm_nama;
        $penimjam->pjm_alamat = $request->pjm_alamat;
        $penimjam->pjm_telp= $request->pjm_telp;

        if($request->hasFile('pjm_foto')) {
            $file = $request->file('pjm_foto');
            $Path = public_path() .'/assets/img/peminjam/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $penimjam->pjm_foto = $filename;
        }
        $penimjam->save();
        return redirect()->route('penimjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penimjam  $penimjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penimjam = Penimjam::destroy($id);
        return redirect()->route('penimjam.index');
    }
}
