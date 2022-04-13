<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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


//  login page
Route::GET('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::POST('login', [LoginController::class, 'authentication']);

Route::middleware(['auth', 'admin'])->group(function () {

    // Admin
    Route::GET('admin/dashboard', [AdministratorController::class, 'index']);
    Route::GET('/admin/asisten', [AdministratorController::class, 'asisten']);
    Route::GET('/admin/pendaftar', [AdministratorController::class, 'pendaftar']);
    Route::GET('/admin/tambah', [AdministratorController::class, 'create']);
    Route::POST('/admin/tambah', [AdministratorController::class, 'store']);
    Route::PUT('/admin/pendaftar/{id}', [AdministratorController::class, 'terima']);
    Route::DELETE('/admin/pendaftar/{id}', [AdministratorController::class, 'tolak']);
    Route::GET('/admin/matakuliah', [AdministratorController::class, 'mataKuliah']);

    // user
    Route::GET('/', [UserController::class, 'index']);
    Route::GET('/matakuliah', [UserController::class, 'mataKuliah']);
    Route::GET('/about', [UserController::class, 'about']);
    Route::GET('/daftar/{$id}', [RegisterController::class, 'show']);
    Route::POST('/daftar', [RegisterController::class, 'store']);
    Route::GET('/daftar', [RegisterController::class, 'create']);

    // logout
    Route::POST('logout', [LoginController::class, 'logout']);
});
