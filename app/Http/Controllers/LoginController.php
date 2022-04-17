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

        if ($response === NUll) {
            abort(403);
        }
        User::create([
            'name' => $response['user']['name'],
            'npm' => $response['user']['npm'],
            'token' => $response['token'],
            'password' => $response['password'],
            'image' => $response['user']['image'],
            'jurusan' => $response['user']['jurusan'],
        ]);

        // return  User::where('npm', $request->npm)->first()->is_admin;
        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {
            if ((User::where('npm', $request->npm)->first()->is_admin) === 1) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            } else if (User::where('npm', $request->npm)->first()->is_admin !== 1) {
                $request->session()->regenerate();
                return redirect()->intended('');
            }
        }
        return back()->with(
            'error',
            'Login gagal'
        );
    }

    public function logout(Request $id)
    {
        $request = User::find($id)->first();
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();
        if ($request->is_admin !== 1) {
            User::destroy($request->id);
        }
        return redirect('login');
    }
}
