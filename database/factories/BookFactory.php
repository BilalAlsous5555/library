<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imgpath' => 'assets/uploads/products/default.png',
            'price' => rand(50, 500),
            'quantity' => rand(1, 30),
            'category' => fake()->word(),
            'name' => fake()->sentence(3),
        ];
    }
}
