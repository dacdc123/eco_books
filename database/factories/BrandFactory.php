<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Brand::class; // Liên kết với Model Brand

    public function definition()
    {
        return [
            'name' => $this->faker->company,  // Tạo tên thương hiệu giả lập
            // 'logo' => 'brands/default.png',   // Đường dẫn ảnh logo
        ];
    }
}
