<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'name',
        'jumlah_buku',
        'tipe_buku',
        'penulis',
        'penerbit'
    ];
}
