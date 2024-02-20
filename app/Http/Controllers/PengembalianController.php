<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index() {
        $data = Pengembalian::all();
        return view('pengembalian.pengembalian', compact('data'));
    }
    public function store(int $id) {
        $peminjaman = Peminjaman::where('id', $id)->first();
        Pengembalian::insert([
            'id_anggota'=>$peminjaman->id_anggota,
            'id_buku'=>$peminjaman->id_buku,
            'tanggal_kembali'=>Carbon::now(),
            'denda'=>0
        ]);

        Peminjaman::where('id', $id)->delete();

        return redirect()->route('list-pengembalian');
    }
}
