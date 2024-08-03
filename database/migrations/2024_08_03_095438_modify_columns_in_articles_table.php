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
        Schema::table('articles', function (Blueprint $table) {
            $table->text('FullTitle')->change();
            $table->text('ShortTitle')->change();
            $table->text('FullTitle_fa')->change();
            $table->text('ShortTitle_fa')->change();
            $table->text('Tags')->change();
            $table->text('Tags_fa')->change();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
