@extends('layouts.admin')



@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Peminjaman</h5><br>
                <center>
                        <a href="{{ route('peninjaman.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th> Petugas </th>
                                <th>Nama Peminjam</th>
                                <th>Tanggal Pinjaman</th>
                                <th>Tanggal Pengembalian</th>
                            
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($peninjaman as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->petugas->ptg_nama }}</td>
                                <td>{{ $data->penimjams->pjm_nama}}</td>
                                <td>{{ $data->pjmn_tgl}}</td>
                                <td>{{ $data->pjmn_tgl_kembali }}</td>


                                 <td style="text-align: center;">
                               
                                    <form action="{{route('peninjaman.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('peninjaman.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning "> Edit
                                    </a>
                                    <a href="{{route('peninjaman.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success "> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger "> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection