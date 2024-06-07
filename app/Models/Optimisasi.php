<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optimisasi extends Model
{
    use HasFactory;
    protected $table = 'optimisasi';

    protected $fillable  = [
        'id',
        'alternatif',
        'kondisi_rumah',
        'kelayakan',
        'status_pernikahan',
        'jumlah_anak',
        'jumlah_tanggungan',
        'umur_yang_bekerja',
        'phk',
    ];
}
