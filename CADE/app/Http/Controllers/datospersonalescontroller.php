<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Datos_personales;
use App\Entrega_inventario;
use App\Inventario;
class datospersonalescontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      $registros=\DB::table('datos_personales')
      //->where('Id','=','1');

      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();

        $registros3=\DB::table('entregas_inventario')
      //  ->where('','=',$Id)
        ->orderby('Id','desc')
        //->take(10)
        ->get();
        $registros2=\DB::table('inventario')
        //
        //->where('Id','=','1');
        ->orderby('Id_inv','desc')
        //->take(10)
        ->get();




      return view('dashboardbeneficiarios')
      ->with('datosper',$registros)
      ->with('inv',$registros2)
        ->with('resultado3',$registros3);
    }
    public function store(Request $req){

      $validator =Validator::make($req->all(),[
        'nombre'=>'max:255',
        'ap_p'=>'max:255',
        'ap_m'=>'max:255',
        'fecha_na'=>'max:255',
        'lugar_na'=>'max:255',
        'edad'=>'max:255',
        'sexo'=>'max:255',
        'edo_civil'=>'max:255',
        'tipo_sangre'=>'max:255',
        'peso'=>'max:255',
        'estatura'=>'max:255',
        'talla'=>'max:255',
        'calzado'=>'max:255',
        'domicilio'=>'max:255',
        'cp'=>'max:255',
        'localidad'=>'max:255',
        'tel'=>'max:255',


      ]);
      $validator1 =Validator::make($req->all(),[
        'Id_bene'=>'max:255',
        'Nombre_bene'=>'max:255',
        'Articulo_entregado'=>'max:255',
        'Cantidad'=>'max:255',
        'Tipo'=>'max:255',
        'Fecha_entrega'=>'max:255',
        'Notas'=>'max:255'


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
          'Lugar_nacimiento'=>'',
          'Edad'=>$req->edad,
          'Sexo'=>'',
          'Curp'=>'',
          'Edo_civil'=>'',
          'Tipo_sangre'=>'',
          'Peso'=>'',
          'Estatura'=>'',
          'Talla'=>'',
          'Calzado'=>'',
          'Domicilio'=>$req->domicilio,
          'Cp'=>'',
          'Localidad'=>'',
          'Tel'=>''
        ]);
        Entrega_inventario::create([
          'Id_bene'=>$req->idin,
          'Nombre_bene'=>$req->nombrebene,
          'Articulo_entregado'=>$req->articulo,
          'Cantidad'=>$req->cant,
          'Tipo'=>$req->tipo,
          'Fecha_entrega'=>$req->fecha,
          'Notas'=>$req->notas
        ]);
        return redirect()->to('/admin/benef')
        ->with('mensaje','datos agregados');

      }
      dd($req->nombre);
    }
    //Editar
    public function edit(Request $req){
      $usuario=Datos_personales::find($req->id);
      $usuario->Nombre=$req->nameEditar;
      $usuario->Apellido_p=$req->appEditar;
      $usuario->Apellido_m=$req->apmEditar;
      $usuario->Fecha_nacimiento=$req->fEditar;
      $usuario->Lugar_nacimiento=$req->lEditar;
      $usuario->Edad=$req->eEditar;
      $usuario->Sexo=$req->sEditar;
      $usuario->Curp=$req->curpEditar;
      $usuario->Edo_civil=$req->edoEditar;
      $usuario->Tipo_sangre=$req->tiEditar;
      $usuario->Peso=$req->peEditar;
      $usuario->Estatura=$req->esEditar;
      $usuario->Talla=$req->taEditar;
      $usuario->Calzado=$req->caEditar;
      $usuario->Domicilio=$req->doEditar;
      $usuario->Cp=$req->cpEditar;
      $usuario->Localidad=$req->locEditar;
      $usuario->Tel=$req->telEditar;
      $usuario->save();
      //dd($usuario);
      return redirect()->to('/admin/Formubenefi/'.$req->id)
      ->with('mensaje','Usuario Modificado');
    }//edit
}
