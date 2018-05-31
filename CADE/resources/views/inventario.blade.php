<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <title>Inventario</title>
  </head>
  <body >
    @include('layouts.nav')
    <div class="main" style="height:100%;">

      <br>
      <br>
      <div class="panel2 panel-default col-xs-12 ">
        <div class="panel-body2 col-xs-12" style="border-bottom:groove; background-color:transparent;">
          <label class="titula col-xs-12">Fundación Cambiando Destinos, A.C.</label>
        </div>
      </div>

    <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:auto;">


    <button class="tablink" style="width:33.33%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Inventario</button>
    <button class="tablink" style="width:33.33%;" onclick="openPage('agregar', this, '')" >Agregar Nuevo Medicamento/Dispositivo y Entregas</button>
    <button class="tablink" style="width:33.33%;" onclick="openPage('entrega', this, '')" >Información de Entregas(Medicamentos/Dispositivos)</button>


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
          <div class="alert alert-success divfade" style="position:absolute;top:10%;left:40%;">
            {{session()->get('mensaje')}}
          </div>
        @endif
        <!-- ESTA ES LA TABLA ORIGINAL PARA POSTERIORES USOS-->
        <div class="row" >
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
                @forelse($inv  as $usu)
                <td >{{$usu->Id_inv}}</td>
                <td>{{$usu->Nombre_producto}}</td>
                <td>{{$usu->Cantidad}}</td>
                <td>{{$usu->Funcionalidad}}</td>
                <td>{{$usu->Tipo}}</td>
                <td><button type="button" class="btn btn-info btn-lg btne"
                  data-toggle="modal" data-target="#myModal"
                  data-nombreedit="{{$usu->Nombre_producto}}"
                  data-cantedit="{{$usu->Cantidad}}"
                  data-funedit="{{$usu->Funcionalidad}}"
                  data-tipoedit="{{$usu->Tipo}}"
                  data-idin="{{$usu->Id_inv}}">Editar </button></td>
                  <td>
                  {!! Form::open(
                    array('route'=>['admin.inventario.destroy',$usu->Id_inv],
                  'method'=>'DELETE' )) !!}
                  <button type="button" class="btnEliminar" data-toggle="modal" data-target="#myModal2" style="margin-top:5px;">
                    <i class="glyphicon glyphicon-remove" style="padding-top:50%;"></i>

                  </button>
                  {!! Form::close() !!}


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
    <div class="card-header" style="margin-bottom:2%; font-size:3rem; margin-left:1.5%;">Agregar Nuevo Medicamento/Dispositivo</div>
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
            <div class="alert alert-success divfade"  style="position:absolute;top:10%;left:40%;">
              {{session()->get('mensaje')}}
            </div>
          @endif
          {{Form::open(array('url'=>'/admin/inventario','files'=>true))}}
            <div class="input=-group col-md-4">
              <label for="nombre">Artículo</label><br>
              {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Artículo','required'=>'true') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Cantidad</label><br>
              {{Form::number('cant','',array('class'=>'form-control','placeholder'=>'Cantidad','required'=>'true') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Función del Artículo</label><br>
              {{Form::text('fun','',array('class'=>'form-control','placeholder'=>'Funcionalidad','required'=>'true') )}}
            </div>
            <div class="input=-group col-md-4">
              <label for="nombre">Tipo (Medicamento o Apoyo)</label><br>
              {{Form::text('tipo','',array('class'=>'form-control','placeholder'=>'Tipo','required'=>'true') )}}
            </div>
            <div class="input-group col-md-12" style="margin-left:1%; padding-top:2%;">
              {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
            </div>

          {{Form::close()}}
          <div class="card-header" style=" margin-top: 2%;font-size:3rem; margin-left:1.5%;">Entrega de Articulo a Beneficiario</div>
          <div class="input-group col-md-6" style="margin-left:1%; padding-top:2%;">
          <button type="button" class="btn btn-info btn-md " data-toggle="modal" data-target="#myModal3" >Entrega </button>
          </div>


</div>
</div>
<div id="entrega" class="tabcontent">

  @include('formularios.inventarioentrega')
  </div>




</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Esta editando al articulo: <b id="nomModal"></b> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      {!! Form::open(
        array('route'=>['admin.inventario.edit',$usu->Id_inv],'method'=>'GET' )) !!}
      <div class="modal-body">
        <input type="hidden" name="idin" id="idin" value="">
          <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="nombreedit" id="nombre" value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Cantidad</label>
            <input type="text" name="cantedit" id="cant"value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Funcionalidad</label>
            <input type="text" name="funedit" id="fun" value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Tipo</label>
            <input type="text" name="tipoedit" id="tipo" value="" class="form-control">
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <!-- data-dismiss detiene el actualizado-->
      </div>
      {!!Form::close() !!}
    </div>

  </div>
</div>


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Eliminar Articulo </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Desea eliminar el Articulo?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnAjax" data-dismiss="modal">Eliminar</button>
        <!-- data-dismiss detiene el actualizado-->
      </div>

    </div>

  </div>
</div>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Esta editando al articulo: <b id="nomModal"></b> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      {{Form::open(array('url'=>'/admin/inventarioentrega','files'=>true))}}

      <div class="modal-body">

        <div class="input-group">
          <label for="">No. Folio</label>
          <input type="number" name="idin" id="Id_bene" value="" class="form-control" required="true">
        </div>
        <div class="input-group">
          <label for="">Nombre Beneficiario</label>
          <input type="text" name="nombrebene" id="Nombre_bene" value="" class="form-control"  required="true">
        </div>
          <div class="input-group">
            <label for="">Nombre Articulo</label>
            <input type="text" name="articulo" id="nombre" value="" class="form-control" required="true">
          </div>
          <div class="input-group">
            <label for="">Cantidad</label>
            <input type="number" name="cant" id="cantidad"value="" class="form-control" required="true">
          </div>
          <div class="input-group">
            <label for="">Tipo</label>
            <input type="text" name="tipo" id="tipo" value="" class="form-control" required="true">
          </div>
          <div class="input-group">
            <label for="">Fecha</label>
            <input type="date" name="fecha" id="Fecha" value="" class="form-control" required="true">
          </div>
          <div class="input-group">
            <label for="">Notas</label>
            <input type="text" name="notas" id="Notas" value="" class="form-control" required="true">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <!-- data-dismiss detiene el actualizado-->
      </div>
      {{Form::close() }}
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

  $(".btne").on('click',function(){

    var n=$(this).data('nombreedit');
    var e=$(this).data('cantedit');
    var o=$(this).data('funedit');
    var c=$(this).data('tipoedit');
    var a=$(this).data('idin');

    $('#idini').val(a);
    $("#nombre").val(n);
    $("#cant").val(e);
    $('#fun').val(o);
    $('#tipo').val(c);
    $('#nomModal').text(n);


  });

$('.divfade').fadeOut(2000);

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






</script>
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
