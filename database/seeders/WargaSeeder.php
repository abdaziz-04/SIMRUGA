<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'rt_id' => 1,
                'nama' => 'John Doe',
                'foto' => 'https://example.com/photo.jpg',
                'NIK' => '1234567890123456',
                'alamat' => 'Jl. Contoh No. 123',
                'tanggal_lahir' => '1990-01-01',
                'gaji' => '5000000',
                'tanggungan' => '2',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Pegawai Swasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 2,
                'nama' => 'Jane Doe',
                'foto' => 'https://example.com/photo2.jpg',
                'NIK' => '9876543210987654',
                'alamat' => 'Jl. Contoh No. 456',
                'tanggal_lahir' => '1985-05-15',
                'gaji' => '3000000',
                'tanggungan' => '3',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Wiraswasta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 3,
                'nama' => 'Michael Johnson',
                'foto' => 'https://example.com/photo3.jpg',
                'NIK' => '0987654321098765',
                'alamat' => 'Jl. Contoh No. 789',
                'tanggal_lahir' => '1988-09-20',
                'gaji' => '4000000',
                'tanggungan' => '1',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'PNS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 4,
                'nama' => 'Emma Smith',
                'foto' => 'https://example.com/photo4.jpg',
                'NIK' => '5678901234567890',
                'alamat' => 'Jl. Contoh No. 1011',
                'tanggal_lahir' => '1995-03-12',
                'gaji' => '6000000',
                'tanggungan' => '2',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 5,
                'nama' => 'Christopher Lee',
                'foto' => 'https://example.com/photo5.jpg',
                'NIK' => '2345678901234567',
                'alamat' => 'Jl. Contoh No. 1213',
                'tanggal_lahir' => '1976-11-25',
                'gaji' => '7000000',
                'tanggungan' => '3',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 6,
                'nama' => 'Maria Rodriguez',
                'foto' => 'https://example.com/photo6.jpg',
                'NIK' => '3456789012345678',
                'alamat' => 'Jl. Contoh No. 1415',
                'tanggal_lahir' => '1983-07-18',
                'gaji' => '4500000',
                'tanggungan' => '2',
                'jenis_kelamin' => 'Perempuan',
                'pekerjaan' => 'Dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rt_id' => 7,
                'nama' => 'Daniel Brown',
                'foto' => 'https://example.com/photo7.jpg',
                'NIK' => '4567890123456789',
                'alamat' => 'Jl. Contoh No. 1617',
                'tanggal_lahir' => '1992-02-08',
                'gaji' => '5500000',
                'tanggungan' => '1',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Arsitek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('m_warga')->insert($data);
    }
}