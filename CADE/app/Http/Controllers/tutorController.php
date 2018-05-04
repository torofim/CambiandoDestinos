<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tutorController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }

    public function index($Id){
      $registros4=\DB::table('tutor')
      ->where('Id','=',$Id)
      ->orderby('Id','desc')
      //->take(10)
      ->get();
    //  dd($registros);
      return view('formularios.tutor')
      ->with('perros4',$registros4);
    }
}
