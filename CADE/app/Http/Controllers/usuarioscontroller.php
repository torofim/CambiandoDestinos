<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioscontroller extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
      return view('usuarios');
    }
    public function store(){
      dd('YEAH');
    }
}
