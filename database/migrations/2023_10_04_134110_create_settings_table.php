<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_link')->nullable();
            $table->string('facebook_icon')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('twitter_icon')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('instagram_icon')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('youtube_icon')->nullable();
            $table->string('google_plus_link')->nullable();
            $table->string('google_plus_icon')->nullable();
            $table->string('copyright')->nullable();
            $table->string('dark_logo')->nullable();
            $table->string('light_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
