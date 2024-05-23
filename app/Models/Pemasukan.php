<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'pemasukan_keuangan';

    // Kolom yang dapat diisi
    protected $fillable = [
        'jenis_pemasukan',
        'tanggal',
        'jumlah_pemasukan',
        'keterangan',
        'id_pembayaran',
    ];

    /**
     * Relasi ke tabel pembayaran_iuran
     */
    public function pembayaranIuran()
    {
        return $this->belongsTo(PembayaranIuran::class, 'id_pembayaran');
    }
}
