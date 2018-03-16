<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regiscontroller extends Controller
{

    /**
     * Create a new controller instance.
     *
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
}
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
 public function index()
 {
     return view('registrados');
 }
 public function graficos()
 {
   return view('dashboardgraficos');
 }
}
