<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Centro_Salud;

class Booleanocontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros5=\DB::table('estatus')
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
      
      dd($registros5);
      return view('formularios.estatus')
      ->with('perros5',$registros5);

    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Jubilado'=>'max:255',
        'Servicio_medico'=>'max:255',
        'Bano_diario'=>'max:255',
        'Convivencia_animal'=>'max:255',
      ]);

}
