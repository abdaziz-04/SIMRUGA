<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTidakMampu extends Model
{
    use HasFactory;

    // Tentukan tabel yang terkait dengan model ini
    protected $table = 'surat_tidak_mampu';

    // Tentukan primary key dari tabel ini
    protected $primaryKey = 'id_surat_tidak_mampu';

    // Menentukan apakah primary key auto increment
    public $incrementing = true;

    // Menentukan tipe data primary key
    protected $keyType = 'int';

    // Menentukan apakah model ini memiliki timestamp
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'id_warga',
    ];

    // Definisikan relasi dengan model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga', 'id_warga');
    }
}
