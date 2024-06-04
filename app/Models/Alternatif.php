<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif';

    protected $fillable  = [
        'id',
        'id_warga',
        'alternatif',
        'kondisi_rumah',
        'kelayakan',
        'status_pernikahan',
        'jumlah_anak',
        'jumlah_tanggungan',
        'umur_yang_bekerja',
        'phk',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
