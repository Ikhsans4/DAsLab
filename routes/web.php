<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin
Route::get('/login', function () {
    return view('LoginPage/login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.layout.dashboard');
});

Route::get('/admin/kelas', function () {
    return view('admin.layout.kelas');
});
Route::get('/admin/pendaftar', function () {
    return view('admin.layout.pendaftar');
});

// user

Route::get('/', function () {
    return view('user.layout.dashboard');
});
Route::get('/kelas', function () {
    return view('user.layout.kelas');
});
Route::get('/daftar', function () {
    return view('user.layout.daftar');
});
