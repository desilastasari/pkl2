@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Peminjaman</div>
                <div class="card-body">
                    <form action="{{ route('peninjaman.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Petugas</label>
                        <select name="ptg_nama" class="form-control">
                            @foreach($petugas as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->ptg_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama peminjam</label>
                        <select name="pjm_nama" class="form-control">
                            @foreach($penimjam as $data)
                        <option value="{{ $data->id}}">
                             {{ $data->pjm_nama}}
                        </option>
                        @endforeach
                        </select>
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