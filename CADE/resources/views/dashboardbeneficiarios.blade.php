<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
  @include('layouts.nav')
  <div class="main">
    <div class="panel panel-default">
        <div class="panel-body cold-md-2" id="sepa">
        </div>
    </div>
    <div class="contenedor">
    <!-- Viene de Usuarios.blade-->
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
          <h2 style="margin-left:1.5%;">beneficiarios</h2>
          <table class="table table-condensed" style="margin-left:1.5%;">
            <thead>
              <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Editar</td>
                <td>Eliminar</td>
              </tr>
            </thead>
            <tbody id="tbody">
              <tr>
                @forelse($perros as $usu)
                <td>{{$usu->Id}}</td>
                <td>{{$usu->Nombre}}</td>
                <td>{{$usu->Apellido_p}}</td>
                <td><button type="button" class="btn btn-info btn-lg btnEdit"
                  data-toggle="modal" data-target="#myModal"
                  data-Nombre="{{$usu->Nombre}}"
                  data-Apellido="{{$usu->Apellido_p}}"
                  data-id="{{$usu->Id}}">Editar </button></td>
                <td>
                </td>
                </tr>
              @empty
              <p>sin registro</p>
              @endforelse
            </tbody>
          </table>
    </div>

  </div>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>
