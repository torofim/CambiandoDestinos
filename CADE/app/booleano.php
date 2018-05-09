<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booleano extends Model
{
      protected $primaryKey='Id';
      protected $table='estatus';
      protected $fillable=[
      'Id','Jubilado','Servicio_medico','Bano_diario','Convivencia_animal'
      ];
}
