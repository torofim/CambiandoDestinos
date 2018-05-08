<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title>Inventario</title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="main" style="height:750px;overflow-y:hidden;">

    <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:600px;">


    <button class="tablink" style="width:33.33%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Inventario</button>
    <button class="tablink" style="width:33.33%;" onclick="openPage('agregar', this, '')" >Agregar Articulo</button>
    <button class="tablink" style="width:33.33%;" onclick="openPage('entrega', this, '')" >Entregas</button>


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
              <td>Articulo</td>
              <td>Cantidad</td>
              <td>Funcionalidad</td>
              <td>Tipo</td>
              <td>Editar</td>
            </tr>
          </thead>
          <tbody id="tbody">
            <tr>
              @forelse($perros as $usu)
              <td>{{$usu->Id}}</td>
              <td>{{$usu->Nombre_producto}}</td>
              <td>{{$usu->Cantidad}}</td>
              <td>{{$usu->Funcionalidad}}</td>
              <td>{{$usu->Tipo}}</td>
              <td><button type="button" class="btn btn-info btn-lg ">Editar </button></td>
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
            <div class="alert alert-success">
              {{session()->get('mensaje')}}
            </div>
          @endif
          {{Form::open(array('url'=>'/admin/inventario','files'=>true))}}
            <div class="input=-group col-md-4">
              <label for="nombre">Articulo</label><br>
              {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Cantidad</label><br>
              {{Form::number('cant','',array('class'=>'form-control','placeholder'=>'Cantidad') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Funcionalidad</label><br>
              {{Form::text('fun','',array('class'=>'form-control','placeholder'=>'Funcionalidad') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Tipo</label><br>
              {{Form::text('tipo','',array('class'=>'form-control','placeholder'=>'Funcionalidad') )}}
            </div>
            <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
              {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
            </div>
          {{Form::close()}}

</div>
</div>
<div id="benefi" class="tabcontent">

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
</script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
