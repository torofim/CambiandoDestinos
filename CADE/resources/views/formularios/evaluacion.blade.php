<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
<div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;"></div>
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

    {!!Form::open(array('route'=>['admin.evaluacion.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Exámen</label><br>
      @if(count($perros3)==0)
        {{Form::text('examen','',array('class'=>'form-control','placeholder'=>'Exámen','required'=>'true') )}}
        @else
        {{Form::text('examen',$perros3[0]->tipo_examen,array('class'=>'form-control','placeholder'=>'Exámen','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Puntuación</label><br>
      @if(count($perros3)==0)
        {{Form::text('puntuacion','',array('class'=>'form-control','placeholder'=>'Puntuación','required'=>'true') )}}
        @else
        {{Form::text('puntuacion',$perros3[0]->puntuacion,array('class'=>'form-control','placeholder'=>'Puntuación','required'=>'true') )}}
        @endif
    </div>
    <div class="input-group col-md-12" style="margin-left:1.5%; padding-top:2%;margin-bottom:3%;">
      {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
    </div>

      <input type="hidden" name="idev" value="{{$Id_bene}}">

  {!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>
