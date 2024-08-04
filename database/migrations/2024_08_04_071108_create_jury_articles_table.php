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
        Schema::create('jury_articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('ArticleID');
            $table->foreign('ArticleID')->references('id')->on('articles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jury_articles');
    }
};
