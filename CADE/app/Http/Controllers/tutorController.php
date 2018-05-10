<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Tutor;
class tutorController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }

    public function index($Id){
      $registros4=\DB::table('tutor')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
    // dd($registros);
      return view('formularios.tutor')
      ->with('perros4',$registros4);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'max:255',
        'app'=>'max:255',
        'encargado'=>'max:255',
        'curp'=>'max:255',
        'rfc'=>'max:255',
        'antecedentes'=>'max:255',
        'tel'=>'max:255',

      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('formularios.Formubenefi')
          ->withInput()
          ->withErrors($validator);
      }else{
        $usuario=Tutor::find($req->idtu);

        if(($usuario)==null){

          Tutor::create([
            'Id_bene'=>$req->idtu,
            'Nombre_tutor'=>$req->nombre,
            'Apellido_tutor'=>$req->app,
            'Encargado'=>$req->encargado,
            'Curp_tutor'=>$req->curp,
            'Rfc_tutor'=>$req->rfc,
            'Antecedentes'=>$req->antecedentes,
            'Telefono'=>$req->tel
          ]);
        //  dd($usuario);
          return redirect()->to('/admin/Formubenefi/'.$req->idtu)
          ->with('mensaje','datos agregados');
        }else{

          $usuario->Nombre_tutor=$req->nombre;
          $usuario->Apellido_tutor=$req->app;
          $usuario->Encargado=$req->encargado;
          $usuario->Curp_tutor=$req->curp;
          $usuario->Rfc_tutor=$req->rfc;
          $usuario->Antecedentes=$req->antecedentes;
          $usuario->Telefono=$req->tel;
          $usuario->save();
          //dd($usuario);
          return redirect()->to('/admin/Formubenefi/'.$req->idtu)
          ->with('mensaje','Usuario Modificado');
        }

    }
    dd($req->nombre);
    }
}
