<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index() {
        $data = Buku::all();
        return view('buku', compact('data'));
    }

    public function tambah() {
        return view('tambah');
    }

    public function store(Request $request) {
        Buku::create([
            'name'=>$request->name,
            'jumlah_buku'=>$request->jumlah_buku,
            'tipe_buku'=>$request->tipe_buku,
            'penulis'=>$request->penulis,
            'penerbit'=>$request->penerbit
        ]);
        return redirect()->route('buku');
    }

    public function destroy(int $id) {
        Buku::where('id', $id)->delete();
        return redirect()->route('buku');
    }

    public function edit(int $id) {
        $data = Buku::where('id', $id)->first();
        return view('edit', compact('data', 'id'));
    }

    public function update(Request $request, int $id) {
        Buku::where('id', $id)->update([
            'name'=>$request->name,
            'jumlah_buku'=>$request->jumlah_buku,
            'tipe_buku'=>$request->tipe_buku,
            'penulis'=>$request->penulis,
            'penerbit'=>$request->penerbit
        ]);
      return redirect()->route('buku');
    }
}
