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
        Schema::create('article_files', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ArticleID');
            $table->foreign('ArticleID')->references('id')->on('articles')->onDelete('cascade');

            $table->string('FileType');

            $table->text('Description');

            $table->string('Location');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_files');
    }
};
