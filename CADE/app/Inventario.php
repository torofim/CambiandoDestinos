<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $primaryKey='Id_inv';
    protected $table='inventario';
    protected $fillable=[
      'Nombre_producto','Cantidad','Funcionalidad','Tipo'
    ];
}
