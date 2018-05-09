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
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
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
        'presion'=>'required|max:255',
        'fecha'=>'required|max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/Formubenefi/')
          ->withInput()
          ->withErrors($validator);
      }else{

        $usua=Centro_salud::find($req->idis);

        if(($usua)==null){

        Centro_salud::create([
          'Id'=>$req->idis,
          'Edad'=>$req->edad,
          'Peso'=>$req->peso,
          'presion_arterial'=>$req->presion,
          'Fecha'=>$req->fecha
        ]);
        return redirect()->to('/admin/Formubenefi/'.$req->idis)
        ->with('mensaje','datos agregados');

      }else{

        $usua->Edad=$req->edad;
        $usua->Peso=$req->peso;
        $usua->presion_arterial=$req->presion;
        $usua->Fecha_centrosalud=$req->fecha;

        $usua->save();
        //dd($usuario);
        return redirect()->to('/admin/Formubenefi/'.$req->idis)
        ->with('mensaje','Usuario Modificado');
      }
      dd($req->nombre);
    }
}
}
