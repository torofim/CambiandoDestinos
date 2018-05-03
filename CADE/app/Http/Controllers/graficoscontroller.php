<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class graficoscontroller extends Controller
{
  public function index($mes='')
  {
    // si no mandan ningun mes por defecto agarrara el mes actual
    if($mes==''){$mes=date('m');}

     $benef = DB::select('select COUNT(*) AS total from datos_personales');
     $usuarios = DB::select('select COUNT(*) AS usu from users');
     $taller=DB::select('select COUNT(*) AS btaller from taller');
     $disc=DB::select('select Count(*) AS disca from discapacidad');
     $localidades=DB::select('select Localidad, COUNT(*) as cantidad from datos_personales group by Localidad');
     $categorias='';
     $valores='';

     //las semanas van fijas
     $semanas='"1 al 7","8 al 14","15 al 21","21 al 30"';
     //aqui esta lo feo que es contar los usuarios que esten en el rango del dia
     $valoresMes='';
     if($mes!='anual'){
       //le cambie de 1 a 0
        $i=1;$j=7;
        for($x=0;$x<4;$x++){
            $datosmes=DB::select('
            select Count(*) AS cuantos from datos_personales where
            month(Created_at) = '.$mes.'
            and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'
            group by Nombre');
          if(count($datosmes)>0){
            $valoresMes=$valoresMes.$datosmes{0}->cuantos.',';
          }else{
            $valoresMes=$valoresMes.'0,';
          }
          $i=$i+7;
          $j=$j+7;
        }
     }else{
      //SI ES ANUAL

      $semanas='"Enero","Febrero","Marzo","Abril","Mayo",
      "Junio","Agosto","Septiembre","Ocubre","Noviembre","Diciembre"';

         for($x=1;$x<13;$x++){
            $datosmes=DB::select('
            select Count(*) AS cuantos from datos_personales where
            month(Created_at) = '.$x.'
            group by Nombre');
              if(count($datosmes)>0){
                $valoresMes=$valoresMes.$datosmes{0}->cuantos.',';
              }else{
                $valoresMes=$valoresMes.'0,';
              }
         }


     }

     for($i=0;$i<count($localidades);$i++){
       $categorias=$categorias.'"'.$localidades{$i}->Localidad.'",';
       $valores=$valores.$localidades{$i}->cantidad.',';
     }


     return view('dashgraficos', ['benef' => $benef])
     ->with('nombres',$categorias)
     ->with('valores',$valores)
     ->with('valoresMes',$valoresMes)
     ->with('semanas',$semanas);
       #return view('LEFTMENU',['usuarios' => $usuarios]);
       #->width('nombre','EQUIPOS DE FUTBOL');
       #si se hace esto y el js esta en el blade solo se imprime como php {{$nombre}}
      #return view('principal');
  }
}