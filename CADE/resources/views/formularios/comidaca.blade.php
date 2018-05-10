<div class="card-body">
  @if($errors->any())
    <div class="alert alert-warning alert-dismissable divfade" style="position:absolute;top:10%;left:40%;">
      <ul>

      @foreach($errors->all() as $error)
        <li >{{$error}}</li>
      @endforeach
      </ul>
    </div>
  @endif
  @if(session()->has('mensaje'))
    <div class="alert alert-success divfade" style="position:absolute;top:10%;left:40%;">
      {{session()->get('mensaje')}}
    </div>
  @endif

    {!!Form::open(array('route'=>['admin.estatus.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Jubilado</label><br>
      @if(count($perros5)==0)
        {{Form::text('jubilado','',array('class'=>'form-control','placeholder'=>'Jubilado') )}}
        @else
        {{Form::text('jubilado',$perros5[0]->Jubilado,array('class'=>'form-control','placeholder'=>'Jubilado') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Servicio Medico</label><br>
      @if(count($perros5)==0)
        {{Form::text('servicio','',array('class'=>'form-control','placeholder'=>'Servicio Medico') )}}
        @else
        {{Form::text('servicio',$perros5[0]->Servicio_medico,array('class'=>'form-control','placeholder'=>'Servicio Medico') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Baño Diario</label><br>
      @if(count($perros5)==0)
        {{Form::text('bano','',array('class'=>'form-control','placeholder'=>'Baño Diario') )}}
        @else
        {{Form::text('bano',$perros5[0]->Bano_diario,array('class'=>'form-control','placeholder'=>'Baño Diario') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Convivencia Animal </label><br>
      @if(count($perros5)==0)
        {{Form::text('convivencia','',array('class'=>'form-control','placeholder'=>'Convivencia Animal') )}}
        @else
        {{Form::text('convivencia',$perros5[0]->Convivencia_animal,array('class'=>'form-control','placeholder'=>'Convivencia Animal') )}}
        @endif
    </div>

    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

    <input type="hidden" name="idbo" value="{{$Id_bene}}">

  {!!Form::close()!!}

</div>
