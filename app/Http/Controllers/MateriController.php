<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::with('mapel', 'kelas')->get();
        return view('materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataKelas = Kelas::all();
        $dataMapel = Mapel::all();
        return view('materi.create', compact('dataKelas', 'dataMapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sumber' => 'required|string|max:255',
            'mapel_id' => 'required|string|max:255',
            'kelas_id' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);


        Materi::create([
            'judul' => $request->judul,
            'sumber' => $request->sumber,
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('materi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materi = Materi::find($id);
        $dataKelas = Kelas::all();
        $dataMapel = Mapel::all();
        return view('materi.edit', compact('materi', 'dataKelas', 'dataMapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sumber' => 'required|string|max:255',
            'mapel_id' => 'required|string|max:255',
            'kelas_id' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);


        Materi::find($id)->update([
            'judul' => $request->judul,
            'sumber' => $request->sumber,
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('materi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Materi::find($id)->delete();
        return redirect()->route('materi.index');
    }
}
