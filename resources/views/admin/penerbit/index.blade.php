@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row-18">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Penerbit</h5><br>
                <center>
                        <a href="{{ route('penerbit.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-float">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Penerbit </th>
                                <th>Penerbit Alamat</th>
                                <th>Telpon Penerbit</th>
    
                            
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($penerbit as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->pbt_nama }}</td>
                                <td>{{ $data->pbt_alamat }}</td>
                                <td>{{ $data->pbt_telp}}</td>
                                
           
								<td style="text-align: center;">
                                    
                                   <form action="{{route('penerbit.destroy', $data->id)}}" method="post">
                                        @csrf
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-dan"> Delete</button>
									 <a href="{{route('penerbit.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-float"> Edit
                                    </a>
                                    <a href="{{route('penerbit.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-float"> Show
                                    </a>
                                    
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