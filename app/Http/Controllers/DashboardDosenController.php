<?php

namespace App\Http\Controllers;
use App\Models\DashboardDosen;
use App\Models\DashboardProdi;
use App\Models\Dosen;
use App\Models\Prodi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $dosen=DashboardDosen::latest()->paginate(10);
        return view('dashboard.dosen.index',['dosens'=>$dosen]);
    }

    public function cetakpdf()
    {
        $pdf = Pdf::loadView('dashboard.dosen.cetakpdf', ['dosens'=>DashboardDosen::all()]);
        //return $pdf->download('Laporan-Data-Mahasiswa.pdf');
        return $pdf->stream('Laporan-Data-Dosen.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = DashboardProdi::all();
        return view('dashboard.dosen.create',['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);

        DashboardDosen::create($validated); // Correct model name
        return redirect('/dashboard-dosen')->with('success', 'Data Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.show', compact('dosen'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = Prodi::all();
        $dosen = Dosen::find($id);
        return view('dashboard.dosen.edit', compact('prodis', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required|min:3',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);
        Dosen::where('id', $id)->update($validated);
        return redirect('dashboard-dosen')->with('pesan', 'data sudah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DashboardDosen::destroy($id);
        return redirect('/dashboard-dosen')->with('pesan', 'done gurl');
    }
}
