@extends('template')
@section('title')
@section('conten')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <label>PENGINPUTAN DATA</label>
<form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label class="font-weight-bold">NAMA</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}" placeholder="Masukkan Nama Siswa">

        @error('nama')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">NIK</label>
        <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{old('nik')}}" placeholder="Masukkan Nik Siswa">

        @error('nik')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">JENIS KELAMIN</label>
        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" placeholder="Masukkan jenis kelamin Siswa">

        @error('jenis_kelamin')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">KELAS</label>
        <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{old('kelas')}}" placeholder="Masukkan kelas Siswa">

        @error('kelas')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">JURUSAN</label>
        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{old('jurusan')}}" placeholder="Masukkan jurusan Siswa">

        @error('jurusan')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label class="font-weight-bold">ALAMAT</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{old('alamat')}}" placeholder="Masukkan alamat Siswa">

        @error('alamat')
        <div class="alert-alert-danger mt-2">
            {{$message}}
        </div>
        @enderror
    </div>

<button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
 <button type="reset" class="btn btn-md btn-warning">RESET</button>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection