<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settingData = [
            [

                'nama'=>'honda',
                'email'=>'honda@gmail.com',
                'alamat'=>'bandung',
                'telepon'=>'0812345678',
                'logo'=>'logo01.png' 
            ],
            
        
            
            ];
            foreach($settingData as $key => $val){
            Setting::create($val);
            }
    }
}
