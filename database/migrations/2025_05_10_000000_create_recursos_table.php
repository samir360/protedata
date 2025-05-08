<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->integer('servidores')->nullable();
            $table->string('servidores_so')->nullable();
            $table->integer('pcs_sobremesa')->nullable();
            $table->string('pcs_sobremesa_so')->nullable();
            $table->integer('portatiles')->nullable();
            $table->string('portatiles_so')->nullable();
            $table->integer('impresoras_locales')->nullable();
            $table->integer('impresoras_red')->nullable();
            $table->string('tipo_red')->nullable();
            $table->string('software')->nullable();
            $table->string('copias_seguridad_ubicacion')->nullable();
            $table->string('copias_seguridad_frecuencia')->nullable();
            $table->string('medidas_seguridad')->nullable();
            $table->string('doc_papel_ubicacion')->nullable();
            $table->boolean('camaras_vigilancia')->nullable();
            $table->boolean('carteles_grabacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
}; 