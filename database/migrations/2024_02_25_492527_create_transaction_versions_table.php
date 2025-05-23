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
        Schema::create('transaction_versions', function (Blueprint $table) {
            $table->increments('version_id');
            $table->string('versionable_id', 100);
            $table->string('versionable_type', 100);
            $table->string('user_id')->nullable();
            $table->longText('model_data');
            $table->string('reason', 100)->nullable();
            $table->index('versionable_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_versions');
    }
};
