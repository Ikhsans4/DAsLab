<?php

namespace App\Http\Controllers;

use App\Models\Register;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;


class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://dummyjson.com/users/1');

        return view('admin.layout.dashboard', [
            'pendaftar' => Register::count(),
            'asisten' => Register::where('status', 1)->count(),
            'data' => $response->json()
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
            'registers' => Register::all()
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
        return view('admin.layout.asisten', ['registers' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.tambahAsisten');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temp = Register::find($id);
        $temp->update(['status' => True]);
        return Register::all();
    }
    public function terima($id)
    {
        $temp = Register::find($id);
        $temp->update(['status' => True]);
        return redirect('/admin/pendaftar');
    }
    public function tolak($id)
    {
        Register::destroy($id);

        return redirect('/admin/pendaftar');
    }

    public function mataKuliah()
    {

        // $response = Http::post('http://127.0.0.1:8000/api/login');
        // $response = Http::withBasicAuth('ikhsan@gmail.com', '123')->post('http://127.0.0.1:8000/api/login');
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'email' => 'ikhsan@gmail.com',
            'password' => '123',
        ]);
        $response = $response->json();
        $response = $response['token'];
        // return dd($response);
        $response = Http::withToken($response)->get('http://127.0.0.1:8000/api/data');
        return dd($response->json());
        return view('admin.layout.mataKuliah');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //// $response = Http::get('http://localhost/PBW/DAsLab/public/admin/matakuliah');
        // // $response = $this->getJson('/api/matakuliah');
        // return $response;
        // return dd($response->body());
        // return dd($response->json());
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, 'http://localhost/PBW/dummy-api/public/api/matakuliah');
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // $result = curl_exec($curl);
        // curl_close($curl);
        // // return dd($result);
        // $result = json_decode($result, true);
        // return dd($result);
        // // return dd($result);
        // // return dd($result['mata_kuliah'][0]['mata_kuliah']);
        // $asisten = Register::where('mataKuliah', $result['mata_kuliah'][0]['mata_kuliah'])->get();
        // // return dd($asisten);
    }
}
