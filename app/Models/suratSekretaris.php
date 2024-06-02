<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratSekretaris extends Model
{
    use HasFactory;

    protected $table = 'surat_sekretaris';
    protected $primaryKey = 'arsipan_id';
    protected $fillable = [
        'instansi',
        'kegiatan',
        'file',
    ];

    public $timestamps = true;
}
