<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reportecontroller extends Controller
{
    //
    public function index(){
      $Id=1;
      registros=\DB::table('datos_personales')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc');
      return View('reporte')
      ->with('Id_bene',$Id);
    }
}
