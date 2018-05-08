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

      {!!Form::open(array('route'=>['admin.discapacidad.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Discapacidad</label><br>
      @if(count($perros2)==0)
        {{Form::text('discapacidad','',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}
        @else
        {{Form::text('discapacidad',$perros2[0]->Discapacidad,array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Causa de la Discapacidad</label><br>
      @if(count($perros2)==0)
        {{Form::text('causa','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
        @else
        {{Form::text('causa',$perros2[0]->Causa_discapacidad,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Rehabilitacion</label><br>
      @if(count($perros2)==0)
        {{Form::text('rehab','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
        @else
        {{Form::text('rehab',$perros2[0]->Rehabilitacion,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Lugar de Rehabilitacion </label><br>
      @if(count($perros2)==0)
        {{Form::text('lugarehab','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
        @else
        {{Form::text('lugarehab',$perros2[0]->Lugar_de_rehabilitacion,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Rehabilitacion </label><br>
      @if(count($perros2)==0)
        {{Form::text('tiporehab','',array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
        @else
        {{Form::text('tiporehab',$perros2[0]->Tipo_rehabilitacion,array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apoyo Funcionalidad </label><br>
      @if(count($perros2)==0)
        {{Form::text('apoyofun','',array('class'=>'form-control','placeholder'=>'Apoyo Funcionalidad') )}}
        @else
        {{Form::text('apoyofun',$perros2[0]->Apoyo_funcional,array('class'=>'form-control','placeholder'=>'Apoyo Funcionalidad') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Requiere Apoyo Funcional </label><br>
      @if(count($perros2)==0)
        {{Form::text('requiere','',array('class'=>'form-control','placeholder'=>'Requiere Apoyo Funcional') )}}
        @else
        {{Form::text('requiere',$perros2[0]->Requiere_apoyo_funcional,array('class'=>'form-control','placeholder'=>'Requiere Apoyo Funcional') )}}
        @endif
    </div>
    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

      <input type="hidden" name="idbene" value="{{$Id}}">


  {!!Form::close()!!}

</div>
