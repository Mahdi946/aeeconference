<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Family');
            $table->string('Name_fa');
            $table->string('Family_fa');
            $table->string('FatherName')->nullable();
            $table->bigInteger('BirthCert',NULL,true)->unique()->nullable();
            $table->bigInteger('NationalCode',NULL,true)->unique()->nullable();
            $table->date('BirthDay')->nullable();
            $table->bigInteger('MobileNumber');
            $table->bigInteger('PhoneNumber');
            $table->string('Email')->unique();
            $table->string('Field');
            $table->string('Edu');
            $table->string('Job')->nullable();
            $table->text('Address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->string('City');
            $table->string('City_fa');
            $table->string('Country');
            $table->string('Rank');
            $table->text('Org');
            $table->text('Org_fa');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE users MODIFY BirthCert  BIGINT(10) UNSIGNED ZEROFILL  NULL');

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
