<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Actualizar Beneficiarios</title>
  </head>
  <body  >
      @include('layouts.nav')
      <div class="main">
        <div class="panel panel-default" style="background-color:transparent;">
            <div class="panel-body cold-md-2" id="sepa">

          </div>

        </div>
        <div class="panel2 panel-default col-xs-12 ">
          <div class="panel-body2 col-xs-12" style="border-bottom:groove; background-color:transparent;">
            <label class="titula col-xs-12">Fundacion Cambiando Destinos</label>
          </div>
        </div>

        <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:5%;height:100%;">
        <button class="tablink" style="width:50%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Editar Informacion de {{$datosper[0]->Nombre}} {{$datosper[0]->Apellido_p}} {{$datosper[0]->Apellido_m}}</button>
        <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')">Informacion Completa {{$datosper[0]->Nombre}} {{$datosper[0]->Apellido_p}} {{$datosper[0]->Apellido_m}}</button>


<div id="benefi" class="tabcontent">

          <div class="acordiona" style="height:inherit;margin-top:0;">


          <button class="accordion">Datos Personales</button>
  <div class="panel1">
    @include('formularios.datospersonales')

  </div>

  <button class="accordion">Centro de Salud</button>
  <div class="panel1">
    @include('formularios.centrosalud')
</div>

<button class="accordion">Tipo Discapacidad</button>
<div class="panel1">
@include('formularios.tipodiscapacidad')

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
  <button class="accordion">Comida Caliente</button>
  <div class="panel1">
    @include('formularios.comidaca')

  </div>
  <button class="accordion">Visita Domiciliaria</button>
  <div class="panel1">
    @include('formularios.visitadom')

  </div>
  <button class="accordion">Archivos en Imagen</button>
  <div class="panel1">
    @include('archivo')

  </div>

</div>

        </div>


        <div id="agregar" class="tabcontent">
          @include('tablabenefitodo')
              </div>

<style media="screen">
  td{
    width: 20%;

  }
</style>

              <script type="text/javascript">
              function openPage(pageName,elmnt,color) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablink");
              for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].style.backgroundColor = "";
              }
              document.getElementById(pageName).style.display = "block";
              elmnt.style.backgroundColor = color;

              }
              // Get the element with id="defaultOpen" and click on it
              document.getElementById("defaultOpen").click();


              $('.divfade').fadeOut(2000);
              </script>
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
