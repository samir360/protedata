<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $fillable = [
        'razon_social',
        'cif_nif_pasaporte',
        'direccion',
        'cp',
        'localidad',
        'provincia',
        'email',
        'telefono',
        'responsable',
        'dni',
        'servicio',
        'duracion_servicio',
        'accede_datos',
        'tratamientos_relacionados',
        'subcontratacion_permitida',
        'notificacion_violacion',
        'es_grupo_empresarial',
        'destino_final_datos',
    ];
}
