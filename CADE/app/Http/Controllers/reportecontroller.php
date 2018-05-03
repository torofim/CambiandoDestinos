<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reportecontroller extends Controller
{
    //
    public function index(){
      return View('reporte');
    }
}
