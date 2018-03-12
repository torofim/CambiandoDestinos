<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/principal', function () {
    return view('paginaprincipal');
});
Route::get('/Login',function(){
    return view('login');
Route::get('/usuarios',function(){
    return view('usuarios');
});
});
Route::group(['prefix'=>'admin', 'as'=>'admin.'],function(){
  Route::get('/',function(){return "yeah";});
  Route::get('/usuarios','usuarioscontroller@index')->name('usuarios');
  Route::get('/archivos','archivoscontroller@index')->name('archivos');
  Route::resource('usuarios','usuarioscontroller');
  Route::resource('archivos','archivoscontroller');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
