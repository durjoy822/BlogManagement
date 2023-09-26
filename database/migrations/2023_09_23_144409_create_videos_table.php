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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->text('category_id');
            $table->text('title');
            $table->longText('summary')->nullable();
            $table->longText('content')->nullable();
            $table->text('tag');
            $table->text('video_url')->nullable();
            $table->text('provider')->nullable();
            $table->text('embed_link')->nullable();
            $table->text('video_file')->nullable();
            $table->text('thumbnail')->nullable();
            $table->string('status')->default('Public','Privet');
            $table->string('creator')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
