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

    {{Form::open(array('url'=>'formularios.evaluacion','files'=>true))}}
    <div class="input=-group col-md-4">
      <label for="nombre">Examen</label><br>
      {{Form::text('examen',$perros3[0]->tipo_examen,array('class'=>'form-control','placeholder'=>'Examen') )}}
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Puntuacion</label><br>
      {{Form::text('puntu',$perros3[0]->puntuacion,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
    </div>
    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
    </div>


  {{Form::close()}}

</div>
