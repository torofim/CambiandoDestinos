<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='evaluacion';
    protected $fillable=[
    'Id_bene','tipo_examen','puntuacion'
    ];

}
