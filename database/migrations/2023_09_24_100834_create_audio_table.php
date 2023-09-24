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
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('summary')->nullable();
            $table->longText('content')->nullable();
            $table->text('category');
            $table->text('tag');
            $table->text('audio_url')->nullable();
            $table->text('embed_link')->nullable();
            $table->text('audio_file')->nullable();
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
        Schema::dropIfExists('audio');
    }
};
