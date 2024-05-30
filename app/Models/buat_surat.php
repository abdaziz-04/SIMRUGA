<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buat_surat extends Model
{
    use HasFactory;
    protected $table = 'buat_surat';
    protected $primaryKey = 'surat_id';
    protected $fillable = [
        'warga_id',
        'jenis_surat',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
    
    // public function suratKematian()
    // {
    //     return $this->belongsTo(surat_kematian::class, 'kematian_id');
    // }

    // public function suratPengantar()
    // {
    //     return $this->belongsTo(surat_pengantar::class, 'pengantar_id');
    // }

    // public function suratTidakMampu()
    // {
    //     return $this->belongsTo(SuratTidakMampu::class, 'id');
    // }
}
