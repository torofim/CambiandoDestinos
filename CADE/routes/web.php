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
Route::get('/dashboard',function(){
  return view ('dashboard');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.'],function(){
  Route::get('/',function(){return "yeah";});
  Route::get('/usuarios','usuarioscontroller@index')->name('usuarios');
<<<<<<< HEAD
  Route::get('/archivos','archivoscontroller@index')->name('archivos');

=======
  Route::get('/archivo','archivoscontroller@index')->name('archivo');
>>>>>>> 3eb0328b1d5685c575c685243a2c6ce9c0c69f36
  Route::resource('usuarios','usuarioscontroller');
  Route::resource('archivos','archivoscontroller');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
