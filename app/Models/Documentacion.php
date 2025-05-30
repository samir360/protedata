<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
    protected $fillable = [
        'titulo',
        'categoria',
        'preguntas_respuestas',
        'contenido_modelo',
        'pdf_path',
    ];

    protected $casts = [
        'preguntas_respuestas' => 'array',
    ];
}
