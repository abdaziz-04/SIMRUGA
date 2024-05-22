<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengurusRWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengurus_RW')->insert([
            [
                'id_warga' => 1, // Sesuaikan dengan ID yang ada di tabel warga
                'nama_pengurus' => 'Ahmad Syahputra',
                'jabatan' => 'Ketua RW',
                'no_telepon' => '081234567890',
                'email' => 'ahmad@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_warga' => 2, // Sesuaikan dengan ID yang ada di tabel warga
                'nama_pengurus' => 'Siti Nurhaliza',
                'jabatan' => 'Bendahara RW',
                'no_telepon' => '081234567891',
                'email' => 'siti@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
                
        ]);
    }
}
