<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
  public function datos(){
    $beneficiarios = User::select('select COUNT(*) from Datos_personales', [1]);
    dd($beneficiarios);
    return View('LEFTMENU')->with('beneficiarios',$beneficiarios);
  }
  public function index()
  {
    $beneficiarios = User::select('select COUNT(*) from Datos_personales', [1]);
    dd($beneficiarios);
      return view('principal');
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
