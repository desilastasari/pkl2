@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Membuat Data Peminjaman</center></div>
                <div class="card-body">
                     <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="ktg_nama" class="form-control">
                            @foreach($kategori as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->ktg_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama penerbit</label>
                        <select name="pbt_nama" class="form-control">
                            @foreach($penerbit as $data)
                        <option value="{{ $data->id}}">
                             {{ $data->pbt_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                         <label for="">Judul Buku</label>
                         <input class="form-control" value="{{ $buku->buku_judul}}" type="text" name="buku_judul">
                    </div>
                    <div class="form-group">
                         <label for="">Jumlah Buku</label>
                         <input class="form-control" value="{{ $buku->buku_jumlah}}" type="text" name="buku_jumlah">
                    </div>
                    <div class="form-group">
                         <label for="">Deskripsi Buku</label>
                         <input class="form-control" value="{{ $buku->buku_diskripsi}}" type="text" name="buku_diskripsi">
                    </div>
                    <div class="form-group">
                         <label for="">Penulis</label>
                         <input class="form-control" value="{{ $buku->buku_pengarang}}" type="text" name="buku_pengarang">
                    </div>
                     <div class="form-group">
                         <label for="">Tahun Tetbit</label>
                         <input class="form-control"  value="{{ $buku->buku_thn_terbit}}" type="text" name="buku_thn_terbit">
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection