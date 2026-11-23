<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Elocuent\Factories\HasFactory;
use Illuminate\Database\Elocuent\Relations\BelongsTo;


class Respuesta extends Model
{
    //

    protected $fillable = [
        'encuesta_id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
    ];

    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class);
    }
}
