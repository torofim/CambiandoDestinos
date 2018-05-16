<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
  protected $primaryKey='Id_bene';
  protected $table='archivos';
  protected $fillable=[
    'Id_bene','Foto_infantil','Foto_cuerpo','Certificado_discapacida','Copia_curp','Curp'
  ];
}
