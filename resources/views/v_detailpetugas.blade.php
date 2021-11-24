@extends('layout.v_template')
@section('title', 'Halaman Detail Data Petugas')
@section('content')
<div class="container mx-2">
    <table class="table">
        <tr>
            <th width="150px">Nama</th>
            <th width="30px">:</th>
            <th>{{ $petugas->nama }}</th>
        </tr>
        <tr>
            <th width="150px">Jabatan</th>
            <th width="30px">:</th>
            <th>{{ $petugas->jabatan }}</th>
        </tr>
        <tr>
            <th width="150px">Tempat lahir</th>
            <th width="30px">:</th>
            <th>{{ $petugas->tempat_lahir }}</th>
        </tr>
        <tr>
            <th width="150px">Tanggal lahir</th>
            <th width="30px">:</th>
            <th>{{ $petugas->tanggal_lahir }}</th>
        </tr>
        <tr>
            <th width="150px">No. Telepon</th>
            <th width="30px">:</th>
            <th>{{ $petugas->no_telepon }}</th>
        </tr>
        <tr>
            <th width="150px">Mulai bekerja</th>
            <th width="30px">:</th>
            <th>{{ $petugas->mulai_bekerja }}</th>
        </tr>
        <tr>
            <th><a href="/petugas" class="btn btn-success btn-sm">Kembali</a></th>
        </tr>
    </table>
</div>




@endsection
