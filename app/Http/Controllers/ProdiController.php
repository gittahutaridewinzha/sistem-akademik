<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Definisikan query builder untuk model Prodi
            $query = Prodi::query();

            // Jika ada parameter 'search' dalam request
            if (request('search')) {
                $search = request('search');
                $query->where('nama', 'like', '%' . $search . '%');
            }

            // Gunakan query yang telah dimodifikasi untuk mendapatkan hasil dengan pagination
            $prodis = $query->latest()->paginate(10);

            // Kembalikan view dengan data prodis
            return view('akademik.prodi', ['prodis' => $prodis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
