<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'facebook_link' => 'https://www.facebook.com/durjoy822/',
            'facebook_icon' => '<i class="fa-brands fa-facebook"></i>',
            'twitter_link' => 'https://twitter.com/',
            'twitter_icon' => '<i class="fa-brands fa-square-x-twitter"></i>',
            'instagram_link' => 'https://www.instagram.com/nayem6959/',
            'instagram_icon' => '<i class="fa-brands fa-instagram"></i>',
            'youtube_link' => 'https://www.youtube.com/',
            'youtube_icon' => '<i class="fa-brands fa-youtube"></i>',
            'google_plus_link' => 'google plus',
            'google_plus_icon' => '<i class="fa-brands fa-google-plus-g"></i>',
            'copyright' => 'copyright,© 2023 - All Rights Reserved. Nr Durjoy',
            'dark_logo' => 'https://i.pinimg.com/originals/9d/e7/ba/9de7bab052526b28b8604708e602d463.jpg',
            'light_logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOun6sMStJ9RuMgqL5rd3ImsWLGSxu5fn81spmq9SAovwX25My_31iIdlzC0kg0dwKr24&usqp=CAU',
            'favicon' => 'https://cdn-icons-png.flaticon.com/512/3600/3600917.png',
        ]);
    }
}
