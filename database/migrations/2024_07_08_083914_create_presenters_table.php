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
        Schema::create('presenters', function (Blueprint $table) {
            $table->id();

            $table->foreignId('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->text('Description');

            $table->foreignId('CongressID');
            $table->foreign('CongressID')->references('id')->on('congresses')->onDelete('cascade');


            $table->dateTime('StartDate');

            $table->dateTime('EndDate');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presenters');
    }
};
