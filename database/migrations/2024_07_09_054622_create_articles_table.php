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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');



            $table->foreignId('CongressID');
            $table->foreign('CongressID')->references('id')->on('congresses')->onDelete('cascade');

            $table->boolean('TypeID');

            $table->string('FullTitle');
            $table->string('ShortTitle');
            $table->string('FullTitle_fa');
            $table->string('ShortTitle_fa');


            $table->string('Tags');
            $table->string('Tags_fa');

           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
