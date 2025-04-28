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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('razon_social');
            $table->string('cif_nif_pasaporte');
            $table->string('direccion')->nullable();
            $table->string('cp')->nullable();
            $table->string('localidad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->string('responsable')->nullable();
            $table->string('dni')->nullable();
            $table->string('servicio');
            $table->string('duracion_servicio')->nullable();
            $table->boolean('accede_datos')->default(false);
            $table->string('tratamientos_relacionados')->nullable();
            $table->boolean('subcontratacion_permitida')->default(false);
            $table->boolean('notificacion_violacion')->default(false);
            $table->boolean('es_grupo_empresarial')->default(false);
            $table->string('destino_final_datos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceros');
    }
};
