@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Peminjam</div>
                <div class="card-body">
                    <form action="{{ route('penimjam.update', $penimjam->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                       
                    <div class="form-group">
                        <label for="">Nama Peminjam</label>
                        <input class="form-control" type="text" value="{{$penimjam->pjm_nama}}" name="pjm_nama" >
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Peminjam</label>
                        <input class="form-control" type="text" value="{{$penimjam->pjm_alamat}}" name="pjm_alamat" >
                    </div>
                    <div class="form-group">
                        <label for="">Telepon Peminjam</label>
                        <input class="form-control" type="text" value="{{$penimjam->pjm_telp}}" name="pjm_telp" >
                    </div>
                   <div class="form-group">
                        <label for="">Foto Peminjam</label>
                        <input class="form-control" type="file" name="pjm_foto" id="pjm_foto">
                    </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('penimjam.index') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection