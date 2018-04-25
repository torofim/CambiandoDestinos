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
    public function index(){
      return view('booleano');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Jubilado'=>'required|max:255',
        'Servicio_medico'=>'required|max:255',
        'Bano_diario'=>'required|max:255',
        'Convivencia_animal'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/booleano')
          ->withInput()
          ->withErrors($validator);
      }else{
        Centro_salud::create([
          'Jubilado'=>$req->Jubilado,
          'Servicio_medico'=>$req->Servicio_medico,
          'Bano_diario'=>$req->Bano_diario,
          'Convivencia_animal'=>$req->Convivencia_animal,
        ]);
        return redirect()->to('/admin/booleano')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
}
