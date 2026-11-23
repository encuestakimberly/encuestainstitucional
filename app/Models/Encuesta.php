<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encuesta extends Model
{
    //
    // use HasFactory;

     protected $fillable = [
        'anio',
        'estado',
    ];

     protected $cast = [
        'anio' => 'integer',
        'estado' => 'boolean',
    ];
    
    public function respuestas(): HasMany

    {
         return $this->hasMany(Respuesta::class);
    }
}

