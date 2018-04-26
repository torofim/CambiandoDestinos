<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class dashcontroller extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
     $benef = DB::select('select COUNT(*) AS total from datos_personales');
     $usuarios = DB::select('select COUNT(*) AS usu from users');
     $taller=DB::select('select COUNT(*) AS btaller from taller');
     $disc=DB::select('select Count(*) AS disca from discapacidad');
     $localidades=DB::select('select Localidad, COUNT(*) as cantidad from datos_personales group by Localidad');
     $categorias='';
     $valores='';



     $mes=DB::select('select * from datos_personales where month(Created_at) = 4 group by Nombre');
     for($i=0;$i<count($localidades);$i++){
       $categorias=$categorias.'"'.$localidades{$i}->Localidad.'",';
       $valores=$valores.$localidades{$i}->cantidad.',';
     }
     #dd($myval);
    #dd($benef);
    $messeleccionado='';
  # NO FUNCIONA CON LOS 2 JUNTOS NECESITO PREGUNTAR AL ING COMO SE ARREGLA
     return view('dashprincipal', ['benef' => $benef])
     ->with('usuarios',$usuarios)
     ->with('taller',$taller)
     ->with('disc',$disc)
     ->with('nombres',$categorias)
     ->with('valores',$valores)
     ->with('messeleccionado',$messeleccionado);
       #return view('LEFTMENU',['usuarios' => $usuarios]);
       #->width('nombre','EQUIPOS DE FUTBOL');
       #si se hace esto y el js esta en el blade solo se imprime como php {{$nombre}}
      #return view('principal');
  }
  public function mes(Request $request){
    $messeleccionado = $request->qty;
    return view('dashprincipal')->with('mes',$messeleccionado);
  }
  public function benef()
  {
      return view('dashboardbeneficiarios');
  }
  public function regis()
  {
      return view('dashboardusuarios');
  }
  public function form()
  {
    return view('formularios');
  }
}
