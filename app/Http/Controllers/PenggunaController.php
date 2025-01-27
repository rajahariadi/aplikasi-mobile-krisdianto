<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = User::all();
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'nomor' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);


        User::create([
            'fullname' => $request->fullname,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'role' => $request->role,
        ]);
        return redirect()->route('pengguna.index');
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
        $pengguna = User::find($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'nomor' => 'required|string|unique:users,nomor,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'alamat' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);


        User::find($id)->update([
            'fullname' => $request->fullname,
            'nomor' => $request->nomor,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'role' => $request->role,
        ]);
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('pengguna.index');
    }
}
