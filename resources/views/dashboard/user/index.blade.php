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


<a href="/dashboard-user/create" class="btn btn-primary mb-2">Create user </a>
<a href="/cetak-pdf-user" target="blank" class="btn btn-success mb-2">Cetaklah aku</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $user-> name }}</td>
        <td>{{ $user-> email }}</td>
        <td>
            <div class="d-flex">
                <a href="/dashboard-user/{{ $user->id }}" title="lihat detail"><button class="btn btn-success me-2"
                    type="button"><i class="bi bi-eye-fill"></i></i></button></a>
                <a href="dashboard-user/{{ $user->id }}/edit" title="edit"><button class="btn btn-warning  me-2" type="button"><i class="bi bi-pencil-square"></i></button></a>
                <form action="/dashboard-user/{{ $user->id }}" method="post" class="d-inline">
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
