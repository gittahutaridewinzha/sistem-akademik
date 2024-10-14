@extends('dashboard.layout.main')
@section('title')
@section('navMhs','active')

@section('content')
<h4>Daftar Mahasiswa Jurusan TI</h4>
@if (session('pesan'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif


<a href="/dashboard-mahasiswa/create" class="btn btn-primary mb-2">Create Mahasiswa</a>
<a href="/cetak-pdf" target="blank" class="btn btn-success mb-2">Cetaklah aku</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Aksi</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $mahasiswa-> nim }}</td>
        <td>{{ $mahasiswa-> nama_lengkap }}</td>
        <td>{{ $mahasiswa-> email }}</td>
        <td>{{ $mahasiswa-> prodi->nama}}</td>
        <td>{{ $mahasiswa-> alamat }}</td>
        <td>
            <div class="d-flex">
                <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}" title="lihat detail"><button class="btn btn-success me-2"
                    type="button"><i class="bi bi-eye-fill"></i></i></button></a>
                <a href="dashboard-mahasiswa/{{ $mahasiswa->id }}/edit" title="edit"><button class="btn btn-warning  me-2" type="button"><i class="bi bi-pencil-square"></i></button></a>
                <form action="/dashboard-mahasiswa/{{ $mahasiswa->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" title="hapus" onclick="return confirm('r u sure, hun?')">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection
