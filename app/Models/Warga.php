<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Tentukan tabel yang terkait dengan model ini
    protected $table = 'warga';

    // Tentukan primary key dari tabel ini
    protected $primaryKey = 'id_warga';

    // Menentukan apakah primary key auto increment
    public $incrementing = true;

    // Menentukan tipe data primary key
    protected $keyType = 'int';

    // Menentukan apakah model ini memiliki timestamp
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        // Tambahkan atribut yang dapat diisi di sini
    ];

    // Definisikan relasi dengan model SuratTidakMampu
    public function suratTidakMampu()
    {
        return $this->hasMany(SuratTidakMampu::class, 'id_warga', 'id_warga');
    }
}
