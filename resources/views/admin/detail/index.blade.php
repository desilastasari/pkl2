@extends('layouts.admin')



@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"><center><h3>Detail Data Peminjaman Buku</h3></center></h5><br>
                <center>
                        <a href="{{ route('detail.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating ">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Peminjam </th>
                                <th>Nama Buku</th>
                                <th>Detail Tanggal Kembali</th>
                                <th>Detail Denda</th>
                                <th>Detail Kembali</th>
                                
                            
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($detail as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->peminjams->pjm_nama }}</td>
                                <td>{{ $data->bukus->buku_judul }}</td>
                                <td>{{ $data->peninjamen->pjmn_tgl_kembali}}</td>
                                <td>{{ $data->detail_denda }}</td>
                                <td>{{ $data->detail_kembali }}</td>
                                

                              
								<td style="text-align: center;">
                                    <form action="{{route('detail.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('detail.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating "> Edit
                                    </a>
                                    <a href="{{route('detail.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating "> Show
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