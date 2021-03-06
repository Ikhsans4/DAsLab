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
        $semesterBerjalan = (date('m') < 6) ? 0 : 1;
        return view('user.layout.dashboard', [
            'active' => 'home',
            'mata_kuliah' => $matkul,
            'year' => date('Y'),
            'dosen' => $dosen,
            'asisten' => Register::all(),
            'semesterBerjalan' => $semesterBerjalan,
        ]);
    }

    public function mataKuliah()
    {
        $matkul = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $matkul = $matkul->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen->json();
        $semesterBerjalan = (date('m') < 6) ? 0 : 1;
        return view('user.layout.mataKuliah', [
            'mata_kuliah' => $matkul,
            'dosen' => $dosen,
            'asisten' => Register::all(),
            'year' => date('Y'),
            'active' => 'matakuliah',
            'semesterBerjalan' => $semesterBerjalan,
        ]);
    }

    public function about()
    {
        return view('user.layout.about', ['active' => 'about']);
    }

    public function history()
    {
        $matkul = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $matkul = $matkul->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen->json();
        $semesterBerjalan = (date('m') < 6) ? 0 : 1;
        return view('user.layout.history', [
            'active' => 'history',
            'lessons' => $matkul,
            'asisten' => Register::all(),
            'thisYear' => date('Y'),
            'semesterBerjalan' => $semesterBerjalan,
        ]);
    }
}
