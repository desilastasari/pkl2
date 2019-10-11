@extends('layouts.admin')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Peminjam</div>
                <div class="card-body">
                  
   
    <div class="form-group">
        <label for="">Nama Peminjam</label>
        <input class="form-control" type="text" value="{{$penimjam->pjm_nama}}" name="pjm_nama" readonly>
    </div>
     <div class="form-group">
        <label for="">Alamat Peminjam</label>
        <input class="form-control" type="text" value="{{$penimjam->pjm_alamat}}" name="pjm_alamat" readonly>
    </div>
     <div class="form-group">
        <label for="">Telepon Peminjam</label>
        <input class="form-control" type="text" value="{{$penimjam->pjm_telp}}" name="pjm_telp" readonly>
    </div>
     <div class="form-group">
        <label for="">Foto Peminjam</label>
        <img src="{{ asset('assets/img/peminjam/'.$penimjam->pjm_foto)}}" alt="" height="200px" width="300px" name="pjm_telp" aria-readonly=""> 
   </div>
       
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('penimjam.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
