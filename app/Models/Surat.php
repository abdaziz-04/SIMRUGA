<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
  
    // Tentukan tabel yang terkait dengan model ini
    protected $table = 'surat';

    // Tentukan primary key dari tabel ini
    protected $primaryKey = 'id_surat';

    // Menentukan apakah primary key auto increment
    public $incrementing = true;

    // Menentukan tipe data primary key
    protected $keyType = 'int';

    // Menentukan apakah model ini memiliki timestamp
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama_surat',
    ];
}
