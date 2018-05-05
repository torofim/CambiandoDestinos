<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Inventario;

class inventarioController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros=\DB::table('inventario')
      //
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
        'Funcionalidad'=>'max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/inventario')
          ->withInput()
          ->withErrors($validator);
      }else{
        Inventario::create([
          'Nombre_producto'=>$req->nombre,
          'Cantidad'=>$req->cant,
          'Funcionalidad'=>$req->fun
        ]);
        return redirect()->to('/admin/inventario')
        ->with('mensaje','datos agregados');
    }
    dd($req->nombre);
  }
}
