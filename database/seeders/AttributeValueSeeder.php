<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributeValues = [
            //Nhà xuất bản
            ['attribute_id' => 1, 'value_name' => 'NXB Trẻ', 'note' => 'NXB Trẻ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 1, 'value_name' => 'NXB Kim Đồng', 'note' => 'NXB Kim Đồng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 1, 'value_name' => 'NXB Lao Động', 'note' => 'NXB Lao Động', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Hình thức
            ['attribute_id' => 2, 'value_name' => 'Bìa cứng', 'note' => 'Bìa cứng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 2, 'value_name' => 'Bìa mềm', 'note' => 'Bìa mềm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 2, 'value_name' => 'Sách điện tử', 'note' => 'Sách điện tử', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Năm xuất bản
            ['attribute_id' => 3, 'value_name' => '2023', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 3, 'value_name' => '2022', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 3, 'value_name' => '2021', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Kích thước
            ['attribute_id' => 4, 'value_name' => '13cm x 20cm', 'note' => '13cm x 20cm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 4, 'value_name' => '16cm x 24cm', 'note' => '16cm x 24cm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 4, 'value_name' => '20cm x 30cm', 'note' => '20cm x 30cm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Trọng lượng
            ['attribute_id' => 5, 'value_name' => '200g', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 5, 'value_name' => '300g', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 5, 'value_name' => '500g', 'note' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            //  Số trang
            ['attribute_id' => 6, 'value_name' => 'Dưới 100 trang', 'note' => 'Nhỏ gọn', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 6, 'value_name' => '100 - 300 trang', 'note' => 'Vừa phải', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['attribute_id' => 6, 'value_name' => 'Trên 300 trang', 'note' => 'Lớn', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('attribute_values')->insert($attributeValues);
    }
}
