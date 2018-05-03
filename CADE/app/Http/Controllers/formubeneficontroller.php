<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formubeneficontroller extends Controller
{
    //
    public function index($Id){

      $registros=\DB::table('datos_personales')

      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
    //  dd($registros);
      return view('/Formubenefi')
      ->with('perros',$registros);

    }
}
