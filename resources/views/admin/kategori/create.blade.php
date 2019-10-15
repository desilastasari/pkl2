@extends('layouts.admin')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><cente>Membuat Data Petugas</cente></div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

   
    <div class="form-group">
        <label for="">Nama Kategori</label>
        <input class="form-control" type="text" name="ktg_nama">
    </div>
    
    
    <button type="submit" name="Simpan"
     class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('kategori.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
