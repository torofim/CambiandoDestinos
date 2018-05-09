<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='evaluacion';
    protected $fillable=[
    'Id','tipo_examen','puntuacion'
    ];

}
