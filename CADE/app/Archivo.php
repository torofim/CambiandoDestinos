<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
  protected $primaryKey='Id';
  protected $table='Archivos';
  protected $fillable=[
    'Foto_infantil','Foto_cuerpo','Certificado_discapacidad','Copia_curp','Curp'
  ];
}
