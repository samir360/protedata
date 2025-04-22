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
        Schema::create('two_factor_authentications', function (Blueprint $table) {
            $table->id();
            $table->string('authenticatable_type', 125);
            $table->unsignedBigInteger('authenticatable_id');
            $table->string('shared_secret');
            $table->string('label');
            $table->string('issuer');
            $table->unsignedTinyInteger('digits')->default(6);
            $table->unsignedInteger('seconds')->default(30);
            $table->unsignedInteger('window')->default(0);
            $table->string('algorithm', 16)->default('sha1');
            $table->json('recovery_codes')->nullable();
            $table->timestamp('recovery_codes_generated_at')->nullable();
            $table->timestamp('enabled_at')->nullable();
            $table->timestamps();

            $table->index(['authenticatable_type', 'authenticatable_id'], 'two_factor_authenticatable_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('two_factor_authentications');
    }
};
