<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleMatricula extends Model
{
    protected $table = 'detalle_matricula';

    public function matricula()
    {
        return $this->belongsTo(Matricula::class);
    }

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
