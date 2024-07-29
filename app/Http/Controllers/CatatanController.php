<?php

namespace App\Http\Controllers;
use App\Models\CatatanPerjalanan;

use Illuminate\Http\Request;

class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catatans = CatatanPerjalanan::all();

        return view("Catatan.index", ['catatans' => $catatans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Catatan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'suhu' => 'required|numeric',
            'lokasi' => 'required',
        ]);

        $catatan = CatatanPerjalanan::create($data);
        return redirect(route("Catatan.index"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatatanPerjalanan $catatan)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatatanPerjalanan $catatan)
    {
        $Data = $request->validate([
            'tanggal' => 'required|date',
            'waktu' => 'required|timezone',
            'suhu' => 'required|numeric',
            'lokasi' => 'required',
        ]);

        $catatan->update($Data);

        // Redirect ke halaman daftar catatan atau halaman detail catatan
        return redirect()->route('catatan.index')->with('success','Catatan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatatanPerjalanan $catatan)
    {
        $catatan->delete();

        return redirect()->route('catatan.index')->with('success','Catatan Berhasil Dihapus');
    }
}