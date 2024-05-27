<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kepala_keluarga',
        'no_kk',
        'rt_rw',
        'alamat',
    ];

    public function warga()
    {
        return $this->hasMany(Warga::class, 'id', 'warga_id');
    }
}