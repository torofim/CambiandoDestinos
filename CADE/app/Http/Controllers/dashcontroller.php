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

  public function index($mes="")
  {
     $benef = DB::select('select COUNT(*) AS total from datos_personales');
     $usuarios = DB::select('select COUNT(*) AS usu from users');
     $taller=DB::select('select COUNT(*) AS btaller from taller');
     $disc=DB::select('select Count(*) AS disca from discapacidad');
     $localidades=DB::select('select Localidad, COUNT(*) as cantidad from datos_personales group by Localidad');
     $categorias='';
     $valores='';


     $mese=DB::select('select * from datos_personales where month(Created_at) = '.$mes.' group by Nombre');

     for($i=0;$i<count($localidades);$i++){
       $categorias=$categorias.'"'.$localidades{$i}->Localidad.'",';
       $valores=$valores.$localidades{$i}->cantidad.',';
     }
     return view('dashprincipal', ['benef' => $benef])
     ->with('usuarios',$usuarios)
     ->with('taller',$taller)
     ->with('disc',$disc)
     ->with('nombres',$categorias)
     ->with('valores',$valores);
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
