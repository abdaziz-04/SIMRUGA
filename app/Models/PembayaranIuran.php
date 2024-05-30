<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranIuran extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'pembayaran_iuran';

    // Primary key
    protected $primaryKey = 'id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'id_kk',
        'id_iuran',
        'tanggal',
        'jumlah_pembayaran',
    ];

    /**
     * Get the warga that owns the pembayaran iuran.
     */
    public function kk()
    {
        return $this->belongsTo(KK::class, 'id_kk');
    }

    /**
     * Get the jenis iuran associated with the pembayaran iuran.
     */
    public function jenisIuran()
    {
        return $this->belongsTo(JenisIuran::class, 'id_iuran');
    }
}
