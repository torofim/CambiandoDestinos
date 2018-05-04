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

    {{Form::open(array('url'=>'formularios.tutor','files'=>true))}}
    <div class="input=-group col-md-4">
      <label for="nombre">Nombre</label><br>
      @if(count($perros4)==0)
        {{Form::text('ntutor','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('ntutor',$perros4[0]->Nombre_tutor,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apellido Paterno</label><br>
      @if(count($perros4)==0)
        {{Form::text('atutor','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('atutor',$perros4[0]->Apellido_tutor,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Encargado</label><br>
      @if(count($perros4)==0)
        {{Form::text('encargado','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('encargado',$perros4[0]->Encargado,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Curp</label><br>
      @if(count($perros4)==0)
        {{Form::text('curp','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('curp',$perros4[0]->Curp_tutor,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Rfc</label><br>
      @if(count($perros4)==0)
        {{Form::text('rfc','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('rfc',$perros4[0]->Rfc_tutor,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Antecedentes</label><br>
      @if(count($perros4)==0)
        {{Form::text('ante','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('ante',$perros4[0]->Antecedentes,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Telefono</label><br>
      @if(count($perros4)==0)
        {{Form::text('tel','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @else
        {{Form::text('tel',$perros4[0]->Telefono,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        @endif
    </div>
    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

  {{Form::close()}}

</div>
