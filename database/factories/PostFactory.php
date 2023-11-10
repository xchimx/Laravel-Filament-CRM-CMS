<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thumbnail' => fake()->imageUrl(1000, 200, 'animals', true),
            'title' => fake()->sentence(),
            'color' => fake()->safeHexColor(),
            'slug' => fake()->slug(),
            'category_id' => fake()->randomDigitNotNull(),
            'content' => fake()->text(),
            'tags' => fake()->words(5),
            'published' => fake()->boolean(chanceOfGettingTrue: 50)
        ];
    }
}
