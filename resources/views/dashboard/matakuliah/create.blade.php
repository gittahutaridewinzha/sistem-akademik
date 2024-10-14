@extends('dashboard.layout.main')
@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/dashboard-matakuliah">
                {{-- //csrf untuk validasi form. kalau tidak pakai csrf form tidak bsa di proses --}}
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Mata kuliah</h1>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" id="floatingKode" placeholder="Your kode" value="{{ old('kode') }}">
                    <label for="floatingName">kode</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" id="floatingNama" placeholder="Your name" value="{{ old('nama') }}">
                    <label for="floatingEmail">nama</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="nama" class="form-control @error('sks') is-invalid @enderror" name="sks" id="floatingSks" placeholder="sks" value="{{ old('sks') }}">
                    <label for="floatingEmail">sks</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="nama" class="form-control @error('semester') is-invalid @enderror" name="semester" id="floatingSemester" placeholder="semester" value="{{ old('semester') }}">
                    <label for="floatingEmail">semester</label>
                    @error('semester')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>

                <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?= date('Y')?></p>
            </form>
        </main>
    </div>
</div>

@endsection
