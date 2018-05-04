<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title>Inventario</title>
  </head>
  <body>
    @include('layouts.nav')
    <h1>aqui va el inventario</h1>
    <div class="card-body" >
      @if($errors->any())
        <div class="alert alert-warning alert-dismissable">
          <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
          </ul>
        </div>
      @endif
      @if(session()->has('mensaje'))
        <div class="alert alert-success">
          {{session()->get('mensaje')}}
        </div>
      @endif
      <!-- ESTA ES LA TABLA ORIGINAL PARA POSTERIORES USOS-->
      <div class="row">
        <h2 style="margin-left:1.5%;">usuarios</h2>
        <table class="table table-condensed" style="margin-left:1.5%;">
          <thead>
            <tr>
              <td>Id</td>
              <td>Nombre</td>
              <td>Email</td>
              <td>Editar</td>
              <td>Eliminar</td>
            </tr>
          </thead>
          
        </table>
      </div>








    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
