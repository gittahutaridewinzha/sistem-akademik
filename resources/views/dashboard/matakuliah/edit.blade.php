@extends('dashboard.layout.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="{{ route('dashboard-matakuliah.update', $matakuliah->id) }}">
                {{-- csrf untuk validasi form. kalau tidak pakai csrf form tidak bisa diproses --}}
                @csrf
                @method('PUT')
                <h1 class="h3 mb-3 fw-normal text-center">Update Mata Kuliah</h1>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="floatingKode" placeholder="Your kode" value="{{ old('kode', $matakuliah->kode) }}" readonly>
                    <label for="floatingKode">Kode</label>
                    @error('kode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="floatingNama" placeholder="Your name" value="{{ old('nama', $matakuliah->nama) }}">
                    <label for="floatingNama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('sks') is-invalid @enderror" name="sks" id="floatingSks" placeholder="SKS" value="{{ old('sks', $matakuliah->sks) }}">
                    <label for="floatingSks">SKS</label>
                    @error('sks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" id="floatingSemester" placeholder="Semester" value="{{ old('semester', $matakuliah->semester) }}">
                    <label for="floatingSemester">Semester</label>
                    @error('semester')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Update</button>

                <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?= date('Y')?></p>
            </form>
        </main>
    </div>
</div>

@endsection
