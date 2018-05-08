<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class discapacidadController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }


    public function index($Id){
      $registros2=\DB::table('discapacidad')
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
    // dd($registros);
      return view('formularios.discapacidad')
      ->with('perros2',$registros2);
    }



    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'discapacidad'=>'max:255',
        'causa'=>'max:255',
        'rehab'=>'max:255',
        'lugarehab'=>'max:255',
        'tiporehab'=>'max:255',
        'apoyofun'=>'max:255',
        'require'=>'|max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/discapacidad')
          ->withInput()
          ->withErrors($validator);
      }else{
        Inventario::create([
          'Discapacidad'=>$req->discapacidad,
          'Causa_discapacidad'=>'',
          'Rehabilitacion'=>'',
          'Lugar_de_rehabilitacion'=>'',
          'Tipo_rehabilitacion'=>'',
          'Apoyo_funcional'=>'',
          'Requiere_apoyo_funcional'=>''
        ]);
        return redirect()->to('/admin/discapacidad')
        ->with('mensaje','datos agregados');
    }
    dd($req->nombre);
  }
  public function edit(Request $req){
    $usuario=Datos_personales::find($req->id);
    $usuario->Discapacidad=$req->disEditar;
    $usuario->Causa_discapacidad=$req->cauEditar;
    $usuario->Rehabilitacion=$req->rehabEditar;
    $usuario->Lugar_de_rehabilitacion=$req->lugarEditar;
    $usuario->Tipo_rehabilitacion=$req->tipoEditar;
    $usuario->Apoyo_funcional=$req->apoyoEditar;
    $usuario->Requiere_apoyo_funcional=$req->requiereEditar;
    $usuario->save();
    //dd($usuario);
    return redirect()->to('/admin/Formubenefi/'.$req->id)
    ->with('mensaje','Usuario Modificado');
  }//edit
}
