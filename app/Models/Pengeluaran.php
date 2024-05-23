<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'pengeluaran_keuangan';

    // Kolom yang dapat diisi
    protected $fillable = [
        'jenis_pengeluaran',
        'tanggal',
        'jumlah_pengeluaran',
        'keterangan',
    ];
}
