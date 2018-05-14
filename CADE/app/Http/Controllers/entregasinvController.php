<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Entrega_inventario;

class entregasinvController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }


    public function index(){
      $registros=\DB::table('entregas_inventario')
    //  ->where('','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
    // dd($registros);
    //dd($Id);
      return view('formularios.inventarioentrega')

      ->with('resultado',$registros);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Id_bene'=>'max:255',
        'Nombre_bene'=>'max:255',
        'Articulo_entregado'=>'max:255',
        'Cantidad'=>'max:255',
        'Tipo'=>'max:255',
        'Fecha_entrega'=>'max:255',
        'Notas'=>'max:255'


      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/inventarioentrega')
          ->withInput()
          ->withErrors($validator);
      }else{
        Entrega_inventario::create([
          'Id_bene'=>$req->idin,
          'Nombre_bene'=>$req->nombrebene,
          'Articulo_entregado'=>$req->articulo,
          'Cantidad'=>$req->cant,
          'Tipo'=>$req->tipo,
          'Fecha_entrega'=>$req->fecha,
          'Notas'=>$req->notas
        ]);
        return redirect()->to('/admin/inventario')
        ->with('mensaje','Datos Agregados');
    }
    dd($req->nombre);
  }
}
