<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Taller;
class tallerController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }


    public function index(){
      $registros10=\DB::table('taller')
    //->where('Id_bene','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
     //dd($registros9);
    //dd($Id);
      return view('taller')

      ->with('perros10',$registros10);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombretaller'=>'max:255',
        'tipo'=>'max:255',
        'cantidad'=>'max:255',
        'fecha'=>'max:255',
        'lugar'=>'max:255',
        'notas'=>'max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/taller')
          ->withInput()
          ->withErrors($validator);
      }else{
        Taller::create([
          'Nombretaller'=>$req->nombretaller,
          'Tipo'=>$req->tipo,
          'Cantidad'=>$req->cantidad,
          'Fecha'=>$req->fecha,
          'Lugar'=>$req->lugar,
          'Notas'=>$req->notas,
        ]);
        return redirect()->to('/admin/taller')
        ->with('mensaje','Datos Agregados');
    }
    dd($req->nombre);
  }
}
