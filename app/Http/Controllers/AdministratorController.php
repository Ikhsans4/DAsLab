<?php

namespace App\Http\Controllers;

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
        $mk = Matakuliah::paginate(4);
        return view('admin.layout.dashboard', [
            'pendaftar' => Register::count(),
            'jumlahAsisten' => Register::where('status', 1)->count(),
            'mata_kuliah' => $mk,
            'asisten' => Register::all(),
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
        $data = Register::where('status', 1)->get();
        return view('admin.layout.asisten', ['registers' => $data, 'active' => 'asisten']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.tambahAsisten', ['active' => 'asisten']);
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
    public function terima($id)
    {
        $temp = Register::find($id);
        $temp->update(['status' => True]);
        return redirect('/admin/pendaftar')->with('accept', true);
    }
    public function tolak($id)
    {
        $temp = Register::find($id);
        $temp->update(['status' => False]);
        return redirect('/admin/pendaftar')->with('reject', true);
    }

    public function mataKuliah()
    {
        $response = Http::GET('https://apidatamahasiswa.000webhostapp.com/api/data');
        $response = $response->json();

        return view('admin.layout.mataKuliah', ['mata_kuliah' => $response,  'asisten' => Register::all(), 'active' => 'matakuliah']);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
