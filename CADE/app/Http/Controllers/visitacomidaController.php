<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class visitacomidaController extends Controller
{
    //
    public function index(){
      $registros7=\DB::table('visitas')
    //  ->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
      $registros8=\DB::table('tabla_comida')

      //->where('Id_bene','=',$Id)
      ->orderby('Id_bene','desc')
      //->take(10)
      ->get();
      return view('/visitacomida')
      ->with('regvisita',$registros7)
      ->with('cocal',$registros8);
}
}
