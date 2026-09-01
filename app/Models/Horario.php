<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
