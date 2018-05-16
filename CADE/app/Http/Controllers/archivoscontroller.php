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
        'Foto_infantil'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Foto_cuerpo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Certificado_discapacida'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Copia_curp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Curp'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

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

        $nombreCopia=time().'.'.$req->Copia_curp->getClientOriginalExtension();
        $req->Copia_curp->move(public_path('/img/archivos'),$nombreCopia);

        $nombreCurp=time().'.'.$req->Curp->getClientOriginalExtension();
        $req->Curp->move(public_path('/img/archivos'),$nombreCurp);

        Archivo::create([
          'Id_bene'=>$req->idbene,
          'Foto_infantil'=>$nombreInfantil,
          'Foto_cuerpo'=>$nombreCuerpo,
          'Certificado_discapacida'=>$nombreCertificado,
          'Copia_curp'=>$nombreCopia,
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

        $nombreCopia=time().'.'.$req->Copia_curp->getClientOriginalExtension();
        $req->Copia_curp->move(public_path('/img/archivos'),$nombreCopia);

        $nombreCurp=time().'.'.$req->Curp->getClientOriginalExtension();
        $req->Curp->move(public_path('/img/archivos'),$nombreCurp);

        $archivo->Foto_infantil=$req->$nombreInfantil;
        $archivo->Foto_cuerpo=$req->$nombreCuerpo;
        $archivo->Certificado_discapacida=$req->$nombreCertificado;
        $archivo->Copia_curp=$req->$nombreCopia;
        $archivo->Curp=$req->$nombreCurp;
        return redirect()->to('/admin/Formubenefi/'.$req->idbene);
      }


      }
      dd($req->nombre);
    }
}
