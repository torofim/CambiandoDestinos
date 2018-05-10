<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Beneficiarios</title>
  </head>
  <body  >
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

        <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:5%;height:100%;">
        <button class="tablink" style="width:50%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Editar Informacion del Beneficiario</button>
        <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')" >Informacion Completa Beneficiario</button>


<div id="benefi" class="tabcontent">

          <div class="acordiona" style="height:inherit;margin-top:0;">


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


        <div id="agregar" class="tabcontent">
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
              <h2 style="margin-left:1%;"></h2>
              <table class="table table-condensed col-md-12" style="margin-left:0%;">
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Apellido</td>
                    <td>Fecha Nacimiento</td>
                    <td>Lugar Nacimiento</td>
                    <td>Edad</td>
                    <td>Sexo</td>

                  </tr>
                </thead>
                <tbody id="tbody">
                  <tr>
                    @forelse($perros as $usu)
                    <td>{{$usu->Id_bene}}</td>
                    <td>{{$usu->Nombre}}</td>
                    <td>{{$usu->Apellido_p}}</td>
                    <td>{{$usu->Apellido_m}}</td>
                    <td>{{$usu->Fecha_nacimiento}}</td>
                    <td>{{$usu->Lugar_nacimiento}}</td>
                    <td>{{$usu->Edad}}</td>
                    <td>{{$usu->Sexo}}</td>

                    <td></td>
                    <td>
                    </td>
                    </tr>
                  @empty
                  <p>sin registro</p>
                  @endforelse
                </tbody>
              </table>
              <table class="table table-condensed col-md-12" style="margin-left:0%;">
                <thead>
                  <tr>

                    <td>Estado Civil</td>
                    <td>Tipo de Sangre</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Apellido</td>
                    <td>Editar</td>
                    <td>Eliminar</td>

                  </tr>
                </thead>
                <tbody id="tbody">
                  <tr>
                    @forelse($perros as $usu)

                    <td>{{$usu->Edo_civil}}</td>
                    <td>{{$usu->Tipo_sangre}}</td>
                    <td>{{$usu->Peso}}</td>
                    <td>{{$usu->Estatura}}</td>
                    <td>{{$usu->Talla}}</td>
                    <td>{{$usu->Calzado}}</td>
                    <td>{{$usu->Domicilio}}</td>
                    <td>{{$usu->Cp}}</td>
                    <td>{{$usu->Localidad}}</td>
                    <td>{{$usu->Tel}}</td>
                    <td></td>
                    <td>
                    </td>
                    </tr>
                  @empty
                  <p>sin registro</p>
                  @endforelse
                </tbody>
              </table>

              <table class="table table-condensed col-md-12" style="margin-left:0%;">
                <thead>
                  <tr>

                    <td>Edad </td>
                    <td>Peso</td>
                    <td>Pas</td>
                    <td>Pad</td>
                    <td>Fecha</td>


                  </tr>
                </thead>
                <tbody id="tbody">
                  <tr>
                    @forelse($perros6 as $usu)

                    <td>{{$usu->Edad}}</td>
                    <td>{{$usu->Peso}}</td>
                    <td>{{$usu->Pas}}</td>
                    <td>{{$usu->Pad}}</td>
                    <td>{{$usu->Fecha_centrosalud}}</td>

                    <td></td>
                    <td>
                    </td>
                    </tr>
                  @empty
                  <p>sin registro</p>
                  @endforelse
                </tbody>
              </table>
              <table class="table table-condensed col-md-12" style="margin-left:0%;">
                <thead>
                  <tr>

                    <td>Discapacidad </td>
                    <td>Causa Discapacidad</td>
                    <td>Rehabilitacion</td>
                    <td>Lugar de la Rehabilitacion</td>
                    <td>Tipo de Rehabilitacion</td>
                    <td>Apoyo Funcional</td>
                    <td>Requiere Apoyo Funcional</td>


                  </tr>
                </thead>
                <tbody id="tbody">
                  <tr>
                    @forelse($perros2 as $usu)

                    <td>{{$usu->Discapacidad}}</td>
                    <td>{{$usu->Rehabilitacion}}</td>
                    <td>{{$usu->Lugar_de_rehabilitacion}}</td>
                    <td>{{$usu->Lugar_de_rehabilitacion}}</td>
                    <td>{{$usu->Tipo_rehabilitacion}}</td>
                    <td>{{$usu->Apoyo_funcional}}</td>
                    <td>{{$usu->Requiere_apoyo_funcional}}</td>

                    <td></td>
                    <td>
                    </td>
                    </tr>
                  @empty
                  <p>sin registro</p>
                  @endforelse
                </tbody>
              </table>
              <table class="table table-condensed col-md-12" style="margin-left:0%;">
                <thead>
                  <tr>

                    <td>Discapacidad </td>
                    <td>Causa Discapacidad</td>
                    <td>Rehabilitacion</td>
                    <td>Lugar de la Rehabilitacion</td>
                    <td>Tipo de Rehabilitacion</td>
                    <td>Apoyo Funcional</td>
                    <td>Requiere Apoyo Funcional</td>


                  </tr>
                </thead>
                <tbody id="tbody">
                  <tr>
                    @forelse($perros2 as $usu)

                    <td>{{$usu->Discapacidad}}</td>
                    <td>{{$usu->Rehabilitacion}}</td>
                    <td>{{$usu->Lugar_de_rehabilitacion}}</td>
                    <td>{{$usu->Lugar_de_rehabilitacion}}</td>
                    <td>{{$usu->Tipo_rehabilitacion}}</td>
                    <td>{{$usu->Apoyo_funcional}}</td>
                    <td>{{$usu->Requiere_apoyo_funcional}}</td>

                    <td></td>
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
            </div>
              </div>

<style media="screen">
  td{
    width: 15%;
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
