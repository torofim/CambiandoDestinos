<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\booleano;
use Illuminate\Support\Facades\Auth;

class BooleanosController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros5=\DB::table('estatus')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();

      dd($registros5);
      return view('formularios.estatus')
      ->with('perros5',$registros5);

    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Jubilado'=>'max:255',
        'Servicio_medico'=>'max:255',
        'Imss'=>'max:255',
        'Isste'=>'max:255',
        'Seguro_popular'=>'max:255',
        'Pensiones'=>'max:255',
        'Ichisal'=>'max:255',
        'Dispensario'=>'max:255',
        'Bano_diario'=>'max:255',
        'Convivencia_animal'=>'max:255',
      ]);

      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('formularios.Formubenefi')
          ->withInput()
          ->withErrors($validator);
      }else{
        $usuario=booleano::find($req->idbo);

        if(($usuario)==null){

          booleano::create([
            'Id_bene'=>$req->idbo,
            'Jubilado'=>$req->jubilado,
            'Servicio_medico'=>$req->servicio,
            'Imss'=>$req->imss,
            'Isste'=>$req->isste,
            'Seguro_popular'=>$req->segpop,
            'Pensiones'=>$req->pensiones,
            'Ichisal'=>$req->ichisal,
            'Dispensario'=>$req->dispensario,
            'Bano_diario'=>$req->bano,
            'Convivencia_animal'=>$req->convivencia,

          ]);
          return redirect()->to('/admin/Formubenefi/'.$req->idbo)
          ->with('mensaje','datos agregados');
        }else{

          $usuario->Jubilado=$req->jubilado;
          $usuario->Servicio_medico=$req->servicio;
          $usuario->Imss=$req->imss;
          $usuario->Isste=$req->isste;
          $usuario->Seguro_popular=$req->segpop;
          $usuario->Pensiones=$req->pensiones;
          $usuario->Ichisal=$req->ichisal;
          $usuario->Dispensario=$req->dispensario;
          $usuario->Bano_diario=$req->bano;
          $usuario->Convivencia_animal=$req->convivencia;

          $usuario->save();
          //dd($usuario);
          return redirect()->to('/admin/Formubenefi/'.$req->idbo)
          ->with('mensaje','Usuario Modificado');
        }

      }
}}
