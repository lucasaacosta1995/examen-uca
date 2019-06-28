<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Persona;
use App\Comision;
use App\Nota;
use App\EstadoAlumno;

class Alumno extends Model
{
    use SoftDeletes;

    protected $table = 'alumnos';



    public function persona()
    {
        return $this->hasOne('App\Persona', 'id', 'persona_id');
    }
    public function comision()
    {
        return $this->hasOne('App\Comision', 'id', 'comision_id');
    }
    public function nota()
    {
        return $this->hasOne('App\Nota', 'id', 'nota_id');
    }
    public function estado()
    {
        return $this->hasOne('App\EstadoAlumno', 'id', 'estado_id');
    }
}
