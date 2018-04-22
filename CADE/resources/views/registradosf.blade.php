<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
    @include('layouts.nav')

    <div class="main">
      <div class="panel panel-default">
          <div class="panel-body cold-md-2" id="sepa">
          </div>
      </div>

      <div class="container" style="margin-left:1%;">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">

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
                        <div class="row">
                          <h2 style="margin-left:1.5%;">Usuarios</h2>
                          <table class="table table-condensed" style="margin-left:1.5%;">
                            <thead>
                              <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Email</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                              </tr>
                            </thead>
                            <tbody>
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
                                  array('route'=>['admin.registrados.destroy',$usu->id],
                                'method'=>'DELETE' )) !!}
                                <button type="submit" >
                                  <i style="color:red;">X</i>
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
                        {{Form::open(array('url'=>'/admin/registrados','files'=>true))}}
                          <div class="input=-group col-md-12">
                            <label for="nombre">Nombre</label><br>
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
                          <div class="input=-group col-md-12">
                            <label for="">Nivel</label><br>
                            {{Form::select('Nivel',
                            array('admin'=>'Administrador',
                              'normal','Normal'),
                            array('class'=>'form-control',
                            'placeholder'=>'imagen') )}}
                          </div>

                          <div class="input-group col-md-12" style="margin-left:1.5%; padding-top:1%;">
                            {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                          </div>
                        {{Form::close()}}
                      </div>
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

    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
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
      });
    </script>
    <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
