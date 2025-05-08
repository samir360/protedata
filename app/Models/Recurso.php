<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $fillable = [
        'servidores',
        'servidores_so',
        'pcs_sobremesa',
        'pcs_sobremesa_so',
        'portatiles',
        'portatiles_so',
        'impresoras_locales',
        'impresoras_red',
        'tipo_red',
        'software',
        'copias_seguridad_ubicacion',
        'copias_seguridad_frecuencia',
        'medidas_seguridad',
        'doc_papel_ubicacion',
        'camaras_vigilancia',
        'carteles_grabacion',
    ];
} 