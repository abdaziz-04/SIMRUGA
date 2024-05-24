<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'pengumuman';

    // Kolom yang dapat diisi
    protected $fillable = [
        'gambar',
        'isi_pengumuman',
        'tanggal_pengumuman',
        'tempat_kematian',
    ];

    // Menentukan nama kolom primary key
    protected $primaryKey = 'id_pengumuman';
}
