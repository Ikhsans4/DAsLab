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
        $matkul = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $matkul = $matkul->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen->json();
        return view('user.layout.dashboard', [
            'active' => 'home',
            'mata_kuliah' => $matkul,
            'dosen' => $dosen,
            'asisten' => Register::all(),
        ]);
    }

    public function mataKuliah()
    {
        $matkul = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $matkul = $matkul->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen -> json();
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
