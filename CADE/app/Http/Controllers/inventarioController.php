<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Inventario;
use App\Entrega_inventario;

class inventarioController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros2=\DB::table('entregas_inventario')
    //  ->where('','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
      $registros=\DB::table('inventario')
      //
      //->where('Id','=','1');
      ->orderby('Id_inv','desc')
      //->take(10)
      ->get();

      return view('inventario')
      ->with('inv',$registros)
      ->with('resultado',$registros2);

    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Nombre_producto'=>'max:255',
        'Cantidad'=>'max:255',
        'Funcionalidad'=>'max:255',
        'Tipo'=>'max:255'
      ]);

      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/inventario')
          ->withInput()
          ->withErrors($validator)
          ->withErrors($validator1);
      }else{
        Inventario::create([
          'Id_inv'=>$req->idin,
          'Nombre_producto'=>$req->nombre,
          'Cantidad'=>$req->cant,
          'Funcionalidad'=>$req->fun,
          'Tipo'=>$req->tipo
        ]);

        return redirect()->to('/admin/inventario')
        ->with('mensaje','Datos Agregados');
    }
    dd($req->nombre);
  }
  public function edit(Request $req){
    $usuario=Inventario::find($req->idin);
    $usuario->Nombre_producto=$req->nombreedit;
    $usuario->Cantidad=$req->cantedit;
    $usuario->Funcionalidad=$req->funedit;
    $usuario->Tipo=$req->tipoedit;
    $usuario->save();

    return redirect()->to('/admin/inventario')
    ->with('mensaje','Datos Modificados');
  }//edit


}
