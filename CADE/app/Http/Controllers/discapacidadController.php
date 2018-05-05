<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class discapacidadController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }

    public function index($Id){
      $registros2=\DB::table('discapacidad')
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
    //  dd($registros);
      return view('formularios.discapacidad')
      ->with('perros2',$registros2);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'discapacidad'=>'max:255',
        'causa'=>'max:255',
        'rehab'=>'max:255',
        'lugarehab'=>'max:255',
        'tiporehab'=>'max:255',
        'apoyofun'=>'max:255',
        'require'=>'|max:255'



      ]);
}
