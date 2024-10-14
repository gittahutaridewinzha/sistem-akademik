<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Definisikan query builder untuk model Dosen
            $query = Dosen::query();

            // Jika ada parameter 'search' dalam request
            if (request('search')) {
                $search = request('search');
                $query->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            }

            // Gunakan query yang telah dimodifikasi untuk mendapatkan hasil dengan pagination
            $dosens = $query->latest()->paginate(10);

            // Kembalikan view dengan data dosens
            return view('akademik.dosen', ['dosens' => $dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = prodi::all();
        return view('dashboard.dosen.create',['prodis' => $prodis]);
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
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
