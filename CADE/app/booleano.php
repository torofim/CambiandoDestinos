<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booleano extends Model
{
      protected $primaryKey='Id_bene';
      protected $table='estatus';
      protected $fillable=[
      'Id_bene','Jubilado','Servicio_medico','Imss','Isste','Seguro_popular','Pensiones','Ichisal','Dispensario','Bano_diario','Convivencia_animal'
      ];
}
