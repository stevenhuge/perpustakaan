<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    public function anggota() {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id');
    }
}
