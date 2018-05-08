<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
  protected $table='discapacidad';
  protected $primaryKey='Id';
  protected $fillable=[
    'Id','Discapacidad','Causa_discapacidad','Rehabilitacion','Lugar_de_rehabilitacion',
    'Tipo_rehabilitacion','Apoyo_funcional','Requiere_apoyo_funcional'
  ];

}
