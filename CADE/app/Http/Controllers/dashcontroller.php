<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontroller extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return void
   */
  public function index()
  {
     return view('dashboard');
  }
  public function inicio(){ return view('dashboard');}
}
