<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Archivo;
use Illuminate\Support\Facades\Auth;

class archivoscontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros=\DB::table('archivos')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
      return view('archivo')
      ->with('archivos',$registros);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'Foto_infantil'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Foto_cuerpo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Certificado_discapacida'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Com_dom'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Curp'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/archivos')
          ->withInput()
          ->withErrors($validator);
      }else{

        $archivo=Archivo::find($req->idbene);
        //dd($archivo);
        if(($archivo)==null){

        $nombreInfantil=time().'.'.$req->Foto_infantil->getClientOriginalExtension();
        $req->Foto_infantil->move(public_path('/img/archivos'),$nombreInfantil);

        $nombreCuerpo=time().'.'.$req->Foto_cuerpo->getClientOriginalExtension();
        $req->Foto_cuerpo->move(public_path('/img/archivos'),$nombreCuerpo);

        $nombreCertificado=time().'.'.$req->Certificado_discapacida->getClientOriginalExtension();
        $req->Certificado_discapacida->move(public_path('/img/archivos'),$nombreCertificado);

        $nombreCopia=time().'.'.$req->Com_dom->getClientOriginalExtension();
        $req->Com_dom->move(public_path('/img/archivos'),$nombreCopia);

        $nombreCurp=time().'.'.$req->Curp->getClientOriginalExtension();
        $req->Curp->move(public_path('/img/archivos'),$nombreCurp);

        Archivo::create([
          'Id_bene'=>$req->idbene,
          'Foto_infantil'=>$nombreInfantil,
          'Foto_cuerpo'=>$nombreCuerpo,
          'Certificado_discapacida'=>$nombreCertificado,
<<<<<<< HEAD
          'Com_dom'=>$nombreCertificado,
=======
          'Com_dom'=>$nombreCopia,
>>>>>>> e3c35858f2a932814e798fdba83b00b0d6535a04
          'Curp'=>$nombreCurp
        ]);
        return redirect()->to('/admin/Formubenefi/'.$req->idbene);
      }else{

        $nombreInfantil=time().'.'.$req->Foto_infantil->getClientOriginalExtension();
        $req->Foto_infantil->move(public_path('/img/archivos'),$nombreInfantil);

        $nombreCuerpo=time().'.'.$req->Foto_cuerpo->getClientOriginalExtension();
        $req->Foto_cuerpo->move(public_path('/img/archivos'),$nombreCuerpo);

        $nombreCertificado=time().'.'.$req->Certificado_discapacida->getClientOriginalExtension();
        $req->Certificado_discapacida->move(public_path('/img/archivos'),$nombreCertificado);

        $nombreCopia=time().'.'.$req->Com_dom->getClientOriginalExtension();
        $req->Com_dom->move(public_path('/img/archivos'),$nombreCopia);

        $nombreCurp=time().'.'.$req->Curp->getClientOriginalExtension();
        $req->Curp->move(public_path('/img/archivos'),$nombreCurp);

<<<<<<< HEAD
        $archivo->Foto_infantil=$nombreInfantil;
        $archivo->Foto_cuerpo=$nombreCuerpo;
        $archivo->Certificado_discapacida=$nombreCertificado;
        $archivo->Com_dom=$nombreCopia;
        $archivo->Curp=$nombreCurp;
        $archivo->save();
=======
        $archivo->Foto_infantil=$req->$nombreInfantil;
        $archivo->Foto_cuerpo=$req->$nombreCuerpo;
        $archivo->Certificado_discapacida=$req->$nombreCertificado;
        $archivo->Com_dom=$req->$nombreCopia;
        $archivo->Curp=$req->$nombreCurp;
        
>>>>>>> e3c35858f2a932814e798fdba83b00b0d6535a04
        return redirect()->to('/admin/Formubenefi/'.$req->idbene);
      }


      }
      dd($req->nombre);
    }
}
