<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';

    protected $fillable = [
        'id',
        'kriteria',
        'kode_kriteria',
        'bobot',
        'jenis',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
}
