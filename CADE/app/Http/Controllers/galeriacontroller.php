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
      
    }







 ?>
