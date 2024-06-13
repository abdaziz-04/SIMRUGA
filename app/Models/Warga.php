<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\RTScope;

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
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'foto_warga',
        'jenis_warga',
        'agama'
    ];

    // Filter warga berdasarkan roles user
    protected static function booted()
    {
        parent::booted();

        // static::addGlobalScope(new RTScope);
    }


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
        return $this->belongsTo(KK::class, 'id_kk');
    }

    /**
     * Get the RT that owns the warga.
     */
    public function rt()
    {
        return $this->belongsTo(RT::class, 'id_rt', 'id');
    }
}
