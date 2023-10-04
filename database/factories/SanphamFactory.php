<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sanpham>
 */
class SanphamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->name(),
            'giatien'=>rand(80000,100000),
            'giamgia'=>rand(60000,70000),
            'id_loaisp'=>rand(1,5),
            'id_nhacc'=>rand(1,3),
            'mota'=> fake()->word(),
            'image'=> fake()->word().'.jpg',
            'donvi'=> fake()->word(),
        ];
    }
}
