<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        return view('user.layout.dashboard', ['active' => 'home',]);
    }

    public function mataKuliah()
    {
        $matkul = Matakuliah::all();
        $dosen = Dosen::all();
        return view('user.layout.mataKuliah', [
            'mata_kuliah' => $matkul,
            'dosen' => $dosen,
            'active' => 'matakuliah'
        ]);
    }

    public function about()
    {
        return view('user.layout.about', ['active' => 'about']);
    }
}
