@extends('layouts.layout')
@section('principal')
<div class=" col-md-12 container"style="height:100%;">

  <div class="contenedora col-md-12" style="overflow-x:hidden;  margin-top:8%;height:100%;">
  <button class="tablink" style="width:50%;" onclick="openPage('benefi', this, '')" id="defaultOpen">Usuarios</button>
  <button class="tablink" style="width:50%;" onclick="openPage('agregar', this, '')" >Agregar Usuario</button>


  <div id="benefi" class="tabcontent">

                <h3 style="margin-left:2%;">Buscar Usuario</h3>
<input type="search" name="" value="" id="txtBusqueda" style="margin-left:2%;margin-bottom:5%;width:20%;">
<input type="hidden" name="" value="{{csrf_token()}}" id="token">


                <div class="card-body" >
                  @if($errors->any())
                    <div class="alert alert-warning alert-dismissable divfade" style="position:absolute;top:10%;left:40%;">
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

                    <table class="table table-condensed" style="margin-left:.5%;">
                      <thead>
                        <tr>
                          <td>Id</td>
                          <td>Nombre</td>
                          <td>Email</td>
                          <td>Editar</td>
                          <td>Eliminar</td>
                        </tr>
                      </thead>
                      <tbody id="tbody">
                        <tr>
                          @forelse($perros as $usu)
                          <td>{{$usu->id}}</td>
                          <td>{{$usu->name}}</td>
                          <td>{{$usu->email}}</td>
                          <td><button type="button" class="btn btn-info btn-lg btnEdit"
                            data-toggle="modal" data-target="#myModal"
                            data-Nombre="{{$usu->name}}"
                            data-email="{{$usu->email}}"
                            data-id="{{$usu->id}}">Editar </button></td>
                          <td>
                          {!! Form::open(
                            array('route'=>['admin.usuarios.destroy',$usu->id],
                          'method'=>'DELETE' )) !!}
                          <button type="button" class="btnEliminar" data-toggle="modal" data-target="#myModal2" style="margin-top:5px;">
                            <i class="glyphicon glyphicon-remove" style="padding-top:50%;"></i>

                          </button>
                          {!! Form::close() !!}
                          </td>
                          </tr>
                        @empty
                        <p>sin registro</p>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                </div><!--tab content-->

                <div id="agregar" class="tabcontent">
                  <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Datos Personales</div>

                  <div class="card-body">

                  {{Form::open(array('url'=>'/admin/usuarios','files'=>true))}}
                    <div class="input=-group col-md-12" >
                      <label for="nombre" >Nombre</label><br>
                      {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Correo</label><br>
                      {{Form::email('correo','',array('class'=>'form-control','placeholder'=>'Correo') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Contraseña</label><br>
                      {{Form::password('p1',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre"> Repetir Contraseña</label><br>
                      {{Form::password('p2',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Imagen</label><br>
                      {{Form::file('Imagen',array('class'=>'form-control','placeholder'=>'Imagen') )}}
                    </div>
                    <div class="input=-group col-md-12" >
                      <label for="">Nivel</label><br>
                      {{Form::select('Nivel',
                      array('admin'=>'Administrador',
                        'normal','Normal'),
                      array('class'=>'form-control',
                      'placeholder'=>'imagen') )}}
                    </div>
                    <div class="input-group col-md-12" style="padding-top:2%; margin-left:2%; padding-bottom:9vh;">
                      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                    </div>
                  {{Form::close()}}


                </div>
            </div>
        </div>
</div>






<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar a: <b id="nomModal">Juan</b> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      {!! Form::open(
        array('route'=>['admin.usuarios.edit',$usu->id],'method'=>'GET' )) !!}
      <div class="modal-body">
        <input type="hidden" name="id" id="iEditar" value="">
          <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="emailEditar" id="emailEditar"value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="p1Editar" id="P1Editar" value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Imagen</label>
            <input type="file" name="imagenEditar" id="imagenEditar" value="" class="form-control">
          </div>

          <div class="inpnut-group">
            <label for="">Nivel</label>
            <select class="form-control" name="nivelEditar">
              <option value="0">Admin</option>
              <option value="1">Editor</option>
              <option value="2">Chalan</option>
            </select>
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


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Eliminar usuario </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h3>Desea eliminar el usuario?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnAjax" data-dismiss="modal">Eliminar</button>
        <!-- data-dismiss detiene el actualizado-->
      </div>

    </div>

  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
var formulario;
var tr;
  $(document).ready(function(){
    $(".btnEdit").on('click',function(){
      var n=$(this).data('nombre');
      var e=$(this).data('email');
      var i=$(this).data('id');
      $("#iEditar").val(i);
      $("#nameEditar").val(n);
      $('#emailEditar').val(e);
      $('#nomModal').text(n);
    });

    $('#txtBusqueda').on('keyup',function(){
      $.ajax({
        method:'POST',
        url:'/admin/usuarios/buscar',
        data:{
          nombre:$("#txtBusqueda").val(),
          _token:$("#token").val()
        },
        beforeSend:function(){
          console.log("Cargando");
        }

      }).done(function(respuesta){
        var arreglo =JSON.parse(respuesta);
        $("#tbody").find('tr').remove();
        for(var x=0;x<arreglo.length;x++){
        var todo="<tr><td>"+arreglo[x].id;
        todo+="</td><td>"+arreglo[x].name+"</td>";
        todo+="<td>"+arreglo[x].email+"</td><td>";
        todo+='<button type="" data-nombre="'+arreglo[x].name+'"';
        todo+='data-email="'+arreglo[x].email+'" data-id="'+arreglo[x].id+'"';
        todo+='data-toggle="modal" data-target="#myModal"';
        todo+='class="btn btn-primary btnEdit">';
        todo+="EDITAR</button></td>";
        todo+='td><form method="POST" action="/admin/usuarios/'+arreglo[x].id+'">';
        todo+='<input type="hidden" name ="_token" value="{{csrf_token()}}">';
        todo+='<input type="hidden" name ="_method" value="delete">';
        todo+='<button type="button" data-toggle="modal"';
        todo+='data-target="#myModal2" class="btnEliminar">';
        todo+='<i class="fa fa-trash></i></button></form></td></tr>"';
        $("#tbody").append(todo);
        }
        console.log(arreglo);

      });

    });
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
        alert(respuesta);
        tr.fadeOut(1000);
      });
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



</script>

@endsection
