<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Evaluacion;

class EvaluacionController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($Id){
      $registros3=\DB::table('evaluacion')

      ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();

      return view('formularios.evaluacion')
      ->with('perros3',$registros3);

    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'examen'=>'required|max:255',
        'puntuacion'=>'required|max:255',
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        //dd($registros3);
        return redirect('admin.Formubenefi')
          ->withInput()
          ->withErrors($validator);
      }else{


    
        evaluacion::create([
          'Id_bene'=>$req->idev,
          'tipo_examen'=>$req->examen,
          'puntuacion'=>$req->puntuacion,
        ]);
        return redirect()->to('/admin/Formubenefi/'.$req->idev)
        ->with('mensaje','datos agregados');


  }
    dd($req->nombre);
}
}
