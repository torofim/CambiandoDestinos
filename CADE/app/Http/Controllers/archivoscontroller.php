<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class archivoscontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('archivo');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Foto_infantil'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Foto_cuerpo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Certificado_discapacidad'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Copia_curp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Curp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/archivos')
          ->withInput()
          ->withErrors($validator);
      }else{
        $nombreInfantil=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Foto_infantil->move(public_path('/img/archivos'),$nombreInfantil);

        $nombreCuerpo=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Foto_cuerpo->move(public_path('/img/archivos'),$nombreCuerpo);

        $nombreCertificado=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Certificado_discapacidad->move(public_path('/img/archivos'),$nombreCertificado);

        $nombreCopia=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Copia_curp->move(public_path('/img/archivos'),$nombreCopia);

        $nombreCurp=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Curp->move(public_path('/img/archivos'),$nombreCurp);

        Archivo::create([
          'Foto_infantil'=>$nombreInfantil,
          'Foto_cuerpo'=>$nombreCuerpo,
          'Certificado_discapacidad'=>$nombreCertificado,
          'Copia_curp'=>$nombreCopia,
          'Curp'=>$nombreCurp
        ]);
        return redirect()->to('/admin/archivos')
        ->with('mensaje','Archivo agregado');
      }
      dd($req->nombre);
    }
}
