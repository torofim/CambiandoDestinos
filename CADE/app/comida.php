<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    //
    protected $PrimaryKey='Id';
    protected $table='tabla_comida';
    protected $fillable=[
      'Id_bene','Nombre','Domicilio','Fecha','Nota'
    ];
}
