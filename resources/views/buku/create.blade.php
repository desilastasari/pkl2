@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Id</label>
        <input class="form-control" type="text" name="peninjamen_id">
    </div>
    <div class="form-group">
        <label for="">Id Petugas</label>
        <input class="form-control" type="text" name="petugas_id">
    </div>
    <div class="form-group">
        <label for="">Id Peminjam</label>
        <input class="form-control" type="text" name="peminjams_id">
    </div>
    <div class="form-group">
        <label for="">Tanggal Pinjaman</label>
        <input class="form-control" type="date" name="pjmn_tgl">
    </div>
    <div class="form-group">
        <label for="">Tanggal Pengembalian</label>
        <input class="form-control" type="date" name="pjmn_tgl_kembali">
        </div>
    
    <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('peninjaman.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
