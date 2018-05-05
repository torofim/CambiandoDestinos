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

    {{Form::open(array('url'=>'formularios.estatus','files'=>true))}}
    <div class="input=-group col-md-4">
      <label for="nombre">Jubilado</label><br>
      @if(count($perros5)==0)
        {{Form::text('jubilado','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('jubilado',$perros5[0]->Jubilado,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido Paterno</label><br>
      @if(count($perros5)==0)
        {{Form::text('servicio','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
        @else
        {{Form::text('servicio',$perros5[0]->Servicio_medico,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido materno</label><br>
      @if(count($perros5)==0)
        {{Form::text('bano','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
        @else
        {{Form::text('bano',$perros5[0]->Bano_diario,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Fecha nacimiento </label><br>
      @if(count($perros5)==0)
        {{Form::text('convivencia','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
        @else
        {{Form::text('convivencia',$perros5[0]->Convivencia_animal,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
        @endif
    </div>

    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

  {{Form::close()}}

</div>
