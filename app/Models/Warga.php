<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';

    protected $fillable = [
        'nama_warga',
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
        'status_perkawinan',
        'sumber_air_bersih',
        'penerangan_rumah',
        'luas_bangunan',
        'pengeluaran_bulanan',
        'jumlah_anggota_keluarga',
        'penghasilan',
        'tanggungan',
        'jenis_warga',
    ];
}
