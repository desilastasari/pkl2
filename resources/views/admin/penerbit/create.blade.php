@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

   
    <div class="form-group">
        <label for="">Nama Penerbit</label>
        <input class="form-control" type="text" name="pbt_nama">
    </div>
    <div class="form-group">
        <label for="">Penerbit Alamat</label>
        <input class="form-control" type="text" name="pbt_alamat">
    </div>
    <div class="form-group">
        <label for="">Telpon Penerbit</label>
        <input class="form-control" type="text" name="pbt_telp">
    </div>
    
    
    <button type="submit" name="Simpan"
     class="btn btn-md btn-info">Simpan</button>
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('penerbit.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
