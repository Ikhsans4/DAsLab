<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.layout.dashboard');
    }

    public function mataKuliah()
    {
        return view('user.layout.mataKuliah');
    }

    public function about()
    {
        return view('user.layout.about');
    }
}
