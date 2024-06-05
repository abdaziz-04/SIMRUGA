<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alternatif;
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
        $this->call(KriteriaSeeder::class);
        $this->call(RtSeeder::class);
        $this->call(WargaSeeder::class);
        $this->call(JenisIuranSeeder::class);
        $this->call(PembayaranIuranSeeder::class);
        $this->call(PemasukanKeuanganSeeder::class);
        $this->call(PenerimaBansosSeeder::class);
        $this->call(LembagaPendukungSeeder::class);
        $this->call(pengurus_rwSeeder::class);
        $this->call(PengaduanSeeder::class);
        $this->call(PengeluaranKeuanganSeeder::class);
        $this->call(LaporanKeuanganSeeder::class);
        $this->call(AlternatifSeeder::class);
        // $this->call(SuratKematianSeeder::class);
        // $this->call(KegiatanRWSeeder::class);
        $this->call(KKSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(JadwalSeeder::class);
    }
}
