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
<<<<<<< HEAD
      <div class="folio">@forelse($datosper1 as $usua)
        Folio No. <label>
        {{$usua->Id_bene}}
      </label>
      @empty
      <p>sin registro</p>
      @endforelse
=======
      <div class="folio">
        Folio No. <label>0001</label>
>>>>>>> parent of ee9bdcd... asda
      </div>
      <div class="fecha">
        Fecha:<label id="fesha" class="fecha">

        </label>
      </div>
      <div class="foto">

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
              <label class="tnom">@if(count($perros)==0)
                {{Form::text('nameEditar','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                @else
                {{Form::text('nameEditar',$perros[0]->Nombre,array('class'=>'form-control','placeholder'=>'Nombre') )}}
                @endif</label>
            <div class="nombre">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Nombre}}">

              </input>
              @empty

              @endforelse
            </div>
            <label class="tapp">Apellido Paterno</label>
            <div class="app">
              <input class="col-md-12" type="text" name="" value="" >
            </div>
            <label class="tapm">Apellido Materno</label>
            <div class="apm">
              <input class="col-md-12" type="text" name="" value="" >
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

      <div class="tiposangre">
        Tipo de Sangre
      </div>
      <div class="sangre">
        <input type="text" name="" value="">
      </div>
      <div class="tpeso">
        Peso
      </div>
      <div class="peso">
        <input type="text" name="" value="">
      </div>
      <div class="testatura">
        Estatura
      </div>
      <div class="estatura">
        <input type="text" name="" value="">
      </div>
      <div class="ttalla">
        Talla
      </div>
      <div class="talla">
        <input type="text" name="" value="">
      </div>
      <div class="tcalzado">
        Calzado
      </div>
      <div class="calzado">
        <input type="text" name="" value="">
      </div>
      <div class="trehab">
      Recibe rehabilitacion
      </div>
      <div class="rehabradios">
        <input type="radio" name="" value="">Si
        <br>
        <input type="radio" name="" value="">No
      </div>
      <div class="tdonde">
        Donde
      </div>
      <div class="donde">
        <input type="text" name="" value="">
      </div>
      <div class="tcual">
        Cual
      </div>
      <div class="cual">
        <input type="text" name="" value="">
      </div>

      <div class="tapoyo">
      Cuenta con apoyo funcional
      </div>
      <div class="apoyofun">
        <input type="radio" name="" value="">Si
        <br>
        <input type="radio" name="" value="">No
      </div>
      <div class="tcualapo">
        Cual
      </div>
      <div class="apoyocual">
        <input type="text" name="" value="">
      </div>

      <div class="treq">
        Requiere apoyo funcional
      </div>
      <div class="req">
        <input type="radio" name="" value="">Si
        <br>
        <input type="radio" name="" value="">No
      </div>
      <div class="tcualapoyo">
        Cual
      </div>
      <div class="reqcual">
        <input type="text" name="" value="">
      </div>
      <!-- FALTA LOS RADIOS DE CUAL TIPO DE APOYO FUNCIONAL Y DATOS DE DOMICILIO Y TELEFONOS-->
      <div class="titulocual">
        Cual
      </div>
      <div class="tres1">
        <input type="radio" name="" value="">Andador
        <br>
        <input type="radio" name="" value="">Baston
        <br>
        <input type="radio" name="" value="">Baston invidente
        <br>
        <input type="radio" name="" value="">Muletas
      </div>
      <div class="tres2">
        <input type="radio" name="" value="">Protesis
        <br>
        <input type="radio" name="" value="">Silla electrica
        <br>
        <input type="radio" name="" value="">Silla infantil
        <br>
        <input type="radio" name="" value="">Silla PCI
      </div>
      <div class="tres3">
        <input type="radio" name="" value="">Silla de ruedas
        <br>
        <input type="radio" name="" value="">Silla soporte
        <br>
        <input type="radio" name="" value="">Silla baño
        <br>
        <input type="text" name="" value="">Otro
      </div>
      <div class="tdireccion">
        Dirección
      </div>
      <div class="direccion">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="tcolonia">
        Colonia
      </div>
      <div class="colonia">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="tmunicipio">
        Municipio
      </div>
      <div class="municipio">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="tcp">
        Codigo postal
      </div>
      <div class="cp">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="tlocal">
        Localidad
      </div>
      <div class="localidad">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="ttel">
        Telefono
      </div>
      <div class="telefono">
        <input type="text" name="" value="" placeholder="">
      </div>
      <div class="tcel">
        Celular
      </div>
      <div class="cel">
        <input type="text" name="" value="" placeholder="">
      </div>

      <div class="tjubilado">
        Jubilado o Pensionado
      </div>
      <div class="jubilado">
        <input type="radio" name="" value="">Si
        <input type="radio" name="" value="">No
      </div>
      <div class="tsm">
        Servicio Medico
      </div>
      <div class="sm">
        <input type="radio" name="" value="">Si
        <br>
        <input type="radio" name="" value="">No
      </div>
      <div class="sm2">
        <input type="radio" name="" value=""> IMSS
        <br>
        <input type="radio" name="" value=""> ISSTE
      </div>
      <div class="sm3">
        <input type="radio" name="" value="">Seguro popular
        <br>
        <input type="radio" name="" value="">Pensiones
      </div>
      <div class="sm4">
        <input type="radio" name="" value="">ICHISAL
        <br>
        <input type="radio" name="" value="">Dispensario
      </div>
      <div class="tdtutor">
        Datos Tutor
      </div>
      <div class="tnombret">
        Nombre
      </div>
      <div class="nombret">
        <input type="text" name="" value="">
      </div>
      <div class="tapellidos">
        Apellidos
      </div>
      <div class="apellidost">
        <input type="text" name="" value="">
      </div>
      <div class="apellidost2">
        <input type="text" name="" value="">
      </div>
      <div class="ttutor">
        Tutor
      </div>
      <div class="radiotutor">
        <input type="radio" name="" value="">Padre
        <br>
        <input type="radio" name="" value="">Madre
      </div>
      <div class="texttutor">
        <input type="text" name="" value="">
      </div>

      <div class="tcurp">
        CURP
      </div>
      <div class="curptutor">
        <input type="text" name="" value="">
      </div>
      <div class="trfc">
        RFC
      </div>
      <div class="rfctutor">
        <input type="text" name="" value="">
      </div>

  </body>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
}

if(mm<10) {
    mm = '0'+mm
}
today = dd + '/' + mm + '/' + yyyy;
document.getElementById('fesha').value=today;

document.write(today);
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
