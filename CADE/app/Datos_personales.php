<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos_personales extends Model
{
  protected $primaryKey='Id_bene';
  protected $table='datos_personales';
  protected $fillable=[
  'Id_bene','Nombre','Apellido_p','Apellido_m','Fecha_nacimiento','Lugar_nacimiento','Edad',
  'Sexo','Curp','Edo_civil','Tipo_sangre','Peso','Estatura','Talla','Calzado','Domicilio','Cp','Colonia','Localidad','Municipio','Tel'
  ];

}
