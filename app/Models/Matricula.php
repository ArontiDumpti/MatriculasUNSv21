<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public function detalles()
    {
        return $this->hasMany(DetalleMatricula::class);
    }
}
