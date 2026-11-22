<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'tanggal' => fake()->date(),
            'judul' => fake()->sentence(),
            'ringkasan' => fake()->paragraph(),
        ];
    }
}
