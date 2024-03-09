<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index']);
// Route::get('/cekdata', [LandingController::class, 'cekdata']);
Route::get('/cekdata', [LandingController::class, 'cekdata'])->name('search');

Route::get('/detail/{nisn:nisn}', [LandingController::class, 'show']);
Route::post('/detail/{nisn:nisn}', [LandingController::class, 'tambahprestasi'])->middleware('auth');
Route::post('/detail/{id:id}/nisn/{nisn:nisn}', [LandingController::class, 'delete'])->middleware('auth');
Route::post('/detail/{nisn:nisn}/edit', [LandingController::class, 'editsiswa'])->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [LandingController::class, 'dashboard'])->middleware('auth');
Route::get('/tambah', [LandingController::class, 'tambah'])->middleware('auth');
Route::post('/tambah', [LandingController::class, 'tambahsiswa'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



