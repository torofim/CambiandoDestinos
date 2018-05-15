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

    {!!Form::open(array('route'=>['admin.tutor.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Nombre Tutor</label><br>
      @if(count($perros4)==0)
        {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre Tutor','required'=>'true') )}}
        @else
        {{Form::text('nombre',$perros4[0]->Nombre_tutor,array('class'=>'form-control','placeholder'=>'Nombre Tutor','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido Paterno</label><br>
      @if(count($perros4)==0)
        {{Form::text('app','',array('class'=>'form-control','placeholder'=>'Apellido Paterno','required'=>'true') )}}
        @else
        {{Form::text('app',$perros4[0]->Apellido_tutor,array('class'=>'form-control','placeholder'=>'Apellido Paterno','required'=>'true') )}}
        @endif

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Encargado</label><br>
      @if(count($perros4)==0)
        {{Form::text('encargado','',array('class'=>'form-control','placeholder'=>'Encargado','required'=>'true') )}}
        @else
        {{Form::text('encargado',$perros4[0]->Encargado,array('class'=>'form-control','placeholder'=>'Encargado','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Curp</label><br>
      @if(count($perros4)==0)
        {{Form::text('curp','',array('class'=>'form-control','placeholder'=>'Curp','required'=>'true') )}}
        @else
        {{Form::text('curp',$perros4[0]->Curp_tutor,array('class'=>'form-control','placeholder'=>'Curp','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Rfc</label><br>
      @if(count($perros4)==0)
        {{Form::text('rfc','',array('class'=>'form-control','placeholder'=>'Rfc','required'=>'true') )}}
        @else
        {{Form::text('rfc',$perros4[0]->Rfc_tutor,array('class'=>'form-control','placeholder'=>'Rfc','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Antecedentes</label><br>
      @if(count($perros4)==0)
        {{Form::text('antecedentes','',array('class'=>'form-control','placeholder'=>'Antecedentes','required'=>'true') )}}
        @else
        {{Form::text('antecedentes',$perros4[0]->Antecedentes,array('class'=>'form-control','placeholder'=>'Antecedentes','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Teléfono</label><br>
      @if(count($perros4)==0)
        {{Form::number('tel','',array('class'=>'form-control','placeholder'=>'Teléfono','required'=>'true') )}}
        @else
        {{Form::number('tel',$perros4[0]->Telefono,array('class'=>'form-control','placeholder'=>'Teléfono','required'=>'true') )}}
        @endif
    </div>
    <div class="input-group col-md-12" style="margin-left:1.5%; padding-top:2%;margin-bottom:3%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

    <input type="hidden" name="idtu" value="{{$Id_bene}}">

  {!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>
