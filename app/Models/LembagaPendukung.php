<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaPendukung extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelaporan_warga_id',
        'nama',
        'alamat',
        // tambahkan kolom lain yang ingin Anda masukkan di sini
    ];

    // Hubungan dengan model lain, jika diperlukan
    public function pelaporans()
    {
        return $this->hasMany(Pelaporan::class);
    }
}
