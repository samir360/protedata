<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename('tratamiento_finalidad', 'finalidad_tratamiento');
    }

    public function down(): void
    {
        Schema::rename('finalidad_tratamiento', 'tratamiento_finalidad');
    }
}; 