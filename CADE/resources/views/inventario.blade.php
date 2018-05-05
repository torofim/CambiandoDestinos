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


    <button class="tablink" onclick="openPage('benefi', this, '')">Inventario</button>
    <button class="tablink" onclick="openPage('agregar', this, '')" id="defaultOpen">Agregar Articulo</button>


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
              <td>{{$usu->Id}}</td>
              <td>{{$usu->Nombre_producto}}</td>
              <td>{{$usu->Cantidad}}</td>
              <td>{{$usu->Funcionalidad}}</td>
              <td><button type="button" class="btn btn-info btn-lg " onclick="location.href='/admin/Formubenefi/{{$usu->Id}}'"
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
    <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Agregar Articulo</div>

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
