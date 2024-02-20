<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Buku
 *
 * @property int $id
 * @property string $name
 * @property int $jumlah_buku
 * @property string $tipe_buku
 * @property string $penulis
 * @property string $penerbit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Buku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku query()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereJumlahBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku wherePenerbit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku wherePenulis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereTipeBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
