<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaBansos extends Model
{
    use HasFactory;

    protected $table = 'PenerimaBansos'; // Menentukan nama tabel yang sesuai
    protected $primaryKey = 'warga_id'; // Menentukan nama primary key yang sesuai
    public $timestamps = true; 
    protected $fillable = [
        'gaji',
        'tanggungan',
        'tanggal_lahir',
    ];

    // Tambahkan method untuk mengambil data dari tabel m_warga dan menyesuaikan dengan format yang dibutuhkan
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'warga_id');
    }
}
