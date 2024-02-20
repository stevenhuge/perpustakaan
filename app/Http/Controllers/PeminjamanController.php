<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index() {
        $data = Peminjaman::all();
        return view('peminjaman.pinjam', compact('data'));
    }

    public function create() {
        $anggotas = Anggota::all();
        $bukus = Buku::all();
        return view('peminjaman.tambah-pinjam', compact('anggotas', 'bukus'));
    }

    public function store(Request $request) {
        Peminjaman::insert([
            'id_anggota'=>$request->id_anggota,
            'id_buku'=>$request->id_buku,
            'tanggal_pinjam'=>$request->tanggal_pinjam,
            'tanggal_kembali'=>$request->tanggal_kembali
        ]);

        return redirect()->route('peminjaman');
    }
}
