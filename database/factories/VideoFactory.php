<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Video::class;



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
        // $provider = [
        //     'Youtube',
        //     'Google',
        //     'Other',
        // ];
        // $status = [
        //     'Public',
        //     'Privet',
        // ];

        // return [
        //     'category' => $this->faker->randomElement($category),
        //     'tag' => $this->faker->randomElement($tag),
        //     'provider' => $this->faker->randomElement($provider),
        //     'status' => $this->faker->randomElement($status),
        //     'title' => "Creating a Searchable Select Box in Laravel with AJAX",
        //     'creator' => "Nayem",
        //     'summary' => $this->faker->paragraph(),
        //     'content' => $this->faker->paragraph(),
        //     'video_url' => $this->faker->url,
        //     'embed_link' => $this->faker->url,
        //     'video_file' => $this->faker->url,
        //     'thumbnail' => $this->faker->imageUrl(200, 200),
        // ];
    }
}
