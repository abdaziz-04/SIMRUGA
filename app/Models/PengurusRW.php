<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusRW extends Model
{
    use HasFactory;

    protected $table = 'pengurus_RW'; // Specify the table name if it's different from the plural form of the model name

    protected $fillable = ['nama_pengurus', 'jabatan', 'no_telepon', 'id_warga']; // Define fillable fields
}
