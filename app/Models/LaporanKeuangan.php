<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'laporan_keuangan';

    // Primary key
    protected $primaryKey = 'id_laporan_keuangan';

    // Kolom yang dapat diisi
    protected $fillable = [
        'total_saldo',
        'id_pemasukan',
        'id_pengeluaran',
    ];

    /**
     * Relasi ke tabel pemasukan_keuangan
     */
    public function pemasukanKeuangan()
    {
        return $this->belongsTo(Pemasukan::class, 'id_pemasukan');
    }

    /**
     * Relasi ke tabel pengeluaran_keuangan
     */
    public function pengeluaranKeuangan()
    {
        return $this->belongsTo(Pengeluaran::class, 'id_pengeluaran');
    }
}