<?php

namespace App\Http\Controllers;

use App\detail;
use App\buku;
use App\penimjam;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
        return view('admin.detail.index', compact('detail','buku','penimjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $penimjam = Penimjam::all();
        $detail = Detail::all();
        return view('admin.detail.create', compact('detail','buku','penimjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $detail = new Detail();
        $detail->penimjams_id = $request->pjm_nama;
        $detail->bukus_id = $request->buku_judul;
        $detail->detail_tgl_kembali = $request->detail_tgl_kembali;
        $detail->detail_denda = $request->detail_denda;
        $detail->detail_kembali = $request->detail_kembali;

       
        $detail->save();
        return redirect()->route('detail.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::all();
        $penimjam = Penimjam::all();
        $detail = Detail::findOrFail($id);
        return view('admin.detail.show', compact('detail','penimjam','buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $buku = Buku::all();
        $penimjam = Penimjam::all();
        $detail = Detail::findOrFail($id);
        return view('admin.detail.edit',compact('detail','penimjam','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $detail = Detail::findOrFail($id);
        $detail->penimjams_id = $request->pjm_nama;
        $detail->bukus_id = $request->buku_judul;
        $detail->detail_tgl_kembali = $request->detail_tgl_kembali;
        $detail->detail_denda = $request->detail_denda;
        $detail->detail_kembali = $request->detail_kembali;

          $detail->save();
        return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         $detail = Detail::destroy($id);
        return redirect()->route('detail.index');
    }
}
