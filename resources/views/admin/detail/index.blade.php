@extends('layouts.app')



@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Detail</h5><br>
                <center>
                        <a href="{{ route('detail.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Id Peminjam </th>
                                <th>Id Buku</th>
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
                                <td>{{ $data->penimjams_id }}</td>
                                <td>{{ $data->details_id }}</td>
                                <td>{{ $data->detail_tgl_kembal}}</td>
                                <td>{{ $data->detail_denda }}</td>
                                <td>{{ $data->detail_kembali }}</td>
                                

                               <td><img src="{{ asset('assets/img/detail/'.$data->detail_gambar)}}" width="100"></td>
								<td style="text-align: center;">
                                    <form action="{{route('detail.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('detail.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('detail.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
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