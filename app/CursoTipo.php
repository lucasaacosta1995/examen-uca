<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CursoTipo extends Model
{
    use SoftDeletes;

    protected $table = 'curso_tipos';

}
