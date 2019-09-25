@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Petugas</div>
                <div class="card-body">
                  
   
    <div class="form-group">
        <label for="">Nama Petugas</label>
        <input class="form-control" type="text" value="{{$petugas->ptg_nama}}" name="ptg_nama" readonly>
    </div>
    
   
    <a name="" id="" class="btn btn-md btn-warning" href="{{route('petugas.index')}}" role="button">kembali</a>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
