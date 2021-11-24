@extends('layout.v_template')
@section('title', 'Petugas')
@section('content')
<div class="container-fluid">
    <!--page heading-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary mb-4">Data Petugas</h6>
            <a href="/petugas/add" class="btn btn-primary btn-sm inline"> Tambah Data</a>
            @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('pesan') }}
    </div>

    @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="{{ url()->current() }}" method="get">
                        <input type="search" name="keyword" value="{{ request('keyword') }}" autofocus autocomplete="off">
                        <button type="submit" name="cari"> Cari!</button>
                    </form>
                    <thead>
                           <tr>
                            <h5><th>No</th></h5>
                            <h5><th>Nama</th></h5>
                            <h5><th>Jabatan</th></h5>
                            <h5><th>Tempat Lahir</th></h5>
                            <h5><th>Tanggal Lahir</th></h5>
                            <h5><th>Telepon</th></h5>
                            <h5><th>Mulai Bekerja</th></h5>
                            <h5><th>Aksi</th></h5>
                            </tr>
                       </thead>
                       <tbody>
                        {{ $no=1; }}
                        @foreach ($petugas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->no_telepon }}</td>
                                <td>{{ $data->mulai_bekerja }}</td>
                                <td>
                                    <a href="/petugas/detail/{{ $data->id_petugas }}" class="btn btn-sm btn-success">Detail</a>
                                    <a href="/petugas/edit/{{ $data->id_petugas }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/petugas/delete/{{ $data->id_petugas }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">Delete</a>

                                </td>
                            </tr>
                        @endforeach

                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>



@endsection
