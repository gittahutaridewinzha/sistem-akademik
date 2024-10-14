@extends('dashboard.layout.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-6">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Detail Mata Kuliah</h1>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingKode" value="{{ $matakuliah->kode }}" readonly>
                <label for="floatingKode">Kode</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingNama" value="{{ $matakuliah->nama }}" readonly>
                <label for="floatingNama">Nama</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingSks" value="{{ $matakuliah->sks }}" readonly>
                <label for="floatingSks">SKS</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingSemester" value="{{ $matakuliah->semester }}" readonly>
                <label for="floatingSemester">Semester</label>
            </div>

            <a href="{{ route('dashboard-matakuliah.index') }}" class="btn btn-primary w-100 py-2">Kembali</a>
        </main>
    </div>
</div>

@endsection
