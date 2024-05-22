<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengajuanSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data dummy untuk tabel 'pengajuan_surat'
        $pengajuanSurat = [
            [
                'id_surat' => 1, // Sesuaikan dengan ID yang ada di tabel surat
                'nama_warga' => 'John Doe',
                'NIK' => '1234567890123456',
                'keterangan' => 'Permohonan Surat Keterangan Usaha',
                'tanggal_pengajuan' => Carbon::now()->subDays(5),
                'status' => 'Menunggu Persetujuan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_surat' => 2, // Sesuaikan dengan ID yang ada di tabel surat
                'nama_warga' => 'Sinta',
                'NIK' => '9876543210987654',
                'keterangan' => 'Permohonan Surat Keterangan Domisili',
                'tanggal_pengajuan' => Carbon::now()->subDays(3),
                'status' => 'Disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data pengajuan surat lainnya sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel 'pengajuan_surat'
        DB::table('pengajuan_surat')->insert($pengajuanSurat);
    }
}
