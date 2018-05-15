<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Formularios</title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="main">
      <div class="panel panel-default" style="background-color:transparent;">
          <div class="panel-body cold-md-2" id="sepa">
        </div>
      </div>
      <div class="panel2 panel-default col-xs-12 ">
        <div class="panel-body2 titula" style="border-bottom:groove; background-color:transparent;">
          Dashboard
        </div>
      </div>
      <label id="lab">Buscar por:</label>
      <div class="row col-md-12">
        <input type="text" name="" value="" class="inputin col-md-2" placeholder="Nombre de Usuario">
      </div>

      <div class="row">
        <button type="button" name="button" class="botonsin col-md-2">Generar Reporte</button>
      </div>
      <div class="relleno col-md-12" style="height:520px">

      </div>
    </div>

    

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
