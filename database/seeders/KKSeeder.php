<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\KK;
use App\Models\Warga;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil contoh warga yang sudah ada
        $warga = Warga::first();

        if ($warga) {
            KK::create([
                'nama_kepala_keluarga' => 'John Doe',
                'no_kk' => '1234567890123456',
                'rt_rw' => '001/002',
                'alamat' => 'Jl. Kebon Jeruk No. 10',
            ]);
        }
    }
}
