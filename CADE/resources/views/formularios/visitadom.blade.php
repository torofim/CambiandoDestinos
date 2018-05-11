<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
<div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;"></div>
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

    {!!Form::open(array('route'=>['admin.visitadom.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Nombre</label><br>

        {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Domicilio</label><br>

        {{Form::text('domicilio','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Fecha</label><br>

        {{Form::date('fecha','',array('class'=>'form-control','placeholder'=>'Fecha') )}}

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Visita</label><br>

        {{Form::text('tipo','',array('class'=>'form-control','placeholder'=>'Tipo de Visita') )}}

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Notas</label><br>

        {{Form::text('notas','',array('class'=>'form-control','placeholder'=>'Notas') )}}

    </div>

    <div class="input-group col-md-12" style="margin-left:1.5%; padding-top:2%;margin-bottom:3%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

    <input type="hidden" name="idbene" value="{{$Id_bene}}">

  {!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>
