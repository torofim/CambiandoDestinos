<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class formubeneficontroller extends Controller
{
    //
    public function index($Id){

      $registros=\DB::table('datos_personales')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
    //  dd($registros);
      $registros2=\DB::table('discapacidad')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
    //->take(10)
      ->get();
  //  dd($registros);
      $registros3=\DB::table('evaluacion')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
  //->take(10)
      ->get();
        //dd($registros3);
        $registros4=\DB::table('tutor')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        $registros5=\DB::table('estatus')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        $registros6=\DB::table('datos_centro_salud')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        $registros7=\DB::table('visitas')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        $registros8=\DB::table('tabla_comida')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        $registros9=\DB::table('tipo_discapacidad')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();

      return view('/Formubenefi')
        ->with('Id_bene',$Id)
        ->with('datosper',$registros)
        ->with('discap',$registros2)
        ->with('perros3',$registros3)
        ->with('perros4',$registros4)
        ->with('perros5',$registros5)
        ->with('perros6',$registros6)
        ->with('regvisita',$registros7)
        ->with('cocal',$registros8)
        ->with('perros9',$registros9);

    }


}
