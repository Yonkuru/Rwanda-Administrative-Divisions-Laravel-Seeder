<?php

namespace Database\Seeders;

use App\Models\RwDistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['dst_id' => 101, 'dst_name' => 'NYARUGENGE', 'dst_province' => 1],
            ['dst_id' => 102, 'dst_name' => 'GASABO', 'dst_province' => 1],
            ['dst_id' => 103, 'dst_name' => 'KICUKIRO', 'dst_province' => 1],
            ['dst_id' => 201, 'dst_name' => 'NYANZA', 'dst_province' => 2],
            ['dst_id' => 202, 'dst_name' => 'GISAGARA', 'dst_province' => 2],
            ['dst_id' => 203, 'dst_name' => 'NYARUGURU', 'dst_province' => 2],
            ['dst_id' => 204, 'dst_name' => 'HUYE', 'dst_province' => 2],
            ['dst_id' => 205, 'dst_name' => 'NYAMAGABE', 'dst_province' => 2],
            ['dst_id' => 206, 'dst_name' => 'RUHANGO', 'dst_province' => 2],
            ['dst_id' => 207, 'dst_name' => 'MUHANGA', 'dst_province' => 2],
            ['dst_id' => 208, 'dst_name' => 'KAMONYI', 'dst_province' => 2],
            ['dst_id' => 301, 'dst_name' => 'KARONGI', 'dst_province' => 3],
            ['dst_id' => 302, 'dst_name' => 'RUTSIRO', 'dst_province' => 3],
            ['dst_id' => 303, 'dst_name' => 'RUBAVU', 'dst_province' => 3],
            ['dst_id' => 304, 'dst_name' => 'NYABIHU', 'dst_province' => 3],
            ['dst_id' => 305, 'dst_name' => 'NGORORERO', 'dst_province' => 3],
            ['dst_id' => 306, 'dst_name' => 'RUSIZI', 'dst_province' => 3],
            ['dst_id' => 307, 'dst_name' => 'NYAMASHEKE', 'dst_province' => 3],
            ['dst_id' => 401, 'dst_name' => 'RULINDO', 'dst_province' => 4],
            ['dst_id' => 402, 'dst_name' => 'GAKENKE', 'dst_province' => 4],
            ['dst_id' => 403, 'dst_name' => 'MUSANZE', 'dst_province' => 4],
            ['dst_id' => 404, 'dst_name' => 'BURERA', 'dst_province' => 4],
            ['dst_id' => 405, 'dst_name' => 'GICUMBI', 'dst_province' => 4],
            ['dst_id' => 501, 'dst_name' => 'RWAMAGANA', 'dst_province' => 5],
            ['dst_id' => 502, 'dst_name' => 'NYAGATARE', 'dst_province' => 5],
            ['dst_id' => 503, 'dst_name' => 'GATSIBO', 'dst_province' => 5],
            ['dst_id' => 504, 'dst_name' => 'KAYONZA', 'dst_province' => 5],
            ['dst_id' => 505, 'dst_name' => 'KIREHE', 'dst_province' => 5],
            ['dst_id' => 506, 'dst_name' => 'NGOMA', 'dst_province' => 5],
            ['dst_id' => 507, 'dst_name' => 'BUGESERA', 'dst_province' => 5],
        ];

        foreach ($districts as $district) {
            RwDistrict::create($district);
        }
    }
}
