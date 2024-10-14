@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
<div class="compact-table">
    <table class="table table-bordered table-sm">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
            <td>{{ $mahasiswa->tgl_lahir }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->prodi->nama}}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

@section('style')
<style>
    .compact-table {
        font-size: 0.5rem;
    }
    .compact-table .table th,
    .compact-table .table td {
        padding: 0.2rem;
    }
</style>
@endsection
