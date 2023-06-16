@extends('template')
@section('title')
@section('conten')

<h2>Daftar Nama Siswa</h2>
<body style="background: lightgray;">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{route('siswa.create')}}" class="btn btn-md btn-success mb-3">ADD</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama siswa</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($siswas as $siswa)
                            <tr>
                                <td class="text-center">{{$siswa->nama}}</td>
                                <td>{{$siswa->nik}}</td>
                                <td>{{$siswa->jenis_kelamin}}</td>
                                <td>{{$siswa->kelas}}</td>
                                <td>{{$siswa->jurusan}}</td>
                                <td>{{$siswa->alamat}}</td>
                                <td></td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Kamu Yakin?');" action="{{route('siswa.destroy', $siswa->id)}}" method="POST">
                                    <a href="{{route('siswa.edit', $siswa->id)}}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                       @method('DELETE') 
                                       <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-dager">
                                DATA BLOG KOSONG
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{$siswas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(session()-> has('success'))
 
 toastr.success('{{ session('success') }}', 'BERHASIL!'); 
 @elseif(session()-> has('error'))
 toastr.error('{{ session('error') }}', 'GAGAL!'); 
 @endif
</script>
@endsection