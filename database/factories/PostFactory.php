<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        // $category = [
        //     '1',
        //     '2',
        //     '3',
        //     '4',
        //     '5',
        // ];
        // $tag = [
        //     '1',
        //     '2',
        //     '3',
        //     '4',
        //     '5',
        // ];
        // $status = [
        //     'Public',
        //     'Privet',
        // ];

        // return [
        //     'category' => $this->faker->randomElement($category),
        //     'tag' => $this->faker->randomElement($tag),
        //     'status' => $this->faker->randomElement($status),
        //     'title' => "Creating a Searchable Select Box in Laravel with AJAX",
        //     'creator' => "Nayem",
        //     'summary' => $this->faker->paragraph(),
        //     'content' => $this->faker->paragraph(),
        //     'thumbnail' => $this->faker->imageUrl(200, 200),
        // ];
    }
}
