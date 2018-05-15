<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
  protected $table='discapacidad';
  protected $primaryKey='Id_bene';
  protected $fillable=[
    'Id_bene','Discapacidad','Tipo_disca','Causa_discapacidad','hipertension','Rehabilitacion','Lugar_de_rehabilitacion',
    'Tipo_rehabilitacion','Apoyo_funcional','Requiere_apoyo_funcional'
  ];

}
