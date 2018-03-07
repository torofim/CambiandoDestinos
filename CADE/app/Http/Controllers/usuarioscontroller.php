<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class usuarioscontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('usuarios');
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'correo'=>'required|email',
        'p1'=>'required|max:255',
        'p2'=>'required|max:255',
        'Imagen'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Nivel'=>'required'
      ]);
      if($validator->fails()){
        //quiere decir que no estan correctos
        return redirect('/admin/usuarios')
          ->withInput()
          ->withErrors($validator);
      }else{
        $nombreImg=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Imagen->move(public_path('/img/usuarios'),$nombreImg);
        User::create([
          'name'=>$req->nombre,
          'email'=>$req->correo,
          'password'=>bcrypt($req->p1),
          'imgperfil'=>$nombreImg,
          'privilegios'=>$req->Nivel
        ]);
        return redirect()->to('/admin/usuarios')
        ->with('mensaje','usuario agregado');
      }
      dd($req->nombre);
    }
}
