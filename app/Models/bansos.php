<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bansos extends Model
{
    use HasFactory;
    protected $fillable = [
        'warga_id',
        'jenis_bantuan',
        'jumlah_bantuan',
        'tanggal_distribusi',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
