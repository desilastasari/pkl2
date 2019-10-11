@extends('layouts.admin')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

   
    <div class="form-group">
        <label for="">Id Peminjam</label>
        <input class="form-control" type="text" name="penimjams_id">
    </div>
    <div class="form-group">
        <label for="">Id Buku </label>
        <input class="form-control" type="text" name="bukus_id">
    </div>
    <div class="form-group">
        <label for="">Detail Tanggal Kembali </label>
        <input class="form-control" type="text" name="detail_tgl_kembal">
    </div>
     <div class="form-group">
        <label for="">Detail Denda </label>
        <input class="form-control" type="text" name="detail_denda">
    </div>
     <div class="form-group">
        <label for="">Detail  Kembali </label>
        <input class="form-control" type="text" name="detail_kembali">
    </div>
    
    
    <button type="submit" name="Simpan"
     class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('detail.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
