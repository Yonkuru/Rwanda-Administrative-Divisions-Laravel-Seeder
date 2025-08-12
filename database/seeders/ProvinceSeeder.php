<?php

namespace Database\Seeders;

use App\Models\RwProvince;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['prv_name' => 'Kigali'],
            ['prv_name' => 'South'],
            ['prv_name' => 'West'],
            ['prv_name' => 'North'],
            ['prv_name' => 'East'],
        ];

        foreach ($provinces as $province) {
            RwProvince::create($province);
        }
    }
}
