<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogCategory;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlogCategorySeeder::class,
            // UserSeeder::class,
            AdminSeeder::class,
            TagSeeder::class,
            Admin_accountSeeder::class,
            PostSeeder::class,
            SettingSeeder::class,
            // CommentSeeder::class,
        ]);


    }
}
