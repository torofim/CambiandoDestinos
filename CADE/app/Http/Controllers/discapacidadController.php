<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Discapacidad;
class discapacidadController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }


    public function index($Id){
      $registros2=\DB::table('discapacidad')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
    // dd($registros);
    //dd($Id);
      return view('formularios.discapacidad')

      ->with('discap',$registros2);
    }


          public function store(Request $req){

            $validator =Validator::make($req->all(),[
              'discapacidad'=>'max:255',

            ]);
            if($validator->fails()){
              //quiere decir que no estan correctos
              return redirect('formularios.Formubenefi')
                ->withInput()
                ->withErrors($validator);
            }else{
              $usuario=Discapacidad::find($req->idbene);
              //dd($usuario);
              if(($usuario)==null){

                Discapacidad::create([
                  'Id_bene'=>$req->idbene,
                  'Discapacidad'=>$req->discapacidad,
                  'Causa_discapacidad'=>$req->causa,
                  'Tipo_disca'=>$req->tipodis,
                  'hipertension'=>$req->hiper,
                  'Rehabilitacion'=>$req->rehab,
                  'Lugar_de_rehabilitacion'=>$req->lugarehab,
                  'Tipo_rehabilitacion'=>$req->tiporehab,
                  'Apoyo_funcional'=>$req->apoyofun,
                  'Requiere_apoyo_funcional'=>$req->requiere,
                  'Tipo_apoyo'=>$req->tipoapoyo
                ]);
                return redirect()->to('/admin/Formubenefi/'.$req->idbene)
                ->with('mensaje','datos agregados');
              }else{

                $usuario->Discapacidad=$req->discapacidad;
                $usuario->Causa_discapacidad=$req->causa;
                $usuario->Tipo_disca=$req->tipodis;
                $usuario->hipertension=$req->hiper;
                $usuario->Rehabilitacion=$req->rehab;
                $usuario->Lugar_de_rehabilitacion=$req->lugarehab;
                $usuario->Tipo_rehabilitacion=$req->tiporehab;
                $usuario->Apoyo_funcional=$req->apoyofun;
                $usuario->Requiere_apoyo_funcional=$req->requiere;
                $usuario->Tipo_apoyo=$req->tipoapoyo;
                $usuario->save();
                //dd($usuario);
                return redirect()->to('/admin/Formubenefi/'.$req->idbene)
                ->with('mensaje','Usuario Modificado');
              }

          }
          dd($req->nombre);
          }


          //edit




}
