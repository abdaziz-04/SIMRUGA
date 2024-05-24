<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ArsipanSurat;
use App\Models\LembagaPendukung;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        $this->call(PermissionSeeder::class);
        $this->call(ArsipanSuratSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(LevelSeeder::class);
        $this->call(RtSeeder::class);
        $this->call(WargaSeeder::class);
        $this->call(JenisIuranSeeder::class);
        $this->call(PembayaranIuranSeeder::class);
        $this->call(PemasukanKeuanganSeeder::class);
        $this->call(PenerimaBansosSeeder::class);
        $this->call(PengaduanSeeder::class);
        $this->call(PengurusRWSeeder::class);
        $this->call(PengeluaranKeuanganSeeder::class);
        $this->call(SuratTidakMampuSeeder::class);
        $this->call(SuratKematianSeeder::class);
        $this->call(KegiatanRWSeeder::class);
    }
}
