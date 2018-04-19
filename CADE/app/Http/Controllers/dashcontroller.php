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
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="Cambiando_Destinos";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    $sql="select count(id) as total From Datos_personales";
    $result= mysqli_query($con,$sql);
    $values=mysqli_fetch_assoc($result);
    $nom_rows=$values['total']
    echo $nom_rows;
  }
  public function index()
  {
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
