<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'kategori', 'slug', 'keterangan'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
}
