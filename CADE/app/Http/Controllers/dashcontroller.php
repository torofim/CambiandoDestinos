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
  public function datos(){

  }
  public function index()
  {

     $beneficiarios = DB::select(' select COUNT(Nombre) AS total from datos_personales');
    #dd($sql);


    #  return View('LEFTMENU')->with('beneficiarios',$beneficiarios);
       return view('LEFTMENU')->with('benef',$beneficiarios);
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
