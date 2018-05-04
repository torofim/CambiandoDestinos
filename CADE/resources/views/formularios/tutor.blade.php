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

    {{Form::open(array('url'=>'formularios.discapacidad','files'=>true))}}
    <div class="input=-group col-md-4">
      <label for="nombre">Nombre</label><br>
      {{Form::text('discapacidad',$perros2[0]->Discapacidad,array('class'=>'form-control','placeholder'=>'Nombre') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido Paterno</label><br>
      {{Form::text('causa',$perros2[0]->Causa_discapacidad,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido materno</label><br>
      {{Form::text('rehab',$perros2[0]->Rehabilitacion,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Fecha nacimiento </label><br>
      {{Form::text('lugarehab',$perros2[0]->Lugar_de_rehabilitacion,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Lugar nacimiento </label><br>
      {{Form::text('tiporehab',$perros2[0]->Tipo_rehabilitacion,array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Edad </label><br>
      {{Form::text('apoyofun',$perros2[0]->Apoyo_funcional,array('class'=>'form-control','placeholder'=>'Edad') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Sexo </label><br>
      {{Form::text('requiere',$perros2[0]->Requiere_apoyo_funcional,array('class'=>'form-control','placeholder'=>'M o F') )}}
    </div>
    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

  {{Form::close()}}

</div>
