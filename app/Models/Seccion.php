<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $fillable = [
        'curso_id', 'docente_id', 'tipo', 'grupo', 'cupo_maximo', 'estado',
    ];

    protected $table = 'secciones'; 

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    public function detallesMatricula()
    {
        return $this->hasMany(DetalleMatricula::class);
    }
}
