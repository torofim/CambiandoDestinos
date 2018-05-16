<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Tipodis;
class tipodiscapacidadController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }


    public function index($Id){
      $registros9=\DB::table('tipo_discapacidad')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
     //dd($registros9);
    //dd($Id);
      return view('formularios.tipodiscapaciad')

      ->with('perros9',$registros9);
    }

    public function store(Request $req){
        //dd   ($req->auditiva);
      $validator =Validator::make($req->all(),[
        'auditiva'=>'max:255',
        'visual'=>'max:255',
        'auditiva'=>'max:255',
        'musculo'=>'max:255',
        'neuro'=>'max:255',
        'otra'=>'max:255',

      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('formularios.Formubenefi')
          ->withInput()
          ->withErrors($validator);
      }else{
        $usuario=Tipodis::find($req->idbene);

        if(($usuario)==null){

          Tipodis::create([
            'Id_bene'=>$req->idbene,
            'Auditiva'=>$req->auditiva,
            'Visual'=>$req->visual,
            'Intelectual'=>$req->intelectual,
            'MusculoEsqueletica'=>$req->musculo,
            'Neuromotora'=>$req->neuro,
            'Otra'=>$req->otra,

          ]);
          return redirect()->to('/admin/Formubenefi/'.$req->idbene)
          ->with('mensaje','datos agregados');
        }else{

          $usuario->Auditiva=$req->auditiva;
          $usuario->Visual=$req->visual;
          $usuario->Intelectual=$req->intelectual;
          $usuario->MusculoEsqueletica=$req->musculo;
          $usuario->Neuromotora=$req->neuro;
          $usuario->Otra=$req->Otra;

          $usuario->save();
          //dd($usuario);
          return redirect()->to('/admin/Formubenefi/'.$req->idbene)
          ->with('mensaje','Usuario Modificado');
        }

    }
    dd($req->nombre);
    }
}
