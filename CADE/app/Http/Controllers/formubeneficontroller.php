<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class formubeneficontroller extends Controller
{
    //
    public function index(){
      return view('/admin/Formubenefi');
    }
}
