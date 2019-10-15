@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Penerbit</div>
                <div class="card-body">
                   
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input class="form-control" value="{{ $kategori->ktg_nama}}" type="text" name="ktg_nama"readnly
                            >
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