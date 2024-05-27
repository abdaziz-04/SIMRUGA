<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'warga';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_warga',
        'id_kk',
        'id_rt',
        'alamat',
        'no_telepon',
        'email',
        'NIK',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_kawin',
        'pekerjaan',
        'foto_warga',
        'transportasi',
        'status_kepemilikan_rumah',
        'sumber_air_bersih',
        'token_listrik',
        'luas_bangunan',
        'pengeluaran_bulanan',
        'jumlah_anggota_keluarga',
        'penghasilan',
        'tanggungan',
        'jenis_warga',
    ];
}
