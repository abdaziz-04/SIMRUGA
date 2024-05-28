<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'warga';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kk',
        'id_rt',
        'nama_warga',
        'alamat',
        'no_telepon',
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
        'pengeluaran_bulanan',
        'jumlah_anggota_keluarga',
        'penghasilan',
        'tanggungan',
        'jenis_warga',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'pengeluaran_bulanan' => 'decimal:2',
    ];

    /**
     * Get the kartu keluarga that owns the warga.
     */
    public function kartuKeluarga()
    {
        return $this->belongsTo(KartuKeluarga::class, 'id_kk');
    }

    /**
     * Get the RT that owns the warga.
     */
    public function rt()
    {
        return $this->belongsTo(RT::class, 'id_rt');
    }
}
