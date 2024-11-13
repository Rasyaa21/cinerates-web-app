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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->string('movie_desc');
            $table->date('release_date');
            $table->foreignId('movie_category_id')->constrained('movie_categories')->onDelete('cascade');
            $table->integer('like_count');
            $table->boolean('is_popular');
            $table->double('rating');
            $table->integer('screen_time');
            $table->foreignId('parental_guide_id')->constrained('parental_guides')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
