<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TipoDocumento;

class Persona extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'apellido'
    ];

    protected $table = 'personas';

    public function tipoDocumento()
    {
        return $this->hasOne('App\TipoDocumento', 'id', 'tipo_documento_id');
    }

}
