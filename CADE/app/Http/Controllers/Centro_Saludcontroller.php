<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Centro_Salud;

class Centro_Saludcontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros6=\DB::table('datos_centro_salud')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //dd($registros6);
      ->get();
    //  dd($registros6);
      return view('formularios.centrosalud')

      ->with('perros6',$registros6);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'edad'=>'required|max:255',
        'peso'=>'required|max:255',
        'pas'=>'required|max:255',
        'pad'=>'required|max:255',
        'fecha'=>'required|max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/Formubenefi/')
          ->withInput()
          ->withErrors($validator);
      }else{


      //dd($req->presion);
    //  dd($req->fecha);

        Centro_salud::create([
          'Id_bene'=>$req->idis,
          'Edad'=>$req->edad,
          'Peso'=>$req->peso,
          'Pas'=>$req->pas,
          'Pad'=>$req->pad,
          'Fecha'=>$req->fecha

        ]);
        return redirect()->to('/admin/Formubenefi/'.$req->idis)
        ->with('mensaje','datos agregados');


      dd($req->nombre);
    }
}
}
