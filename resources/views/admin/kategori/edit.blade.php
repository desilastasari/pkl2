@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Mengubah Data Penerbit</center></div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input class="form-control" value="{{ $kategori->ktg_nama}}" type="text" name="ktg_nama">
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('kategori.index') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection