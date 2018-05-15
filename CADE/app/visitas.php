<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitas extends Model
{
    //
    protected $PrimaryKey='Id';
    protected $table='visitas';
    protected $fillable=[
    'Id_bene','Nombre_b','Nombre','Domicilio','Fecha','Tipo_de_visita','Notas'
    ];
}
