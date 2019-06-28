<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Curso;
use App\Catedra;
class Comision extends Model
{

    use SoftDeletes;

    protected $table = 'comisiones';

    public function curso()
    {
        return $this->hasOne('App\Curso', 'id', 'curso_id');
    }

    public function catedra()
    {
        return $this->hasOne('App\Catedra', 'id', 'catedra_id');
    }

}
