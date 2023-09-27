<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = BlogCategory::class;

     public function definition(): array
    {
        $BlogCategory = [
            'Adventure',
            'News',
            'Technology',
            'Sport',
            'Audio',
            'Video',

        ];
        return [
            'name'=> $this->faker->unique()->randomElement($BlogCategory),
            'image'=> $this->faker->imageUrl(200, 200),

        ];
    }
}
