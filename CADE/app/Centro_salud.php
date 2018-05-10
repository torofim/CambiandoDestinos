<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_salud extends Model
{

  protected $table='datos_centro_salud';
  protected $primaryKey='Id';
  protected $fillable=[
    'Id_bene','Edad','Peso','Pas','Pad','Fecha_centrosalud'
  ];
}
