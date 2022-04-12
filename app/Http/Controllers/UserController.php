<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.layout.dashboard', ['active' => 'home']);
    }

    public function mataKuliah()
    {
        return view('user.layout.mataKuliah', ['active' => 'matakuliah']);
    }

    public function about()
    {
        return view('user.layout.about', ['active' => 'about']);
    }
}
