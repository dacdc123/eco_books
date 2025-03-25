<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Danh mục cấp 1 (chính)
        $categories = [
            'Văn học',
            'Khoa học - Kỹ thuật',
            'Kinh tế - Quản lý',
            'Tâm lý - Kỹ năng sống',
            'Thiếu nhi'
        ];

        $parentIds = [];

        foreach ($categories as $category) {
            $parentIds[$category] = Category::create([
                'name' => $category,
                'parent_id' => null,
                'status' => 1,
            ])->id;
        }

        // Danh mục con
        $subCategories = [
            'Văn học' => ['Tiểu thuyết', 'Truyện ngắn', 'Thơ ca', 'Kịch'],
            'Khoa học - Kỹ thuật' => ['Công nghệ thông tin​', 'Khoa học tự nhiên', 'Kỹ thuật cơ khí', 'Điện tử - Viễn thông'],
            'Kinh tế - Quản lý' => ['Quản trị kinh doanh', 'Marketing', 'Tài chính - Ngân hàng', 'Khởi nghiệp'],
            'Tâm lý - Kỹ năng sống' => [' Phát triển bản thân', ' Giao tiếp', 'Lãnh đạo', 'Tư duy sáng tạo'],
            'Thiếu nhi' => ['Truyện tranh', 'Sách giáo dục', 'Sách tô màu', 'Truyện cổ tích']
        ];

        foreach ($subCategories as $parent => $subs) {
            foreach ($subs as $sub) {
                Category::create([
                    'name' => $sub,
                    'parent_id' => $parentIds[$parent],
                    'status' => 1,
                ]);
            }
        }
    }
}
