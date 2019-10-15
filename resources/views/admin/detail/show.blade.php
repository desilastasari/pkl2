@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Mengubah Data Detail</center></div>
                <div class="card-body">
                   
                        <div class="form-group">
                        <label for="">Nama peminjam</label>
                        <select name="pjm_nama" class="form-control"readonly>
                            @foreach($penimjam as $data)
                        <option value="{{ $data->id}}">
                             {{ $data->pjm_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
    
                     <div class="form-group">
                        <label for="">Nama Buku</label>
                        <select name="buku_judul" class="form-control"readonly>
                            @foreach($buku as $data)
                        <option value="{{ $data->id}}">
                             {{ $data->buku_judul}}
                        </option>
                        @endforeach
                        </select>
                                    </div>
                    <div class="form-group">
                        <label for="">Detail Tanggal Kembali </label>
                        <input class="form-control"  value="{{ $detail->detail_tgl_kembali }}" type="date" name="detail_tgl_kembali" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Detail Denda </label>
                        <input class="form-control"  value="{{ $detail->detail_denda }}"type="text" name="detail_denda" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Detail  Kembali </label><br>
                        {{-- <input class="form-control" type="text" name="detail_kembali"> --}}
                        <input type="radio" name="detail_kembali" value="ya"> Ya<br>
                        <input type="radio" name="detail_kembali" value="tidak"> Tidak<br>
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