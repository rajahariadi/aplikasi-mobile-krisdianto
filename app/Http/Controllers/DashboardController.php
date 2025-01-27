<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMapel = Mapel::count();
        $totalKelas = Kelas::count();
        $totalPengguna = User::count();
        $totalMateri = Materi::count();
        return view('dashboard.index', compact('totalMapel', 'totalKelas', 'totalPengguna', 'totalMateri'));
    }
}
