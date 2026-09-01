<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'escuela_profesional', 'creditos', 'ciclo', 'estado',
    ];
}
