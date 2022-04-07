<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class LoginController extends Controller
{
    public function index()
    {

        return view('LoginPage.login');
    }

    public function authentication(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'npm' => $request->npm,
            'password' => $request->password,
        ]);
        $response = $response->json();

        User::create([
            'name' => $response['user']['name'],
            'npm' => $response['user']['npm'],
            'remember_token' => $response['token'],
            'password' => $response['password'],
        ]);

        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {

            $request->session()->regenerate();
            return redirect()->intended('');
        }

        return dd($response->json());
    }
}
