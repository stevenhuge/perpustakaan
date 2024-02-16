<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/add', [BukuController::class, 'tambah'])->name('tambah');
Route::post('/buku', [BukuController::class, 'store'])->name('store');
Route::get('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('destroy');
Route::get('/buku/{id}', [BukuController::class, 'edit'])->name('edit');
Route::post('/buku/{id}', [BukuController::class, 'update'])->name('update');