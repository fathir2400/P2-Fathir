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

                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'telepon'=>'0812345678',
                'alamat'=>'bandung',
                'role'=>'admin',
                'password'=>bcrypt('123456'),
                'foto_profile'=>'logo01.png' 
            ],
            [
                'name'=>'supervisor',
                'email'=>'supervisor@gmail.com',
                'telepon'=>'0812345678',
                'alamat'=>'bandung',
                'role'=>'supervisor',
                'password'=>bcrypt('123456') ,
                'foto_profile'=>'logo01.png' 
                
            ],
            [
                'name'=>'petugas',
                'email'=>'petugas@gmail.com',
                'telepon'=>'0812345678',
                'alamat'=>'bandung',
                'role'=>'petugas',
                'password'=>bcrypt('123456') ,
                'foto_profile'=>'logo01.png' 
                
            ],
            [
                'name'=>'teknisi',
                'email'=>'teknisi@gmail.com',
                'telepon'=>'0812345678',
                'alamat'=>'bandung',
                'role'=>'teknisi',
                'password'=>bcrypt('123456'),
                'foto_profile'=>'logo01.png'  
                
            ],
            [
                'name'=>'pengguna',
                'email'=>'pengguna@gmail.com',
                'telepon'=>'0812345678',
                'alamat'=>'bandung',
                'role'=>'pengguna',
                'password'=>bcrypt('123456') ,
                'foto_profile'=>'logo01.png' 
                
            ],
        
            
            ];
            foreach($userData as $key => $val){
            User::create($val);
            }
    }
}
