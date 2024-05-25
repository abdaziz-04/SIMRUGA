<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warga')->insert([
            [
                'nama_warga' => 'John Doe',
                'id_kk' => 2,
                'id_rt' => 1,
                'alamat' => 'John Doe',
                'alamat' => 'Jl. Merdeka No.1',
                'no_telepon' => '081234567890',
                'email' => 'johndoe@example.com',
                'NIK' => '1234567890123456',
                'tanggal_lahir' => '1980-01-01',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pegawai Swasta',
                'foto_warga' => 'https://example.com/photo1.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'status_perkawinan' => 'Kawin',
                'sumber_air_bersih' => 'PDAM',
                'penerangan_rumah' => 'Listrik PLN',
                'luas_bangunan' => '120',
                'pengeluaran_bulanan' => 5000000.00,
                'jumlah_anggota_keluarga' => '4',
                'penghasilan' => '7000000',
                'tanggungan' => '2',
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Sinsta',
                'id_kk' => 3,
                'id_rt' => 2,
                'alamat' => 'Jl. Kebangsaan No.10',
                'no_telepon' => '081234567891',
                'email' => 'janedoe@example.com',
                'NIK' => '1234567890123457',
                'tanggal_lahir' => '1990-02-02',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Guru',
                'foto_warga' => 'https://example.com/photo2.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Keluarga',
                'status_perkawinan' => 'Belum Kawin',
                'sumber_air_bersih' => 'Sumur',
                'penerangan_rumah' => 'Listrik PLN',
                'luas_bangunan' => '90',
                'pengeluaran_bulanan' => 3000000.00,
                'jumlah_anggota_keluarga' => '3',
                'penghasilan' => '5000000',
                'tanggungan' => '1',
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data warga di sini dengan URL foto yang berbeda
        ]);
    }
}
