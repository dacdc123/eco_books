<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
     public function run()
     {
        $attributes = [
            ['attribute_name' => 'Nhà xuất bản', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_name' => 'Hình thức', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_name' => 'Năm xuất bản', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_name' => 'Kích thước', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_name' => 'Trọng lượng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_name' => 'Số trang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('attributes')->insert($attributes);
     }}
