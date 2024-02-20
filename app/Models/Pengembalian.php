<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';

    public function anggota() {
        return $this->belongsTo(Buku::class, 'id_anggota', 'id');
    }
    public function buku() {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}
