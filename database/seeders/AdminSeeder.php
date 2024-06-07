<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            ['username' => 'admin', 'name' => 'Admin', 'password' => '12345admin'],
            ['username' => 'sekretaris', 'name' => 'Sekretaris', 'password' => '12345'],
            ['username' => 'bendahara', 'name' => 'Bendahara', 'password' => '12345'],
            ['username' => 'ketua_rw', 'name' => 'Ketua RW', 'password' => '12345'],
            ['rt_id' => 1, 'username' => 'ketua_rt1', 'name' => 'Ketua RT 1', 'password' => '12345'],
            ['rt_id' => 2, 'username' => 'ketua_rt2',  'name' => 'Ketua RT 2', 'password' => '12345'],
            ['rt_id' => 3, 'username' => 'ketua_rt3', 'name' => 'Ketua RT 3', 'password' => '12345'],
            ['username' => 'warga', 'name' => 'Warga', 'password' => '12345'],
            ['username' => 'abdaziz', 'name' => 'Abdul Aziz', 'password' => '12345'],
        ];

        foreach ($usersData as $userData) {
            // Check if the user already exists
            $user = User::firstOrCreate(
                ['username' => $userData['username']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make($userData['password']),
                    'rt_id' => $userData['rt_id'] ?? null,
                ]
            );

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
                case 'ketua_rt1':
                    $user->assignRole('ketua_rt1');
                    break;
                case 'ketua_rt2':
                    $user->assignRole('ketua_rt2');
                    break;
                case 'ketua_rt3':
                    $user->assignRole('ketua_rt3');
                    break;
                case 'warga':
                    $user->assignRole('warga');
                    break;
                case 'abdaziz':
                    $user->assignRole('warga');
                    break;
            }
        }
    }
}
