<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PermintaanLayanan extends Model
{
    use HasFactory;

    protected $table = 'permintaan_layanan';

    protected $fillable = ['user_id', 'Nama Pengaju', 'Tipe Layanan', 'status', 'deskripsi', 'catatan', 'berkas'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'string', // Cast 'status' as string
    ];

    /**
     * Get the user that owns the request service.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include requests that can be updated by the user.
     */
    public function scopeEditableByUser(Builder $query)
    {
        // Check if the user is not a sekretaris
        if (!auth()->user()->hasRole('sekretaris')) {
            return $query->where('user_id', auth()->id());
        }
        return $query;
    }

    protected static function boot()
    {
        parent::boot();

        // Set user_id dengan ID pengguna yang sedang login saat membuat instance baru dari model
        static::creating(function ($permintaanLayanan) {
            $permintaanLayanan->user_id = auth()->id();
        });
    }
}
