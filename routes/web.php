<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
// Route::get('/login', function () {
//     return view('LoginPage/login');
// });

Route::get('/signup', function () {
    return view('LoginPage/signup');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.layout.dashboard');
// });

// Route::get('/admin/matakuliah', function () {
//     return view('admin.layout.mataKuliah');
// });
// Route::get('/admin/pendaftar', function () {
//     return view('admin.layout.pendaftar');
// });
//
//  login page
Route::GET('login', [LoginController::class, 'index']);


Route::GET('/admin/dashboard', [AdministratorController::class, 'index']);
Route::GET('/admin/asisten', [AdministratorController::class, 'asisten']);
Route::GET('/admin/pendaftar', [AdministratorController::class, 'pendaftar']);
Route::GET('/admin/tambah', [AdministratorController::class, 'create']);
Route::POST('/admin/tambah', [AdministratorController::class, 'store']);
Route::PUT('/admin/pendaftar/{id}', [AdministratorController::class, 'terima']);
Route::DELETE('/admin/pendaftar/{id}', [AdministratorController::class, 'tolak']);
Route::GET('/admin/matakuliah', [AdministratorController::class, 'mataKuliah']);

// user
Route::get('/', function () {
    return view('user.layout.dashboard');
});
Route::GET('/daftar/{$id}', [RegisterController::class, 'show']);
Route::POST('/daftar', [RegisterController::class, 'store']);
Route::GET('/daftar', [RegisterController::class, 'create']);



Route::get('/matakuliah', function () {
    return view('user.layout.mataKuliah');
});

Route::get('/about', function () {
    return view('user.layout.about');
});

// Route::get('/daftar', function () {
//     return view('user.layout.daftar');
// });
