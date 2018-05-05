<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='inventario';
    protected $fillable=[
      'Nombre_producto','Cantidad','Funcionalidad',
    ];
}
