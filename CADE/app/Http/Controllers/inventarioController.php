<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inventarioController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros=\DB::table('inventario')
      //->where('Id','=','1');
      ->orderby('Id','desc')
      //->take(10)
      ->get();

      return view('inventario')
      ->with('perros',$registros);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Nombre_articulo'=>'max:255',
        'Cantidad'=>'max:255',
        'Funcion'=>'max:255'




      ]);
    }
}
