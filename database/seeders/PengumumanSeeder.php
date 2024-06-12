<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeding data example
        Pengumuman::create([
            'gambar' => 'image1.jpg',
            'nama_pengumuman' => 'Kerja Bakti',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Kami mengundang seluruh warga untuk ikut serta dalam kegiatan Kerja Bakti bersih-bersih lingkungan yang akan dilaksanakan pada hari Minggu, 16 Juni 2024. 
                                Kegiatan ini akan dimulai pukul 07.00 WIB. 
                                Diharapkan kehadiran seluruh warga untuk menjaga kebersihan dan keindahan lingkungan kita bersama.
',
            'tanggal_pengumuman' => '2024-06-16',
        ]);

        Pengumuman::create([
            'gambar' => 'image2.jpg',
            'nama_pengumuman' => 'Rapat Koordinasi RW 8',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Diharapkan kehadirannya dalam rapat koordinasi RW yang akan dilaksanakan pada hari Sabtu, 22 Juni 2024, pukul 19.00 WIB di Balai RW.   
                                Agenda rapat meliputi pembahasan program kerja dan evaluasi kegiatan RW 8. Mohon hadir tepat waktu.
',
            'tanggal_pengumuman' => '2024-06-22',
        ]);

        Pengumuman::create([
            'gambar' => 'image3.jpg',
            'nama_pengumuman' => 'Lomba Kebersihan antar RT',
            'isi_pengumuman' => 'Dalam rangka memperingati Hari Kemerdekaan Indonesia, akan diadakan lomba kebersihan antar RT di lingkungan RW 8. 
                                Lomba ini akan berlangsung mulai tanggal 1 Juli hingga 14 Agustus 2024. 
                                Penilaian kebersihan akan dilakukan oleh tim panitia desa. Mari kita jaga kebersihan lingkungan dan menangkan hadiah menarik!',
            'tanggal_pengumuman' => '2024-06-30',
        ]);

        Pengumuman::create([
            'gambar' => 'image4.jpg',
            'nama_pengumuman' => 'Senam Pagi',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Mari kita sehat bersama dengan mengikuti kegiatan senam pagi yang akan diadakan setiap hari Minggu pukul 06.00 WIB di lapangan RW 8. 
                                Kegiatan ini dimulai pada tanggal 23 Juni 2024. Jangan lupa membawa alas senam dan air minum. Semangat sehat, salam olah raga!',
            'tanggal_pengumuman' => '2024-06-23',
        ]);

        Pengumuman::create([
            'gambar' => 'image5.jpg',
            'nama_pengumuman' => 'Posyandu Balita dan Lansia',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Jangan lupa membawa balita dan lansia untuk menghadiri Posyandu yang akan diadakan pada tanggal 5 Juli 2024 di Balai RW 8. 
                                Kegiatan ini akan dimulai pukul 08.00 WIB. Tersedia layanan kesehatan dan pemberian vitamin gratis. Ayo, jaga kesehatan keluarga kita!',
            'tanggal_pengumuman' => '2024-07-05',
        ]);

        Pengumuman::create([
            'gambar' => 'image6.jpg',
            'nama_pengumuman' => 'Posyandu Balita dan Lansia',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Jangan lupa membawa balita dan lansia untuk menghadiri Posyandu yang akan diadakan pada tanggal 5 Juli 2024 di Balai RW 8. 
                                Kegiatan ini akan dimulai pukul 08.00 WIB. Tersedia layanan kesehatan dan pemberian vitamin gratis. Ayo, jaga kesehatan keluarga kita!',
            'tanggal_pengumuman' => '2024-07-05',
        ]);

        Pengumuman::create([
            'gambar' => 'image7.jpg',
            'nama_pengumuman' => 'HUT RI',
            'isi_pengumuman' => 'Kepada seluruh warga RW 8,
                                Dalam rangka memeriahkan HUT Republik Indonesia yang ke-79, akan diadakan Pesta Rakyat pada tanggal 17 Agustus 2024 di lapangan RW 8. 
                                Berbagai acara menarik seperti lomba-lomba tradisional, pentas seni, dan pesta kuliner akan memeriahkan acara ini. Jangan sampai ketinggalan, mari kita rayakan bersama-sama!',
            'tanggal_pengumuman' => '2024-08-17',
        ]);
    }
}