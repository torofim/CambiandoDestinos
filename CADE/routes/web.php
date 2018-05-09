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
    return view('pagina');
});

Route::get('/taller', function () {
    return view('taller');
});
Route::get('/visita', function () {
    return view('visita');
});
Route::get('/cultura', function () {
    return view('cultura');
});
Route::get('/comida', function () {
    return view('comida');
});
Route::get('/reporte',function(){
  return view('reporte');
});
Route::get('/Login',function(){
    return view('login');
});
/*Route::get('/inventario',function(){
  return view('inventario');
});*/

Route::get('/reporte', function () {
    return view('reporte');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.'],function(){
  //Route::get('/',function(){return "yeah";});
  Route::get('/usuarios','usuarioscontroller@index')->name('usuarios');
  Route::get('/archivos','archivoscontroller@index')->name('archivos');
  Route::get('/estatus/{Id}','BooleanosController@index')->name('estatus');
  Route::get('/centrosalud/{Id}','Centro_saludcontroller@index')->name('centrosalud');
  Route::get('/datospersonales','datospersonalescontroller@index')->name('datospersonales');
  Route::get('/evaluacion/{Id}','EvaluacionController@index')->name('evaluacion');
  Route::get('/inventario_e','inventario_econtroller@index')->name('inventario_e');
  Route::get('/inventario_m','inventario_mcontroller@index')->name('inventario_m');
  Route::get('/comida','comidacaontroller@index')->name('comida');
  Route::get('/taller','tallercontroller@index')->name('taller');
  Route::get('/tutor/{Id}','tutorController@index')->name('tutor');
  Route::get('/visitas','visitascontroller@index')->name('visitas');
  Route::post('/usuarios/buscar','usuarioscontroller@buscar');
  Route::get('/formularios','dashcontroller@form');
  Route::get('/inventario','inventarioController@index')->name('inventario');
  Route::get('/Formubenefi/{Id}','formubeneficontroller@index')->name('Formubenefi');
  Route::get('/discapacidad/{Id}','discapacidadController@index')->name('discapacidad');

  // Estos son los Routes de los DASH
  Route::get('/dash/{mes}','dashcontroller@index');
  Route::get('/graficos/{mes}/{year}','graficoscontroller@index');


  Route::get('/benef','datospersonalescontroller@index')->name('benef');
  Route::get('/registrados','regiscontroller@index')->name('registradosf');
  Route::resource('/graficos','graficoscontroller');
  Route::resource('dash','dashcontroller');
  Route::resource('beneficiarios','dashcontroller');
  Route::resource('registrados','regiscontroller');
  Route::resource('Graficos','regiscontroller');
  Route::resource('discapacidad','discapacidadController');
  Route::resource('inventario','inventarioController');
  Route::resource('usuarios','usuarioscontroller');
  Route::resource('archivos','archivoscontroller');
  Route::resource('centrosalud','Centro_Saludcontroller'); //Este tambien ya esta
  Route::resource('datospersonales','datospersonalescontroller');
  Route::resource('estatus','BooleanosController');
  Route::resource('tutor','tutorController');
  Route::resource('evaluacion','EvaluacionController'); //ESTE YA ESTA

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
