<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class visitasController extends Controller
{
    //public function __construct(){
      $this->middleware('auth');
    }


    public function index($Id){
      $registros7=\DB::table('visitas')
      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
    // dd($registros);
    //dd($Id);
      return view('formularios.visitadom')

      ->with('perros7',$registros7);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'max:255',
        'domicilio'=>'max:255',
        'fecha'=>'max:255',
        'tipo'=>'max:255',
        'notas'=>'max:255',


      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('formularios.Formubenefi')
          ->withInput()
          ->withErrors($validator);
      }else{

          Discapacidad::create([
            'Nombre'=>$req->nombre,
            'Domicilio'=>$req->domicilio,
            'Fecha'=>$req->fecha,
            'Tipo_de_visita'=>$req->tipo,
            'Notas'=>$req->notas

          ]);
          return redirect()->to('/admin/Formubenefi/'.$req->idbene)
          ->with('mensaje','datos agregados');
}
