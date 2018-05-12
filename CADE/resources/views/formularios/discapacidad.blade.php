<div class="container col-md-12">
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

      {!!Form::open(array('route'=>['admin.discapacidad.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Tiene Discapacidad</label><br>
      @if(count($perros2)==0)
        <label >{{Form::radio('discapacidad','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('discapacidad','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros2[0]->Discapacidad=='Si')
          <label for=""><input type="radio" name="discapacidad" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="discapacidad" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="discapacidad" value="Si"> Si</label>
        <label for=""><input type="radio" name="discapacidad" value="No" checked> No</label>

         @endif

        @endif

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Causa de la Discapacidad</label><br>
      @if(count($perros2)==0)
        {{Form::text('causa','',array('class'=>'form-control','placeholder'=>'Causa de la Discapacidad') )}}
        @else
        {{Form::text('causa',$perros2[0]->Causa_discapacidad,array('class'=>'form-control','placeholder'=>'Causa de la Discapacidad') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tiene Hipertension</label><br>
      @if(count($perros2)==0)
        <label >{{Form::radio('hiper','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('hiper','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros2[0]->hipertension=='Si')
          <label for=""><input type="radio" name="hiper" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="hiper" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="hiper" value="Si"> Si</label>
        <label for=""><input type="radio" name="hiper" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Rehabilitacion</label><br>
      @if(count($perros2)==0)
        {{Form::text('rehab','',array('class'=>'form-control','placeholder'=>'Rehabilitacion') )}}
        @else
        {{Form::text('rehab',$perros2[0]->Rehabilitacion,array('class'=>'form-control','placeholder'=>'Rehabilitacion') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Lugar de Rehabilitacion </label><br>
      @if(count($perros2)==0)
        {{Form::text('lugarehab','',array('class'=>'form-control','placeholder'=>'Lugar de Rehabilitacion') )}}
        @else
        {{Form::text('lugarehab',$perros2[0]->Lugar_de_rehabilitacion,array('class'=>'form-control','placeholder'=>'Lugar de Rehabilitacion') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Rehabilitacion </label><br>
      @if(count($perros2)==0)
        {{Form::text('tiporehab','',array('class'=>'form-control','placeholder'=>'Tipo de Rehabilitacion') )}}
        @else
        {{Form::text('tiporehab',$perros2[0]->Tipo_rehabilitacion,array('class'=>'form-control','placeholder'=>'Tipo de Rehabilitacion') )}}
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
