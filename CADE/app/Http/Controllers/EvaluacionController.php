<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Evaluacion;

class Evaluacioncontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros3=\DB::table('evaluacion')

      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
      return view('formularios.evaluacion')
      ->with('perros3',$registros3);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'tipo_examen'=>'required|max:255',
        'puntuacion'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('formularios.evaluacion')
          ->withInput()
          ->withErrors($validator);
      }else{
        Centro_salud::create([
          'tipo_examen'=>$req->tipo_examen,
          'puntuacion'=>$req->puntuacion,
        ]);
        return redirect()->to('formularios.evaluacion')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
    public function edit(Request $req){
      $usuario=User::find($req->id);
      $usuario->tipo_examen=$req->exaEditar;
      $usuario->puntuacion=$req->puntEditar;
      $usuario->save();

      return redirect()->to('Formubenefi')
      ->with('mensaje','Usuario Modificado');
    }
}
