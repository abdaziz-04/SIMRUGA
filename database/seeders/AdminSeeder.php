<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['username' => 'admin', 'name'=>'Admin', 'password' => Hash::make('12345admin'),],
            ['username' => 'sekretaris', 'name' => 'Sekretaris', 'password' => Hash::make('12345')],
            ['username' => 'bendahara', 'name' => 'Bendahara', 'password' => Hash::make('12345')],
            ['username' => 'ketua_rw', 'name' => 'Ketua RW', 'password' => Hash::make('12345')],
            ['username' => 'ketua_rt', 'name' => 'Ketua RT', 'password' => Hash::make('12345')],
            ['username' => 'warga', 'name' => 'Warga', 'password' => Hash::make('12345')],
        ];
    
    
        DB::table('users')->insert($data);
    }
}
