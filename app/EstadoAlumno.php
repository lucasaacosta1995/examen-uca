<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoAlumno extends Model
{
    use SoftDeletes;

    protected $table = 'estados_alumno';
}
