<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class graficoscontroller extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  public function index($mes='',$year='')
  {
    // si no mandan ningun mes por defecto agarrara el mes actual
    if($mes==''){$mes=date('m');}
    if($year==''){$year=date('Y');}
     $benef = DB::select('select COUNT(*) AS total from datos_personales');
     $usuarios = DB::select('select COUNT(*) AS usu from users');
     $taller=DB::select('select COUNT(*) AS btaller from taller');
     $disc=DB::select('select Count(*) AS disca from discapacidad');
     $localidades=DB::select('select Localidad, COUNT(*) as cantidad from datos_personales group by Localidad');
     $categorias='';
     $valores='';
     $valoresMes='';
     $eval=DB::select('select tipo_examen, count(*) as cantidad from evaluacion group by tipo_examen');
     $cateva='';
     $valoreseva='';
     $val='';
     $platos=DB::select('select Nombre, count(*) as cantidad from tabla_comida group by Nombre');
     $catplatos='';
     $valoresp='';
     $valoresplatos='';
     $talleres=DB::select('select Nombretaller, count(*) as cantidad from taller group by Nombretaller');
     $cattaller='';
     $valorest='';
     $valorestaller='';
     // Query para saber cuantos hay registrados en casa mes
    //SELECT month(created_at), count(*) as cuantos from datos_personales group by month(Created_at)
     //las semanas van fijas

     $semanas='"1 al 7","8 al 14","15 al 21","21 al 30"';
     //aqui esta lo feo que es contar los usuarios que esten en el rango del dia

     if($mes!='anual'){
       //le cambie de 1 a 0
        $i=1;$j=7;
        for($x=0;$x<4;$x++){
            $datosmes=DB::select('
            select Count(*) AS cuantos from datos_personales where
            month(Created_at) = '.$mes.'
            and year(created_at)= '.$year.'
            and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'
            ');

          if(count($datosmes)>0){
            $valoresMes=$valoresMes.$datosmes{0}->cuantos.',';
          }else{
            $valoresMes=$valoresMes.'0,';
          }

          $i=$i+7;
          $j=$j+7;
          if($x==2){
            $j=$j+3;
          }
        }

     }else{
      //SI ES ANUAL
      $semanas='"Enero","Febrero","Marzo","Abril","Mayo",
      "Junio","Agosto","Septiembre","Ocubre","Noviembre","Diciembre"';

         for($x=1;$x<13;$x++){
            $datosmes=DB::select('
            select Count(*) AS cuantos from datos_personales where
            month(Created_at) = '.$x.'
            and year(created_at)='.$year.'
            ');
            //EL ORDER BY ARRUINA LA CONSULTA
              if(count($datosmes)>0){
                $valoresMes=$valoresMes.$datosmes{0}->cuantos.',';
              }else{
                $valoresMes=$valoresMes.'0,';
              }

         }
     }
     ///////////////////////////////////////////////////////////////////////////
     if($mes!='anual'){
        $i=1;$j=7;
        for($x=0;$x<4;$x++){
            $datoseva=DB::select('
            select Count(*) AS cuantos from evaluacion where
            month(Created_at) = '.$mes.'
            and year(Created_at)= '.$year.'
            and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'');

            if(count($datoseva)>0){
              $valoreseva=$valoreseva.$datoseva{0}->cuantos.',';
            }else{
              $valoreseva=$valoreseva.'0,';
            }
            $datosplatos=DB::select('
              select Count(*) as cuantos from tabla_comida where
              month(Created_at) = '.$mes.'
              and year(Created_at)= '.$year.'
              and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'');

            if(count($datosplatos)>0){
              $valoresplatos=$valoresplatos.$datosplatos{0}->cuantos.',';
            }else{
              $valoresplatos=$valoresplatos.'0,';
            }

            $datostaller=DB::select('
              select Count(*) as cuantos from taller where
              month(Created_at) = '.$mes.'
              and year(Created_at)= '.$year.'
              and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'');

              if(count($datostaller)>0){
                $valorestaller=$valorestaller.$datostaller{0}->cuantos.',';
              }else{
                $valorestaller=$valorestaller.'0,';
              }

          $i=$i+7;
          $j=$j+7;
          if($x==2){
            $j=$j+3;
          }
        }


     }else{
      //SI ES ANUAL
      $semanas='"Enero","Febrero","Marzo","Abril","Mayo",
      "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"';

      for($x=1;$x<13;$x++){
         $datoseva=DB::select('
         select Count(*) AS cuantos from evaluacion where
         month(Created_at) = '.$x.'
         and year(created_at)='.$year.'
         ');

         if(count($datoseva)>0){
           $valoreseva=$valoreseva.$datoseva{0}->cuantos.',';

         }else{
           $valoreseva=$valoreseva.'0,';
         }

         $datosplatos=DB::select('
         select Count(*) as cuantos from tabla_comida where
         month(Created_at) = '.$x.'
         and year(Created_at)= '.$year.'
         ');

          if(count($datosplatos)>0){
            $valoresplatos=$valoresplatos.$datosplatos{0}->cuantos.',';
          }else{
            $valoresplatos=$valoresplatos.'0,';
          }

          $datostaller=DB::select('
          select Count(*) as cuantos from taller where
          month(Created_at) = '.$x.'
          and year(Created_at)= '.$year.'
          ');

          if(count($datostaller)>0){
            $valorestaller=$valorestaller.$datostaller{0}->cuantos.',';
          }else{
            $valorestaller=$valorestaller.'0,';
          }

        }// llave FOR

     }//LLAVE ELSE ARRIBA FOR

     ///////////////////////////////////////////////////////////////////////////

     ///////////////////////////////////////////////////////////////////////////
     for($i=0;$i<count($localidades);$i++){
       $categorias=$categorias.'"'.$localidades{$i}->Localidad.'",';
       $valores=$valores.$localidades{$i}->cantidad.',';
     }

     for($i=0;$i<count($datoseva);$i++){
       $cateva=$cateva.'"'.$datoseva{$i}->cuantos.'",';
       $val=$val.$eval{$i}->cantidad.',';
     }

     for($i=0;$i<count($datosplatos);$i++){
       $catplatos=$catplatos.'"'.$datosplatos {$i}->cuantos.'",';
       $valoresp=$valoresp.$platos{$i}->cantidad.',';
     }

     for($i=0;$i<count($datostaller);$i++){
       $cattaller=$cattaller.'"'.$datostaller {$i}->cuantos.'",';
       $valorest=$valorest.$talleres{$i}->cantidad.',';
     }

     #  echo('
     #    select Count(*) as cuantos from tabla_comida where
     #    month(Created_at) = '.$mes.'
     #    and year(Created_at)= '.$year.'
     #    and day(Created_at)>='.$i.' and day(Created_at)<='.$j.'<br>');







     return view('dashgraficos', ['benef' => $benef])
     ->with('nombres',$categorias)
     ->with('valores',$valores)
     ->with('valoresMes',$valoresMes)
     ->with('semanas',$semanas)
     ->with('cateva',$cateva)
     ->with('valoreseva',$valoreseva)
     ->with('catplatos',$catplatos)
     ->with('valoresplatos',$valoresplatos)
     ->with('cattaller',$cattaller)
     ->with('valorestaller',$valorestaller);
       #return view('LEFTMENU',['usuarios' => $usuarios]);
       #->width('nombre','EQUIPOS DE FUTBOL');
       #si se hace esto y el js esta en el blade solo se imprime como php {{$nombre}}
      #return view('principal');
  }
}
