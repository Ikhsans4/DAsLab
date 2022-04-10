<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class EnsureLoginIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = Http::post('http://127.0.0.1:8000/api/login', [
            'npm' => $request->npm,
            'password' => $request->password,
        ]);
        $response = $response->json();
        // return dd($response['status']);
        if ($response === Null) {
            abort(403);
        }

        // return redirect('/admin/dashboard');
        return $next($request);
    }
}
