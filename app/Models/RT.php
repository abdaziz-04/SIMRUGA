<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;

    protected $table = "m_r_t";
    protected $primaryKey = 'rt_id';
    public $timestamps = false;
    protected $fillable = [
        'nama_RT',
    ];

    public function warga()
    {
        return $this->hasMany(Warga::class, 'rt_id', 'rt_id');
    }
}
