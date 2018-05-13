<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    //
    protected $primaryKey='Id';
    protected $table='taller';
    protected $fillable=[
    'Nombretaller','Tipo','Cantidad','Fecha','Lugar','Notas'
    ];

}
