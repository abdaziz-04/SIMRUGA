<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;

    protected $table = "rt";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nama_rt',
        'alamat',
        'ketua_rt',
        'jumlah_anggota',
    ];

    public function warga()
    {
        return $this->hasMany(Warga::class, 'id', 'id');
    }
}
