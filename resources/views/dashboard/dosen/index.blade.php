@extends('dashboard.layout.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')


<h1>Daftar Dosen</h1>
<a href="{{ route('dashboard-dosen.create') }}" class="btn btn-primary mb-2">Create Dosen</a>
<a href="/cetak-pdf-dosen" target="blank" class="btn btn-success mb-2">Cetaklah aku</a>
<table class="table table-bordered table-sm">
    <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($dosens as $dosen)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $dosen->nik }}</td>
        <td>{{ $dosen->nama }}</td>
        <td>{{ $dosen->email }}</td>
        <td>{{ $dosen->no_telp }}</td>
        <td>{{ $dosen->prodi->nama }}</td>
        <td>{{ $dosen->alamat }}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('dashboard-dosen.show', $dosen->id) }}" title="lihat detail">
                    <button class="btn btn-success me-2" type="button"><i class="bi bi-eye-fill"></i></button>
                </a>
                <a href="/dashboard-dosen/{{ $dosen->id }}/edit" title="edit">
                    <button class="btn btn-warning me-2" type="button"><i class="bi bi-pencil-square"></i></button>
                </a>
                <form action="/dashboard-dosen/{{ $dosen->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" title="hapus" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
@endforeach
</table>
@endsection
