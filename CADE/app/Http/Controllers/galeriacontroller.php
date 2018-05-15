<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class galeriacontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros=\DB::table('imagenes')
      //->where('Id','=','1');
      ->orderby('Id','desc')
      //->take(10)
      ->get();

      return view('paginaprincipal')
      ->with('img',$registros);

    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'imagen'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/')
          ->withInput()
          ->withErrors($validator);
      }else{
        $nombreImg=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Imagen->move(public_path('/img/galeria'),$nombreImg);
        User::create([
          'imagen'=>$nombreImg,

        ]);
        return redirect()->to('/')
        ->with('mensaje','Imagen agregada');
      }
      dd($req->nombre);
    }
    public function edit(Request $req){
      $usuario=User::find($req->id);
      $usuario->imagen=$req->nombreimagen;

      $usuario->save();

      return redirect()->to('/admin/usuarios')
      ->with('mensaje','Usuario Modificado');
    }//edit


}



 ?>
