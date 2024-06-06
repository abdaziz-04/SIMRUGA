<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class RTScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // Dapatkan ID pengguna yang sedang login
        $userId = auth()->id();

        // Jika ID pengguna adalah 1, 2, atau 3, lewati filtering dan tampilkan semua data
        if (in_array($userId, [1, 2, 3, 4])) {
            return;
        }

        // Dapatkan ID RT dari user yang sedang login
        $rtId = auth()->user()->rt_id;

        // Lakukan filtering data warga berdasarkan RT yang login
        $builder->where('id_rt', $rtId);
    }
}
