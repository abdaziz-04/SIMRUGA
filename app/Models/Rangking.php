<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alternatif;
use App\Models\Warga;


class Rangking extends Model
{
    use HasFactory;

    protected $table = 'rangking';

    protected $fillable = [
        'alternatif_id',
        'moora_value',
        'rangking',
        'id_warga',
    ];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id');
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id');
    }
}
