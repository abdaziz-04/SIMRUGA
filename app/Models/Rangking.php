<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangking extends Model
{
    use HasFactory;

    protected $table = 'rangking';

    protected $fillable = [
        'alternatif_id',
        'moora_value',
        'rangking',
    ];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id');
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga', 'nama_warga', 'NIK', 'alamat', 'no_telepon', 'foto_warga');
    }
}
