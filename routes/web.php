<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [RegisterController::class, 'dashboard']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/create', [BukuController::class, 'store']);
Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('edit_buku');
Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('update_buku');
Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('delete_buku');

Route::get('/ruangan', [RuanganController::class, 'index']);
Route::get('/ruangan/create', [RuanganController::class, 'create']);
Route::post('/ruangan/create', [RuanganController::class, 'store'])->name('tambah_ruangan');
Route::get('/ruangan/{ruangan}/edit', [RuanganController::class, 'edit'])->name('edit_ruangan');
Route::put('/ruangan/{ruangan}', [RuanganController::class, 'update'])->name('update_ruangan');
Route::delete('/ruangan/{ruangan}', [RuanganController::class, 'destroy'])->name('delete_ruangan');