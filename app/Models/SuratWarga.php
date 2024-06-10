<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratWarga extends Model
{
    use HasFactory;

    protected $table = 'surat_warga';
    protected $primaryKey = 'surat_id';
    protected $fillable=[
        'id_warga',
        'jenis_surat',
        'tujuan_surat',
        'nama_alm',
        'NIK_alm',
        'tanggal_lahir_alm',
        'jenis_kelamin_alm',
        'alamat_alm',
        'usia_alm',
        'waktu_kematian_alm',
        'sebab_kematian_alm',
        'tempat_kematian_alm',
        'nama_warga',
        'alamat',
        'NIK',
        'jenis_kelamin',
    ];

    public $timestamps = true;

    public function warga()
    {
        return $this->hasMany(warga::class,'id_Warga');
    }
}
