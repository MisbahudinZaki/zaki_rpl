@extends('template')
@section('title')
@section('conten')

<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card-border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
<label class="font-weigh-bold">NAMA JURUSAN</label>
<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama', $jurusan->nama) }}" placeholder="Masukkan nama">

<!-- error message untuk title-->
@error('nama')
<div class="alert alert-danger mt-2">
{{$message}}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold">KEPALA JURUSAN</label>
<input type="text" class="form-control @error('kepala_jurusan') is-invalid @enderror" name="kepala_jurusan" value="{{old('kepala_jurusan', $jurusan->kepala_jurusan)}}" placeholder="Masukan Kepala Jurusan">

<!-- error message untuk title-->
@error('kepala_jurusan')
<div class="alert alert-danger mt-2">
{{$message}}
</div>
@enderror
</div>

<div class="form-group">
<label class="font-weight-bold">JUMLAH SISWA</label>
<input type="text" class="form-control @error('jumlahsiswa') is-invalid @enderror" name="jumlahsiswa" value="{{old('jumlahsiswa', $jurusan->jumlahsiswa)}}" placeholder="Masukan jumlah siswa">

<!-- error message untuk title-->
@error('jumlahsiswa')
<div class="alert alert-danger mt-2">
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
