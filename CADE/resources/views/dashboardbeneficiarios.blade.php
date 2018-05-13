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

  <div class="main" style="height:100%;overflow-y:hidden;">
  <!--<div class="panel panel-default">
        <div class="panel-body cold-md-2" id="sepa">
        </div>

    </div>-->

    <br>
    <br>
    <div class="panel2 panel-default col-xs-12 ">
      <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">
        Fundacion Cambiando Destinos
      </div>
    </div>
    <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:auto;">
    <!-- Viene de Usuarios.blade-->


    <button class="tablink" style="width:50%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Beneficiario</button>
    <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')" >Agregar Beneficiario</button>


    <div id="benefi" class="tabcontent">
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
                <td>Editar</td>
                <td>Eliminar</td>
              </tr>
            </thead>
            <tbody id="tbody">
              <tr>
                @forelse($perros as $usu)
                <td>{{$usu->Id_bene}}</td>
                <td>{{$usu->Nombre}}</td>
                <td>{{$usu->Apellido_p}}</td>
                <td>{{$usu->Apellido_m}}</td>
                <td><button type="button" class="btn btn-info btn-lg " onclick="location.href='/admin/Formubenefi/{{$usu->Id_bene}}'"
                   >Editar </button></td>
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

    <div id="agregar" class="tabcontent">
      <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Datos Personales</div>

      <div class="card-body">
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
        {{Form::open(array('url'=>'/admin/datospersonales','files'=>true))}}
          <div class="input=-group col-md-4">
            <label for="nombre">Nombre</label><br>
            {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
          </div>
          <div class="input=-group col-md-4">
            <label for="nombre">Apellido Paterno</label><br>
            {{Form::text('ap_p','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
          </div>
          <div class="input=-group col-md-4">
            <label for="nombre">Apellido materno</label><br>
            {{Form::text('ap_m','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
          </div>
          <div class="input=-group col-md-4">
            <label for="nombre">Fecha nacimiento </label><br>
            {{Form::date('fecha_na','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
          </div>
          <div class="input=-group col-md-4">
            <label for="nombre">Edad </label><br>
            {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
          </div>
          <div class="input=-group col-md-4">
            <label for="nombre">Domicilio </label><br>
            {{Form::text('domicilio','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}
          </div>
          <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
            {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
          </div>
        {{Form::close()}}
      </div>
        </div>



    </div>









  </div>

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
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>
