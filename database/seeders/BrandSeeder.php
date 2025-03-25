<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        // Thương hiệu gốc (Cấp 1)
        $brands = [
            'Fahasa',
            'Tiki Books',
            'Nhà sách Phương Nam',
            'Alpha Books',
            'First News - Trí Việt',
            'Đinh Tị Books',
            '1980 Books',
            'Minh Long Book',
            'Nhã Nam',
        ];

        $parentIds = [];

        foreach ($brands as $brand) {
            $parentIds[$brand] = Brand::create([
                'name' => $brand,
                'parent_id' => null,
            ])->id;
        }

       
    }
}

