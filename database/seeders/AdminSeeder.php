<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            ['username' => 'admin', 'name'=>'Admin', 'password' => Hash::make('12345admin'),],
            ['username' => 'sekretaris', 'name' => 'Sekretaris', 'password' => Hash::make('12345')],
            ['username' => 'bendahara', 'name' => 'Bendahara', 'password' => Hash::make('12345')],
            ['username' => 'ketua_rw', 'name' => 'Ketua RW', 'password' => Hash::make('12345')],
            ['username' => 'ketua_rt', 'name' => 'Ketua RT', 'password' => Hash::make('12345')],
            ['username' => 'warga', 'name' => 'Warga', 'password' => Hash::make('12345')],
        ];
    
    
        // DB::table('users')->insert($data);
        foreach ($usersData as $userData) {
            // Create user
            $user = User::create($userData);

            // Assign role based on username
            switch ($userData['username']) {
                case 'admin':
                    $user->assignRole('admin');
                    break;
                case 'sekretaris':
                    $user->assignRole('sekretaris');
                    break;
                case 'bendahara':
                    $user->assignRole('bendahara');
                    break;
                case 'ketua_rw':
                    $user->assignRole('ketua_rw');
                    break;
                case 'ketua_rt':
                    $user->assignRole('ketua_rt');
                    break;
                case 'warga':
                    $user->assignRole('warga');
                    break;
            }
        }
    }
}