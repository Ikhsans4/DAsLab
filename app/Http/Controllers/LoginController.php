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



        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {
            if ((User::where('npm', $request->npm)->first()->is_admin) === 1) {
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            }
        } else {
            $response = Http::post('https://apidatamahasiswa.000webhostapp.com/api/login', [
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
            if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {

                $request->session()->regenerate();
                return redirect()->intended('');
            }
        }
        return back()->with(
            'error',
            'Login gagal'
        );
    }

    public function logout()
    {
        $id = auth()->user()->id;
        $id = User::where('id', $id)->first();
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();
        if ($id->is_admin === 0) {
            User::destroy($id->id);
            return redirect('login');
        }
    }
}
