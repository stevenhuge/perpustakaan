<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:sanctum')->group(function () {

// buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/add', [BukuController::class, 'tambah'])->name('tambah');
Route::post('/buku', [BukuController::class, 'store'])->name('store-buku');
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('destroy');
Route::get('/buku/{id}', [BukuController::class, 'edit'])->name('edit');
Route::post('/buku/{id}', [BukuController::class, 'update'])->name('update');

// anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
Route::get('/anggota/add', [AnggotaController::class, 'create'])->name('create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('store');
Route::get('/anggota/delete/{id}', [AnggotaController::class, 'destroy'])->name('destroy');
Route::get('/anggota/{id}', [AnggotaController::class, 'edit'])->name('edit');
Route::post('/anggota/{id}', [AnggotaController::class, 'update'])->name('update');

// peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('/peminjaman/add', [PeminjamanController::class, 'create'])->name('create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('store-peminjaman');

Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('list-pengembalian');
Route::get('/pengembalian/{id}', [PengembalianController::class, 'store'])->name('pengembalian');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
