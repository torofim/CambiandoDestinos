<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Beneficiarios</title>
  </head>
  <body >
      @include('layouts.nav')
      <div class="main">
        <div class="panel panel-default" style="background-color:transparent;">
            <div class="panel-body cold-md-2" id="sepa">

          </div>

        </div>
        <div class="panel2 panel-default col-xs-12 ">
          <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">
            Fundacion Cambiando Destinos
          </div>
        </div>

        <div class="col-md-12 contenida" >
          <div class="acordiona" style="height:inherit;">


          <button class="accordion">Datos Personales</button>
  <div class="panel1">
    @include('datospersonales')

  </div>

  <button class="accordion">Centro de Salud</button>
  <div class="panel1">
    @include('formularios.centrosalud')
</div>
  <button class="accordion">Discapacidad</button>
  <div class="panel1">
    @include('formularios.discapacidad')
  </div>
  <button class="accordion">Estatus</button>
  <div class="panel1">
    @include('formularios.estatus')
  </div>
  <button class="accordion">Tutor</button>
  <div class="panel1">
    @include('formularios.tutor')
  </div>
  <button class="accordion">Evaluacion</button>
  <div class="panel1">
    @include('formularios.evaluacion')
  </div>
  <button class="accordion">Archivos en Imagen</button>
  <div class="panel1">
    @include('archivo')

  </div>

</div>
        </div>


        <script>
        var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel1 = this.nextElementSibling;
      if (panel1.style.maxHeight){
        panel1.style.maxHeight = null;
      } else {
        panel1.style.maxHeight = panel1.scrollHeight + "px";
      }
    });
  }
        </script>
  </body>
</html>
