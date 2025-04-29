<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'nivel_acceso',
        'acceso_datos',
        'fecha_alta',
        'funciones',
    ];
} 