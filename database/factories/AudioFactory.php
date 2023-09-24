<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Audio>
 */
class AudioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = [
            'Adventure',
            'Audio',
            'Technology',
            'Video',
            'Marketplace',
        ];
        $tag = [
            'Athlete',
            'Adventure',
            'Beach',
            'Dollar',
            'Bitcoin',
        ];
        $status = [
            'Public',
            'Privet',
        ];

        return [
            'category' => $this->faker->randomElement($category),
            'tag' => $this->faker->randomElement($tag),
            'status' => $this->faker->randomElement($status),
            'title' => "Creating a Searchable Select Box in Laravel with AJAX",
            'creator' => "Nayem",
            'summary' => $this->faker->paragraph(),
            'content' => $this->faker->paragraph(),
            'audio_url' => $this->faker->url,
            'embed_link' => $this->faker->url,
            'audio_file' => $this->faker->url,
            'thumbnail' => $this->faker->imageUrl(200, 200),
        ];
    }
}
