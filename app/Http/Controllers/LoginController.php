<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Isset_;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.layout.login');
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
                'nip' => $request->npm,
                'password' => $request->password,
            ]);
            $response = $response->json();

            if (isset($response['message'])) {
                return back()->with(
                    'status',
                    'Login gagal'
                );
            } else if ($response === null) {
                return back()->with(
                    'status',
                    'network error'
                );
            }

            User::create([
                'name' => $response['user']['nama'],
                'npm' => $response['user']['nip'],
                'email' => $response['user']['email'],
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
            'status',
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
        }
        return redirect('login');
    }
}
