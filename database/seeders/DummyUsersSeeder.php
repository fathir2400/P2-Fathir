<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'admin',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
            [
                'name' => 'supervisor',
                'email' => 'supervisor@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'supervisor',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'kasir',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
            [
                'name' => 'kitchen',  // perbaikan di sini
                'email' => 'kitchen@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'kitchen',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
            [
                'name' => 'waiters',
                'email' => 'waiters@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'waiters',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
            [
                'name' => 'pelanggan',
                'email' => 'pelanggan@gmail.com',
                'telepon' => '0812345678',
                'jenkel' => 'laki-laki',
                'role' => 'pelanggan',
                'password' => bcrypt('123456'),
                'outlet_id' => 1,
                'foto_profile' => 'logo01.png'
            ],
        ];

            foreach($userData as $key => $val){
            User::create($val);
            }
    }
}
