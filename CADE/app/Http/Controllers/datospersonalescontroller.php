<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Datos_personales;

class datospersonalescontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros=\DB::table('datos_personales')
      //->where('Id','=','1');
      ->orderby('Id','desc')
      //->take(10)
      ->get();

      return view('dashboardbeneficiarios')
      ->with('perros',$registros);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'ap_p'=>'required|max:255',
        'ap_m'=>'required|max:255',
        'fecha_na'=>'required|max:255',
        'lugar_na'=>'required|max:255',
        'edad'=>'required|max:255',
        'sexo'=>'required|max:255',
        'edo_civil'=>'required|max:255',
        'tipo_sangre'=>'required|max:255',
        'peso'=>'required|max:255',
        'estatura'=>'required|max:255',
        'talla'=>'required|max:255',
        'calzado'=>'required|max:255',
        'domicilio'=>'required|max:255',
        'cp'=>'required|max:255',
        'localidad'=>'required|max:255',
        'tel'=>'required|max:255',


      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/benef')
          ->withInput()
          ->withErrors($validator);
      }else{
        Datos_personales::create([
          'Nombre'=>$req->nombre,
          'Apellido_p'=>$req->ap_p,
          'Apellido_m'=>$req->ap_m,
          'Fecha_nacimiento'=>$req->fecha_na,
          'Lugar_nacimiento'=>$req->lugar_na,
          'Edad'=>$req->edad,
          'Sexo'=>$req->sexo,
          'Edo_civil'=>$req->edo_civil,
          'Tipo_sangre'=>$req->tipo_sangre,
          'Peso'=>$req->peso,
          'Estatura'=>$req->estatura,
          'Talla'=>$req->talla,
          'Calzado'=>$req->calzado,
          'Domicilio'=>$req->domicilio,
          'Cp'=>$req->cp,
          'Localidad'=>$req->localidad,
          'Tel'=>$req->tel




        ]);
        return redirect()->to('/admin/benef')
        ->with('mensaje','datos agregados');
      }
      dd($req->nombre);
    }
}
