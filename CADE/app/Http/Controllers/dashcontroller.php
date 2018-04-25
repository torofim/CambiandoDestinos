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
    #dd($benef);
  # NO FUNCIONA CON LOS 2 JUNTOS NECESITO PREGUNTAR AL ING COMO SE ARREGLA
     return view('dashprincipal', ['benef' => $benef])
     ->with('usuarios',$usuarios)->with('taller',$taller)->with('disc',$disc);
       #return view('LEFTMENU',['usuarios' => $usuarios]);
       #->width('nombre','EQUIPOS DE FUTBOL');
       #si se hace esto y el js esta en el blade solo se imprime como php {{$nombre}}
      #return view('principal');
  }
  public function benef()
  {
      return view('dashboardbeneficiarios');
  }
  public function regis()
  {
      return view('dashboardusuarios');
  }

}
