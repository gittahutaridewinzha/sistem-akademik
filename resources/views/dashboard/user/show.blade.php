@extends('dashboard.layout.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Data Mahasiswa</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h5>{{ $user->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Email</strong></div>
                        <div class="col-md-8">{{ $user->email }}</div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="/dashboard-user" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Kembali ke Daftar User
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
