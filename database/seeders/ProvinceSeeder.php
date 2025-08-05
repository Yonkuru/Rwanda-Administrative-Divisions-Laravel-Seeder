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
            ['prv_name' => 'Kigali City'],
            ['prv_name' => 'Southern Province'],
            ['prv_name' => 'Western Province'],
            ['prv_name' => 'Northern Province'],
            ['prv_name' => 'Eastern Province'],
        ];

        foreach ($provinces as $province) {
            RwProvince::create($province);
        }
    }
}
