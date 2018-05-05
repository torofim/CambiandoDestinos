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
      $registros2=\DB::table('discapacidad')
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
    //->take(10)
      ->get();
  //  dd($registros);
      $registros3=\DB::table('evaluacion')

      ->where('Id','=',$Id)
      ->orderby('Id','desc')
  //->take(10)
      ->get();
        //dd($registros3);
        $registros4=\DB::table('tutor')

        ->where('Id','=',$Id)
        ->orderby('Id','desc')
        //->take(10)
        ->get();
        $registros5=\DB::table('estatus')

        ->where('Id','=',$Id)
        ->orderby('Id','desc')
        //->take(10)
        ->get();
        //dd($registros5);
      /*  if(count($registros5)==0){
          $registros5[]=array(
          'Id'=>'',
          'Jubilado'=>'',
          'Servicio_medico'=>'',
          'Bano_diario'=>'',
          'Convivencia_animal'=>'');
        }*/
        

      return view('/Formubenefi')
        ->with('perros',$registros)
        ->with('perros2',$registros2)
        ->with('perros3',$registros3)
        ->with('perros4',$registros4)
        ->with('perros5',$registros5);

    }


}
