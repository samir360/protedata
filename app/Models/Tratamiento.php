<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = [
        'nombre',
        'fecha',
        'estado', // completo o incompleto
        'interesados',
        'tipo_datos',
    ];

    public function finalidades()
    {
        return $this->belongsToMany(Finalidad::class);
    }
} 