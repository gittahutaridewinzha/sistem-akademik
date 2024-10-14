<?php

namespace App\Http\Controllers;

use App\Models\DashboardProdi;
use App\Models\matakuliah;
use App\Models\prodi;
use Illuminate\Http\Request;

class matakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah =matakuliah::latest()->paginate(10);
        return view('dashboard.matakuliah.index', ['matakuliah' => $matakuliah]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = DashboardProdi::all();
        return view('dashboard.matakuliah.create',['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|unique:matakuliah',
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        matakuliah::create($validated);
        return redirect('/dashboard-matakuliah')->with('success', 'Data Matkul berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = matakuliah::findOrFail($id);
        return view('dashboard.matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = prodi::all();
        $matakuliah = matakuliah::find($id);
        return view('dashboard.matakuliah.edit', compact('prodis', 'matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);
        matakuliah::where('id', $id)->update($validated);
        return redirect('dashboard-matakuliah')->with('pesan', 'data sudah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        matakuliah::destroy($id);
        return redirect('/dashboard-matakuliah')->with('pesan', 'done gurl');
    }
}
