<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporte</title>
  <link href="{{ asset('css/reporte.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <div class="col-lg-8">
      <h1><img src="./img/fclogo1.png" alt="" style="height:150px;width:20%;"> Reporte Locochon </h1>
    </div>


    <div class="col-lg-4">
      <span>Fecha{{date('Y-m-d h:m:s')}}</span>
    </div>
    <h2>Viejitos atendidos</h2>
    <table class="table table-striped col-md-4 ">
      <thead>
        <tr>
          <td>Id</td>
          <td>Nombre</td>
          <td>Apellido Paterno</td>
          <td>Apellido Materno</td>

        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Fenustiono</td>
          <td>Calanza</td>
          <td>Traponsi</td>
        </tr>
      </tbody>

    </table>

    <div class="container">
      Firma <br>
      <div style="border-top:1px solid black">

      </div>
    </div>



  </body>
</html>
