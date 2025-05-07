<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finalidad extends Model
{
    protected $fillable = ['nombre'];
    protected $table = 'finalidades';

    public function tratamientos()
    {
        return $this->belongsToMany(Tratamiento::class);
    }
} 