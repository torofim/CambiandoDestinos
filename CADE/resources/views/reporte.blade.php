<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="{{ asset('css/reporte.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
    <div id="Todo">
      <form class="" action="index.html" method="post">
        <div class="titulo">Expediente Beneficiario</div>
      <div class="folio">
        Folio No. <label>0001</label>
      </div>
      <div class="fecha">
        Fecha:<label>dd/mm/yy</label>
      </div>
            <div class="requisitos">
              Requisitos
            </div>
            <div class="uno">
              <br>
              <input class="inp1" type="radio" name="" value="">Foto cuerpo e infantil
            </div>
            <br>
            <div class="dos">
              <input class="inp1" type="radio" name="" value="">Certificado/Credencial Discapacidad
            </div>

            <div class="tres">
              <input class="inp1" type="radio" name="" value="">CURP/Comprobante Domicilio
            </div>
              <label class="tnom">Nombres</label>
            <div class="nombre">

              <input class="col-md-12" type="text" name="" value="" placeholder="Nombres">
            </div>
            <label class="tapp">Apellido Paterno</label>
            <div class="app">
              <input class="col-md-12" type="text" name="" value="" placeholder="Apellido Paterno">
            </div>
            <label class="tapm">Apellido Materno</label>
            <div class="apm">
              <input class="col-md-12" type="text" name="" value="" placeholder="Apellido Materno">
            </div>

            <div class="primera">
              Fecha de nacimiento
            </div>
            <div class="segunda">
              Lugar de nacimiento
            </div>
            <div class="tercera">
              CURP
            </div>

            <div class="">
              <input class="fechadatos" type="number" name="" value="" placeholder="dd/mm/yy">
            </div>
            <div class="">
              <input class="lugarna" type="text" name="" value="" placeholder="Lugar de nacimiento">
            </div>
            <div class="">
              <input class="curp" class="col-md-4" type="text" name="" value="" placeholder="AAAA000000AAAAAA00">
            </div>


            <!--SIN DAR ESTILOS AUN-->

        <div class="ed">
          Edad
        </div>
        <div class="estciv">
          Estado Civil
      </div>
        <div class="sex">
          Sexo
        </div>


      <div class="">
        <input class="edad" name="" value="">
      </div>
      <div class="">
        <input class="sexo" name="" value="" type="">
      </div>
      <div class="estadocivil">
        <input name="" value="">
      </div>

      <div class="tdisc">
        Discapacidad
      </div>

      <div class="audvis">
        <input class="" type="radio" name="" value="">Auditiva
        <br>
        <input class="" type="radio" name="" value="">Visual
      </div>
      <div class="intmus">
        <input class="" type="radio" name="" value="">Musculo Esqueletica
        <br>
        <input class="" type="radio" name="" value="">Intelectual
      </div>
      <div class="df">
        <input class="" type="radio" name="" value="">Neuromotora
        <br>
        <input class="" type="text" name="" value="">
      </div>

      <div class="causa">
        Causa de la discapacidad
      </div>
      <div class="naen">
        <input class="" type="radio" name="" value="">Nacimiento
        <br>
        <input class="" type="radio" name="" value="">Enfermedad
      </div>
      <div class="viac">
        <input class="" type="radio" name="" value="">Violencia
        <br>
        <input class="" type="radio" name="" value="">Accidente
      </div>
      <div class="veot">
        <input class="" type="radio" name="" value="">Vejez
        <br>
        <input class="" type="text" name="" value="">
      </div>

  </body>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">
function imprimir(elemento){
  var  respaldo=$('body').html();
  var div=$("#"+elemento).clone();
  $('body').empty().html(div);
  window.print();
  $('body').html(respaldo);
}
$(document).ready(function(){
  imprimir('Todo');
});
</script>
  </body>
</html>
