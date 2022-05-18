<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $mk = $response->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen->json();
        $asisten = Register::all();
        // menghitung jumlah asisten berdasarkan jurusan admin
        $jumlahAsisten = 0;
        foreach ($asisten as $aslab) {
            if ($aslab['status'] === 1 && $aslab['jurusan'] === auth()->user()->jurusan) {
                $jumlahAsisten += 1;
            }
        }
        $registration = 0;
        return view('admin.layout.dashboard', [
            'pendaftar' => Register::where('jurusan', auth()->user()->jurusan)->count(),
            'jumlahAsisten' => $jumlahAsisten,
            'mata_kuliah' => $mk,
            'dosen' => $dosen,
            'asisten' => $asisten,
            'active' => 'home',
        ]);
    }

    /**
     * menampilkan data asisten yang mendaftar dari database
     *
     * @return \Illuminate\Http\Response
     */
    public function pendaftar()
    {

        return view('admin.layout.pendaftar', [
            'registers' => Register::all(),
            'active' => 'pendaftar'
        ]);
    }
    /**
     * menampilkan data asisten dari database
     *
     * @return \Illuminate\Http\Response
     */
    public function asisten()
    {
        $data = Register::where('status', 1)->where('jurusan', auth()->user()->jurusan)->get();

        return view('admin.layout.asisten', [
            'registers' => $data,
            'active' => 'asisten',
            'thisYear' => date('Y'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessons = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $lessons = $lessons->json();
        return view('admin.layout.tambahAsisten', ['active' => 'asisten', 'lessons' => $lessons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'nama' => 'required|max:255',
            'npm' => 'required|unique:registers,npm|numeric',
            'email' => 'required|unique:registers,email',
            'nohp' => 'required|numeric',
            'jurusan' => 'required',
            'mataKuliah' => 'required',
        ]);

        // mengisi data ke dalam database
        $credentials = [
            'nama' => $request->nama,
            'npm' => $request->npm,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'jurusan' => $request->jurusan,
            'mataKuliah' => $request->mataKuliah,
            'status' => True,
        ];

        // menambah data ke dalam database
        Register::create($credentials);
        return redirect('/admin/asisten')->with('status', 'Berhasil');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $temp = Register::find($id);
        $temp->update(['status' => True]);
        return Register::all();
    }

    public function terima(Request $request)
    {
        $temp = Register::find($request->id);
        $temp->update(['status' => True]);
        return redirect('/admin/pendaftar')->with('accept', true);
    }

    public function tolak(Request $request)
    {
        $temp = Register::find($request->id);
        $temp->update(['status' => False]);
        return redirect('/admin/pendaftar')->with('reject', true);
    }

    public function mataKuliah()
    {
        $response = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-mk');
        $response = $response->json();
        $dosen = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data-user');
        $dosen = $dosen->json();
        return view('admin.layout.mataKuliah', ['mata_kuliah' => $response, 'lecturers' => $dosen,  'asisten' => Register::all(), 'active' => 'matakuliah']);
    }
}
