<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title>Comida y Visitas</title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="main" style="height:auto;">
      <br>
      <br>
      <div class="panel2 panel-default col-xs-12 ">
        <div class="panel-body2 col-xs-12" style="border-bottom:groove; background-color:transparent;">
          <label class="titula col-xs-12">Fundación Cambiando Destinos, A.C.</label>
        </div>
      </div>
      <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:100%;">
        <button class="tablink" style="width:50%;" onclick="openPage('comida', this, '')" id="defaultOpen">Comida Caliente</button>
        <button class="tablink" style="width:50%;" onclick="openPage('visita', this, '')" >Visitas Domiciliarias</button>



<div id="comida" class="tabcontent">
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
        <div class="row">

          <table class="table table-condensed col-md-12" style="margin-left:0%;">
            <p>Comida Caliente</p>
            <thead>
                <tr style="border:white solid;background-color:#4c4f54;">
                  <td style="border-right: white solid;">No. Folio</td>
                <td style="border-right: white solid;">Nombre Beneficiario</td>
                <td style="border-right: white solid;">Nombre de Quién Entregó</td>
                <td style="border-right:white solid;">Domicilio</td>
                <td style="border-right:white solid;">Fecha</td>
                <td style="border-right:white solid;">Notas</td>

              </tr>
            </thead>
            <tbody id="tbody">
              <tr>
                @forelse($cocal as $usu)
                <td>{{$usu->Id_bene}}</td>
                <td>{{$usu->Nombre_b}}</td>
                <td>{{$usu->Nombre}}</td>
                <td>{{$usu->Domicilio}}</td>
                <td>{{$usu->Fecha}}</td>
                <td>{{$usu->Nota}}</td>



                </tr>
              @empty
              <p>sin registro</p>
              @endforelse
            </tbody>
          </table>
</div>
</div>
</div>

          <div id="visita" class="tabcontent">

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
            <div class="row">
  <table class="table table-condensed col-md-12" style="margin-left:0%;">
    <p>Visita Domiciliaria</p>
    <thead>
      <tr style="border:white solid;background-color:#4c4f54;">
        <td style="border-right: white solid;">No. Folio</td>
        <td style="border-right: white solid;">Nombre del Beneficiario</td>
        <td style="border-right: white solid;">Nombre de Quién Entregó</td>
        <td style="border-right:white solid;">Domicilio</td>
        <td style="border-right:white solid;">Fecha</td>
        <td style="border-right:white solid;">Tipo de Visita</td>
        <td style="border-right:white solid;">Notas u Observaciones</td>
      </tr>
    </thead>
    <tbody id="tbody">
      <tr>
        @forelse($regvisita as $usu)
        <td>{{$usu->Id_bene}}</td>
        <td>{{$usu->Nombre_b}}</td>
        <td>{{$usu->Nombre}}</td>
        <td>{{$usu->Domicilio}}</td>
        <td>{{$usu->Fecha}}</td>
        <td>{{$usu->Tipo_de_visita}}</td>
        <td>{{$usu->Notas}}</td>


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

  </body>
</html>
