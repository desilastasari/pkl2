@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Peminjam</div>
                <div class="card-body">
                    <form action="{{ route('penimjam.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Peminjam</label>
                        <input class="form-control" type="text" name="pjm_nama">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Peminjam</label>
                        <input class="form-control" type="text" name="pjm_alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon Peminjam</label>
                        <input class="form-control" type="text" name="pjm_telp">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Peminjam</label>
                        <input class="form-control" type="file" name="pjm_foto" id="pjm_foto">
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjam.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection