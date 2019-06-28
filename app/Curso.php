<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Facultad;
class Curso extends Model
{
    //
    use SoftDeletes;

    protected $table = 'cursos';

    public function facultad()
    {
        return $this->hasOne('App\Facultad', 'id', 'facultad_id');
    }

    public function comisiones()
    {
        return $this->hasMany('App\Comision', 'curso_id', 'id');
    }

}
