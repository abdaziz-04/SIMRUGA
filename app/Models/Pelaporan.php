<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporan_warga';

    protected $fillable = [
        'warga_id',
        'jenis_pelaporan',
        'keterangan',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id');
    }
}
