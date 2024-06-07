<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaPendukung extends Model
{
    use HasFactory;

    protected $table = "lembaga_pendukung";

    protected $fillable = [
        'pelaporan_warga_id',
        'nama_lembaga',
        'kontak_lembaga',
        'deskripsi_lembaga'
        // tambahkan kolom lain yang ingin Anda masukkan di sini
    ];

    // Hubungan dengan model lain, jika diperlukan
    // public function pelaporans()
    // {
    //     return $this->hasMany(Pelaporan::class);
    // }

    public function whatsappLink()
    {
        return "https://wa.me/{$this->kontak_lembaga}?text=Lapor dari aplikasi kami";
    }
}
