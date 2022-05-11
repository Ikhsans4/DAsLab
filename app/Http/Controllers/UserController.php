<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $matkul = Matakuliah::limit(5)->get();
        $dosen = Dosen::all();
        return view('user.layout.dashboard', [
            'active' => 'home',
            'mata_kuliah' => $matkul,
            'dosen' => $dosen,
            'asisten' => Register::all(),
        ]);
    }

    public function mataKuliah()
    {
        $matkul = Matakuliah::all();
        $dosen = Dosen::all();
        return view('user.layout.mataKuliah', [
            'mata_kuliah' => $matkul,
            'dosen' => $dosen,
            'asisten' => Register::all(),
            'active' => 'matakuliah'
        ]);
    }

    public function about()
    {
        return view('user.layout.about', ['active' => 'about']);
    }
}
