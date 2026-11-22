<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Home>
 */
class HomeFactory extends Factory
{
    protected $model = Home::class;

    public function definition(): array
    {
        return [
            'greeting' => 'Welcome to My Personal Portfolio',
            'description' => fake()->sentence(15),
            'about_title' => 'Information About Me',
            'about_description' => 'Getting to know a bit about me.',
            'contact_title' => 'My Contact Information',
            'contact_description' => 'Let’s be friends and connect.',
        ];
    }
}
