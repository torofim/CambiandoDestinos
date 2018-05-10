<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
  protected $primaryKey='Id_bene';
  protected $table='tutor';
  protected $fillable=[
    'Id_bene','Nombre_tutor','Apellido_tutor','Encargado','Curp_tutor','Rfc_tutor','Antecedentes','Telefono',
  ];
}
