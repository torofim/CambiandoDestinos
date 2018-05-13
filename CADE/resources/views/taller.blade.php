<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title>Talleres</title>
  </head>
  <body>
      @include('layouts.nav')
      <div class="main" style="height:750px;overflow-y:hidden;">

        <br>
        <br>
        <div class="panel2 panel-default col-xs-12 ">
          <div class="panel-body2 titula" style="border-bottom:groove; background-color:transparent;">
            Fundacion Cambiando Destinos
          </div>
        </div>

      <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:auto;">

        <button class="tablink" style="width:50%;" onclick="openPage('taller', this, '')" id="defaultOpen">Talleres Impartidos</button>
        <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')" >Agregar Taller</button>


        <div id="taller" class="tabcontent" style="background-color:gray ;">

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
            <div class="alert alert-success divfade" style="position:absolute;top:10%;left:40%;">
              {{session()->get('mensaje')}}
            </div>
          @endif
          <!-- ESTA ES LA TABLA ORIGINAL PARA POSTERIORES USOS-->
          <div class="row">
            <h2 style="margin-left:1%;"></h2>
            <table class="table table-condensed col-md-12" style="margin-left:0%;">
              <thead>
                <tr>
                  <td>Nombre del Taller</td>
                  <td>Tipo de Taller</td>
                  <td>Numero de Asistentes</td>
                  <td>Fecha Impartido</td>
                  <td>Lugar del Taller</td>
                  <td>Observaciones del Taller</td>
                </tr>
              </thead>
              <tbody id="tbody">
                <tr>
                  @forelse($perros10 as $usu)
                  <td>{{$usu->Nombretaller}}</td>
                  <td>{{$usu->Tipo}}</td>
                  <td>{{$usu->Cantidad}}</td>
                  <td>{{$usu->Fecha}}</td>
                  <td>{{$usu->Lugar}}</td>
                  <td>{{$usu->Notas}}</td>

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
        <div class="card-header" style="margin-bottom:2%; font-size:3rem; margin-left:1.5%;">Agregar Articulo</div>
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
                <div class="alert alert-success divfade"  style="position:absolute;top:10%;left:40%;">
                  {{session()->get('mensaje')}}
                </div>
              @endif
              {{Form::open(array('url'=>'/admin/taller','files'=>true))}}
                <div class="input=-group col-md-4">
                  <label for="nombre">Nombre del Taller</label><br>
                  {{Form::text('nombretaller','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                </div>
                <div class="input=-group col-md-4">
                  <label for="nombre">Tipo de Taller</label><br>
                  {{Form::text('tipo','',array('class'=>'form-control','placeholder'=>'Cantidad') )}}
                </div>
                <div class="input=-group col-md-4">
                  <label for="nombre">Numero de Asistentes</label><br>
                  {{Form::number('cantidad','',array('class'=>'form-control','placeholder'=>'Funcionalidad') )}}
                </div>
                <div class="input=-group col-md-4">
                  <label for="nombre">Fecha Impartido</label><br>
                  {{Form::date('fecha','',array('class'=>'form-control','placeholder'=>'Tipo') )}}
                </div>
                <div class="input=-group col-md-4">
                  <label for="nombre">Lugar del Taller</label><br>
                  {{Form::text('lugar','',array('class'=>'form-control','placeholder'=>'Tipo') )}}
                </div>
                <div class="input=-group col-md-4">
                  <label for="nombre">Observaciones del Taller</label><br>
                  {{Form::text('notas','',array('class'=>'form-control','placeholder'=>'Tipo') )}}
                </div>
                <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
                  {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                </div>
              {{Form::close()}}

        </div>
        </div>




      </div>
    </div>






    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
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
    </script>
  </body>
</html>
