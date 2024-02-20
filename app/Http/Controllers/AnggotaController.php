<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index() {
        $data = Anggota::all();
        return view('anggota.anggota', compact('data'));
    }

    public function create() {
        return view('anggota.tambah-anggota');
    }

    public function store(Request $request) {
        Anggota::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon
        ]);
        return redirect()->route('anggota');        
    }

    public function destroy(int $id) {
        Anggota::where('id', $id)->delete();
        return redirect()->route('anggota');
    }

    public function edit(int $id) {
        $data = Anggota::where('id', $id)->first();
        return view('anggota.edit-anggota', compact('data', 'id'));
    }

    public function update(Request $request, int $id) {
        Anggota::where('id', $id)->update([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon
        ]);
        return redirect()->route('anggota');
    }
}
