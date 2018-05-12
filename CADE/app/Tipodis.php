<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodis extends Model
{
  protected $table='tipo_discapacidad';
  protected $primaryKey='Id';
  protected $fillable=[
    'Id_bene','Auditiva','Visual','Intelectual','MusculoEsqueletica','Neuromotora',
    'Otra'
  ];

}
