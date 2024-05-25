<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional if following naming conventions)
    protected $table = 'jadwal';

    // Specify the primary key of the table (optional if 'id' is used)
    protected $primaryKey = 'id_pertemuan';

    // Indicate if the primary key is auto-incrementing (default is true)
    public $incrementing = true;

    // Specify the data type of the primary key (default is int)
    protected $keyType = 'int';

    // Indicate if the model should be timestamped (default is true)
    public $timestamps = true;

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'nama_pertemuan',
        'tanggal_pertemuan',
        'keterangan_jadwal',
        'pihak_terlibat',
    ];

    // Optionally, you can define any relationships here
    // For example, if Jadwal has many 'Participants'
    // public function participants()
    // {
    //     return $this->hasMany(Participant::class);
    // }
}
