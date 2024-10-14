@extends('dashboard.layout.main')
@section('title', 'Detail Dosen')
@section('navDosen', 'active')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Data Dosen</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h5>{{ $dosen->nama }}</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>NIK</strong></div>
                        <div class="col-md-8">{{ $dosen->nik }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Email</strong></div>
                        <div class="col-md-8">{{ $dosen->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>No Telp</strong></div>
                        <div class="col-md-8">{{ $dosen->no_telp }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Program Studi</strong></div>
                        <div class="col-md-8">{{ $dosen->prodi_id}}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Alamat</strong></div>
                        <div class="col-md-8">{{ $dosen->alamat }}</div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="/dashboard-dosen" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Kembali ke Daftar Dosen
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
