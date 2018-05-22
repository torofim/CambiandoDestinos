<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Beneficiarios</title>
  </head>
  <body>
  @include('layouts.nav')

  <div class="main" style="height:auto;">
  <!--<div class="panel panel-default">
        <div class="panel-body cold-md-2" id="sepa">
        </div>

    </div>-->

    <br>
    <br>
    <div class="panel2 panel-default col-xs-12 ">
      <div class="panel-body2 col-xs-12" style="border-bottom:groove; background-color:transparent;">
        <label class="titula col-xs-12">Fundación Cambiando Destinos, A.C.</label>
      </div>
    </div>
    <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:auto;">
    <!-- Viene de Usuarios.blade-->


    <button class="tablink" style="width:50%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Beneficiario</button>
    <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')" >Agregar Beneficiario</button>


    <div id="benefi" class="tabcontent" >

        @if(Auth::user()->privilegios=='admin')
        <h3 style="margin-left:2%;">Buscar Beneficiario</h3>
    <input type="search" name="" value="" id="txtBusqueda" style="margin-left:2%;width:20%;color:black;">
    <button type="button" name="button" id="btnbuscar"style="background-color: green;decoration:none;">Buscar</button>
    <input type="hidden" name="" value="{{csrf_token()}}" id="token">
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
          <table class="table table-condensed col-md-12" style="margin-left:0%; ">
            <thead>
              <tr>
                <td>No. Folio</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Apellido</td>
                <td>Editar</td>
                <td>Eliminar</td>
              </tr>
            </thead>
            <tbody id="tbody">


              <tr>
                @forelse($datosper as $usu )

                <td>{{$usu->Id_bene}}</td>
                <td>{{$usu->Nombre}}</td>
                <td>{{$usu->Apellido_p}}</td>
                <td>{{$usu->Apellido_m}}</td>
                <td><button type="button" class="btn btn-info btn-lg " onclick="location.href='/admin/Formubenefi/{{$usu->Id_bene}}'"
                   >Editar </button></td>
                  <td>{!! Form::open(
                    array('route'=>['admin.datospersonales.destroy',$usu->Id_bene],
                  'method'=>'DELETE' )) !!}
                    <button type="button" class="btnEliminar" data-toggle="modal" data-target="#myModal2" style="margin-top:5px;">
                     <i class="glyphicon glyphicon-remove" style="padding-top:50%;"></i></button>
                   {!! Form::close() !!}</td>

                </tr>

                @empty
                <p>sin registro</p>

                @endforelse

            </tbody>
          </table>

    </div>
    </div>
    @else
    <h3 style="margin-left:2%;">Buscar Beneficiario</h3>
<input type="search" name="" value="" id="txtBusqueda" style="margin-left:2%;margin-bottom:5%;width:20%;color:black;">
<button type="button" name="button" id="btnbuscar" style="background-color: green;">Buscar</button>
<input type="hidden" name="" value="{{csrf_token()}}" id="token">

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
    <table class="table table-condensed col-md-12" style="margin-left:0%; ">
      <thead>
        <tr>
          <td>No. Folio</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Apellido</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      </thead>
      <tbody id="tbody">

      </tbody>
    </table>
</div>

    @endif

    </div>

    <div id="agregar" class="tabcontent">
      <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;" >Datos Personales</div>

      <div class="card-body ">
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




  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Beneficiario  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h3>Desea eliminar el beneficiario?</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary btnAjax" data-dismiss="modal">Eliminar</button>
          <!-- data-dismiss detiene el actualizado-->
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
  var formulario;
  var tr;

$(document).ready(function(){
  $(".btnEliminar").on('click',function(event){
    event.preventDefault();
    tr=$(this).parent('form').parent('td').parent('tr');
    formulario=$(this).parent('form');

  });
  $('.btnAjax').on('click',function(){

    $.ajax({
      method:'DELETE',
      url:formulario.attr('action'),
      data:formulario.serialize()
    }).done(function(respuesta){

      tr.fadeOut(1000);
    });
  });
  });
  $(document).on('click','#btnbuscar',function(){
    $.ajax({

      method:'POST',
      url:'/admin/dashboardbeneficiarios/buscar',
      data:{
        id:$("#txtBusqueda").val(),
        _token:$("#token").val()
      },
      beforeSend:function(){

        console.log("Cargando");
      }

    }).done(function(respuesta){
      var arreglo =JSON.parse(respuesta);

      $("#tbody").find('tr').remove();

    var todo="<tr><td>"+arreglo[0].Id_bene;
    todo+="</td><td>"+arreglo[0].Nombre+"</td>";
    todo+="<td>"+arreglo[0].Apellido_p+"</td>";
    todo+="<td>"+arreglo[0].Apellido_m+"</td><td>";
    //todo+='<button type="button" class="btn btn-info btn-lg" onclick="location.href='"/admin/Formubenefi/" + arreglo[0].Id_bene+ ' ">Editar </button></td>';
    todo+='<td><form method="POST" action="/admin/datospersonales/'+arreglo[0].Id_bene+'">';
    todo+='<input type="hidden" name ="_token" value="{{csrf_token()}}">';
    todo+='<input type="hidden" name ="_method" value="delete">';
    todo+='<i class="fa fa-trash></i></button></form></td></tr>"';

    $("#tbody").append(todo);

    console.log(arreglo);
    });


  });

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



  </body>
</html>
