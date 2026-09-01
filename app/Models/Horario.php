<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'seccion_id', 'dia_semana', 'hora_inicio', 'hora_fin', 'aula',
    ];

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
