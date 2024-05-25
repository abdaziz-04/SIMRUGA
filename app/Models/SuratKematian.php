<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKematian extends Model
{
    use HasFactory;

    // Tentukan tabel yang terkait dengan model ini
    protected $table = 'surat_kematian';

    // Tentukan primary key dari tabel ini
    protected $primaryKey = 'id_surat_kematian';

    // Menentukan apakah primary key auto increment
    public $incrementing = true;

    // Menentukan tipe data primary key
    protected $keyType = 'int';

    // Menentukan apakah model ini memiliki timestamp
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'id_warga',
        'waktu_kematian',
        'sebab_kematian',
        'tempat_kematian',
    ];

    // Definisikan relasi dengan model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga', 'id_warga');
    }
}
