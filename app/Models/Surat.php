<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'surat';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_surat',
    ];
}
