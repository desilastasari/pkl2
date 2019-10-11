@extends('layouts.admin')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Penerbit</div>
                <div class="card-body">
                  
   
    <div class="form-group">
        <label for="">Nama Penerbit</label>
        <input class="form-control" type="text" value="{{$penerbit->pbt_nama}}" name="pbt_nama" readonly>
    </div>
    <div class="form-group">
        <label for="">Penerbit Alamat</label>
    <input class="form-control" type="text" value="{{$penerbit->pbt_alamat}}"  name="pbt_alamat" readonly>
    </div>
    <div class="form-group">
        <label for="">Telpon Penerbit</label>
    <input class="form-control" type="text" value="{{$penerbit->pbt_telp}}"name="pbt_telp" readonly>
    </div>
   
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('penerbit.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
