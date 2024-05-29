<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk menghindari konflik

        DB::table('rt')->insert([
            [
                'nama_rt' => 'RT 01',
                'alamat' => 'Jalan Mawar No. 1',
                'jumlah_anggota' => 25,
                'ketua_rt' => 'Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 02',
                'alamat' => 'Jalan Melati No. 2',
                'jumlah_anggota' => 30,
                'ketua_rt' => 'Andi Wijaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 03',
                'alamat' => 'Jalan Kamboja No. 3',
                'jumlah_anggota' => 20,
                'ketua_rt' => 'Siti Aminah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 04',
                'alamat' => 'Jalan Anggrek No. 4',
                'jumlah_anggota' => 22,
                'ketua_rt' => 'Dedi Supriyadi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 05',
                'alamat' => 'Jalan Kenanga No. 5',
                'jumlah_anggota' => 28,
                'ketua_rt' => 'Sri Mulyani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 06',
                'alamat' => 'Jalan Dahlia No. 6',
                'jumlah_anggota' => 24,
                'ketua_rt' => 'Teguh Prasetyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 07',
                'alamat' => 'Jalan Teratai No. 7',
                'jumlah_anggota' => 29,
                'ketua_rt' => 'Nurul Huda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 08',
                'alamat' => 'Jalan Kamboja No. 8',
                'jumlah_anggota' => 26,
                'ketua_rt' => 'Wawan Setiawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 09',
                'alamat' => 'Jalan Melur No. 9',
                'jumlah_anggota' => 27,
                'ketua_rt' => 'Lisa Mardiana',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 10',
                'alamat' => 'Jalan Tulip No. 10',
                'jumlah_anggota' => 23,
                'ketua_rt' => 'Agus Susanto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rt' => 'RT 11',
                'alamat' => 'Jalan Flamboyan No. 11',
                'jumlah_anggota' => 31,
                'ketua_rt' => 'Indah Sari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
       
            
          
      
         
        ]);
    }
}
