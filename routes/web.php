<?php

use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/dashboard-mahasiswa', [DashboardMahasiswaController::class, 'index']);

Route::resource('/dashboard-mahasiswa',DashboardMahasiswaController::class)->middleware('auth');
Route::resource('/dashboard-matakuliah', matakuliahController::class)->middleware('auth');

Route::get('/dosen', [DosenController::class, 'index']);
Route::resource('/dashboard-dosen', DashboardDosenController::class)->middleware('admin');

Route::get('/prodi', [ProdiController::class, 'index']);
Route::resource('/dashboard-prodi', DashboardProdiController::class)->middleware('auth');

Route::get('/login', [LoginControler::class, 'index']);

Route::post('/login', [LoginControler::class, 'authenticate']);

Route::post('/logout', [LoginControler::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::resource('/register', RegisterController ::class);

Route::get('/user', [UserController::class, 'index']);
// web.php
Route::resource('/dashboard-user', UserController::class)->middleware('auth');

Route::get('cetak-pdf', [DashboardMahasiswaController::class, 'cetakpdf']);
Route::get('cetak-pdf-prodi', [DashboardProdiController::class, 'cetakpdf']);
Route::get('cetak-pdf-dosen', [DashboardDosenController::class, 'cetakpdf']);
Route::get('cetak-pdf-user', [UserController::class, 'cetakpdf']);

