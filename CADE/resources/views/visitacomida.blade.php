<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="main" style="height:100%;overflow-y:hidden;">
      <br>
      <br>
      <div class="panel2 panel-default col-xs-12 ">
        <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">
          Fundacion Cambiando Destinos
        </div>
      </div>
      <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:100%;">
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
        <div class="row">

          <table class="table table-condensed col-md-12" style="margin-left:0%;">
            <p>Comida Caliente</p>
            <thead>
              <tr style="border:white solid;background-color:#4c4f54;">
                <td style="border-right: white solid;">Nombre Beneficiario</td>
                <td style="border-right:white solid;">Domicilio</td>
                <td style="border-right:white solid;">Fecha</td>
                <td style="border-right:white solid;">Notas</td>
                <td style="border-right:white solid;"></td>
              </tr>
            </thead>
            <tbody id="tbody">
              <tr>
                @forelse($perros8 as $usu)
                <td>{{$usu->Nombre}}</td>
                <td>{{$usu->Domicilio}}</td>
                <td>{{$usu->Fecha}}</td>
                <td>{{$usu->Nota}}</td>
                <td></td>


                </tr>
              @empty
              <p>sin registro</p>
              @endforelse
            </tbody>
          </table>
  <table class="table table-condensed col-md-12" style="margin-left:0%;">
    <p>Visita Domiciliaria</p>
    <thead>
      <tr style="border:white solid;background-color:#4c4f54;">
        <td style="border-right: white solid;">Tipo de Examen</td>
        <td style="border-right:white solid;">Puntuacion</td>
        <td style="border-right:white solid;"></td>
        <td style="border-right:white solid;"></td>
        <td style="border-right:white solid;"></td>
      </tr>
    </thead>
    <tbody id="tbody">
      <tr>
        @forelse($perros7 as $usu)
        <td>{{$usu->Nombre}}</td>
        <td>{{$usu->Domicilio}}</td>
        <td>{{$usu->Fecha}}</td>
        <td></td>
        <td></td>


        </tr>
      @empty
      <p>sin registro</p>
      @endforelse
    </tbody>
  </table>
</div>
</div>
</div>
</div>
  </body>
</html>
