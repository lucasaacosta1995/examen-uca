<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Catedra extends Model
{
    use SoftDeletes;

    protected $table = 'catedras';

}
