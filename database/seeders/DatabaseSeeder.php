<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ArsipanSurat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RT::class);
        $this->call(ArsipanSuratSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(kegiatan::class);
        $this->call(LevelSeeder::class);
        $this->call(WargaSeeder::class);
    }
}
