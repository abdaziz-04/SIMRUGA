<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = "m_warga";
    protected $primaryKey = 'warga_id';
    public $timestamps = true; 
    protected $fillable = [
        'nama',
        'foto',
        'NIK',
        'rt_id',
        'alamat',
        'tanggal_lahir',
        'gaji', 
        'tanggungan',
        'jenis_kelamin',
        'pekerjaan',
    ];

    public function rt()
    {
        return $this->belongsTo(RT::class, 'rt_id', 'rt_id');
    }
}
