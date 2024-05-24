<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'surat_pengantar';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_warga',
        'tujuan_surat',
    ];

    // Menentukan nama kolom primary key
    protected $primaryKey = 'id_surat_pengantar';

    // Mengatur relasi ke model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga', 'id_warga');
    }
}
