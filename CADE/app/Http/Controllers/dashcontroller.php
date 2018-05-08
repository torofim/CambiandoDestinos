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
      //$this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

  public function index($mes='')
  {
    // si no mandan ningun mes por defecto agarrara el mes actual
    if($mes==''){$mes=date('m');}

     $benef = DB::select('select COUNT(*) AS total from datos_personales');
     $usuarios = DB::select('select COUNT(*) AS usu from users');
     $taller=DB::select('select COUNT(*) AS btaller from taller');
     $disc=DB::select('select Count(*) AS disca from tabla_comida');
     return view('dashprincipal', ['benef' => $benef])
     ->with('usuarios',$usuarios)
     ->with('taller',$taller)
     ->with('disc',$disc);
       #return view('LEFTMENU',['usuarios' => $usuarios]);
       #->width('nombre','EQUIPOS DE FUTBOL');
       #si se hace esto y el js esta en el blade solo se imprime como php {{$nombre}}
      #return view('principal');
  }
#  public function mes(Request $request){
#    $messeleccionado = $request->qty;
#    return view('dashprincipal')->with('mes',$messeleccionado);
#  }
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
