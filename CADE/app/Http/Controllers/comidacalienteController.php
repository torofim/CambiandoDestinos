<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\comida;

class comidacalienteController extends Controller{
    //class visitasController extends Controller

        public function __construct(){
          $this->middleware('auth');
        }

        public function index($Id){
        $registros8=\DB::table('tabla_comida')
        ->where('Id_bene','=',$Id)
        ->orderby('Id_bene','desc')
        //->take(10)
        ->get();
        // dd($registros);
        //dd($Id);
          return view('formularios.comidaca')

          ->with('perros8',$registros8);
        }
        public function store(Request $req){

          $validator =Validator::make($req->all(),[
            'nombre'=>'max:255',
            'domicilio'=>'max:255',
            'fecha'=>'max:255',
            'nota'=>'max:255',


          ]);

          if($validator->fails()){
            //quiere decir que no estan correctos
            return redirect('formularios.Formubenefi')
              ->withInput()
              ->withErrors($validator);
          }else{

              comida::create([
                'Id_bene'=>$req->idbo,
                'Nombre'=>$req->nombre,
                'Domicilio'=>$req->domicilio,
                'Fecha'=>$req->fecha,
                'Nota'=>$req->nota


              ]);
              return redirect()->to('/admin/Formubenefi/'.$req->idbo)
              ->with('mensaje','datos agregados');
}
}
}
