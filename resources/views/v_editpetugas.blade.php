@extends('layout.v_template')
@section('title', 'Halaman Edit Data Petugas')

@section('content')
<form action="/petugas/update/{{ $petugas->id_petugas }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="container mx-2">
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $petugas->nama }}">
                    <div class="invalid-feedback">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ $petugas->jabatan }}">
                    <div class="invalid-feedback">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ $petugas->tempat_lahir }}">
                    <div class="invalid-feedback">
                        @error('tempat_lahir')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $petugas->tanggal_lahir }}">
                    <div class="invalid-feedback">
                        @error('tanggal_lahir')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="number" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ $petugas->no_telepon }}">
                    <div class="invalid-feedback">
                        @error('no_telepon')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Mulai Bekerja</label>
                    <input  type="date" name="mulai_bekerja" class="form-control @error('mulai_bekerja') is-invalid @enderror" value="{{ $petugas->mulai_bekerja }}">
                    <div class="invalid-feedback">
                        @error('mulai_bekerja')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
           </div>
       </div>
  </div>

</form>

@endsection
