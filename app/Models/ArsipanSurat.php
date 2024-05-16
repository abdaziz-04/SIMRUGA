<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipanSurat extends Model
{
    use HasFactory;
    protected $table = 'arsipan_surats';
    protected $primaryKey = 'arsipan_surat_id';
    protected $fillable = [
        'nomor_surat',
        'tanggal_surat',
        'perihal',
        'foto_surat',
    ];
    protected $dates = [
        'tanggal_surat',
    ];
    protected $casts = [
        'tanggal_surat' => 'datetime:Y-m-d',
    ];
}
