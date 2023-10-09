<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->title(),
            'content' => fake()->text(),
            'image' => fake()->imageUrl(),
            'categories_id' => random_int(1,10),
            'sub_categories_id' => random_int(1,3),
        ];
    }
}
