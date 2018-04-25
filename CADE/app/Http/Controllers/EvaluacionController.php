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
    public function index(){
      return view('Evaluacion');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'tipo_examen'=>'required|max:255',
        'puntuacion'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/evaluacion')
          ->withInput()
          ->withErrors($validator);
      }else{
        Centro_salud::create([
          'tipo_examen'=>$req->tipo_examen,
          'puntuacion'=>$req->puntuacion,
        ]);
        return redirect()->to('/admin/evaluacion')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
}
