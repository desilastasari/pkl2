@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data pendaftaran</div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

   
    <div class="form-group">
        <label for="">Id Petugas</label>
        <input class="form-control" type="text" name="petugas_id">
    </div>
    <div class="form-group">
        <label for="">Id Peminjam</label>
        <input class="form-control" type="text" name="peminjams_id">
    </div>
    <div class="form-group">
        <label for="">Kartu Pembuatan </label>
        <input class="form-control" type="date" name="kartu_pembuatan">
    </div>
    <div class="form-group">
        <label for="">Kartu Akhir </label>
        <input class="form-control" type="date" name="kartu_akhir">
        </div>
    <div class="form-group">
        <label for="">Kartu Aktif </label>
        <input class="form-control" type="date" name="kartu_aktifr">
        </div>    
    
    <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('pendaftaran.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
