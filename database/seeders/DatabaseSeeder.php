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
        $this->call(KKSeeder::class);
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
        $this->call(pengurus_rwSeeder::class);
        $this->call(PengeluaranKeuanganSeeder::class);
        $this->call(LaporanKeuanganSeeder::class);
        $this->call(SuratTidakMampuSeeder::class);
        $this->call(SuratKematianSeeder::class);
        $this->call(KegiatanRWSeeder::class);
        $this->call(KKSeeder::class);
        $this->call(LembagaPendukungSeeder::class);
<<<<<<< HEAD
<<<<<<< HEAD


        $this->call(JadwalSeeder::class);

=======
        $this->call(JadwalSeeder::class);
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4
=======
        $this->call(JadwalSeeder::class);
>>>>>>> 834e1d200cda416a8370b69160a6ad88645c81b4
    }
}
