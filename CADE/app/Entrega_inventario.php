<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega_inventario extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='entregas_inventario';
    protected $fillable=[
    'Id_inv','Id_bene','Nombre_bene','Articulo_entregado','Cantidad','Tipo','Fecha_entrega','Notas'
    ];
}
