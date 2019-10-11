@extends('layouts.admin')



@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <h5 class="card-header">Data Pendaftaran</h5><br>
                <center>
                        <a href="{{ route('pendaftaran.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating ">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                        <th>Nama Petugas </th>
                                        <th>Nama Peminjam </th>
                                        <th>Kartu Pembuatan </th>
                                        <th>Kartu Akhir </th>
                                    
                                        
                            
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($pendaftaran as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                
                                <td>{{ $data->petugas->ptg_nama }}</td>
                                <td>{{ $data->penimjams->pjm_nama}}</td>
                                <td>{{ $data->kartu_pembuatan}}</td>
                                <td>{{ $data->kartu_akhiri }}</td>


                                 <td style="text-align: center;">
                               
                                    <form action="{{route('pendaftaran.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('pendaftaran.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating "> Edit
                                    </a>
                                    <a href="{{route('pendaftaran.show', $data->id) }}"
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