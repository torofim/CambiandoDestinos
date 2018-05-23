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
      @if(count($discap)==0)
        <label >{{Form::radio('discapacidad','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('discapacidad','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($discap[0]->Discapacidad=='Si')
          <label for=""><input type="radio" name="discapacidad" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="discapacidad" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="discapacidad" value="Si"> Si</label>
        <label for=""><input type="radio" name="discapacidad" value="No" checked> No</label>

         @endif

        @endif

    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tiene Hipertension</label><br>
      @if(count($discap)==0)
        <label >{{Form::radio('hiper','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('hiper','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($discap[0]->hipertension=='Si')
          <label for=""><input type="radio" name="hiper" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="hiper" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="hiper" value="Si"> Si</label>
        <label for=""><input type="radio" name="hiper" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Discapacidad</label><br>
      @if(count($discap)==0)
        {{Form::text('tipodis','',array('class'=>'form-control','placeholder'=>'Causa de la Discapacidad','required'=>'true') )}}
        @else
        {{Form::text('tipodis',$discap[0]->Tipo_disca,array('class'=>'form-control','placeholder'=>'Tipo de Discapacidad','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Causa de la Discapacidad</label><br>
      @if(count($discap)==0)
        {{Form::text('causa','',array('class'=>'form-control','placeholder'=>'Causa de la Discapacidad','required'=>'true') )}}
        @else
        {{Form::text('causa',$discap[0]->Causa_discapacidad,array('class'=>'form-control','placeholder'=>'Causa de la Discapacidad','required'=>'true') )}}
        @endif
    </div>

    <div class="input=-group col-md-4">
      <label for="nombre">Rehabilitación</label><br>
      @if(count($discap)==0)
        {{Form::text('rehab','',array('class'=>'form-control','placeholder'=>'Rehabilitación','required'=>'true') )}}
        @else
        {{Form::text('rehab',$discap[0]->Rehabilitacion,array('class'=>'form-control','placeholder'=>'Rehabilitación','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Lugar de Rehabilitación </label><br>
      @if(count($discap)==0)
        {{Form::text('lugarehab','',array('class'=>'form-control','placeholder'=>'Lugar de Rehabilitación','required'=>'true') )}}
        @else
        {{Form::text('lugarehab',$discap[0]->Lugar_de_rehabilitacion,array('class'=>'form-control','placeholder'=>'Lugar de Rehabilitación','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Rehabilitación </label><br>
      @if(count($discap)==0)
        {{Form::text('tiporehab','',array('class'=>'form-control','placeholder'=>'Tipo de Rehabilitación','required'=>'true') )}}
        @else
        {{Form::text('tiporehab',$discap[0]->Tipo_rehabilitacion,array('class'=>'form-control','placeholder'=>'Tipo de Rehabilitación','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Apoyo Funcional</label><br>
      @if(count($discap)==0)
        {{Form::text('apoyofun','',array('class'=>'form-control','placeholder'=>'Apoyo Funcional','required'=>'true') )}}
        @else
        {{Form::text('apoyofun',$discap[0]->Apoyo_funcional,array('class'=>'form-control','placeholder'=>'Apoyo Funcional','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Requiere Apoyo Funcional</label><br>
      @if(count($discap)==0)
        {{Form::text('requiere','',array('class'=>'form-control','placeholder'=>'Requiere Apoyo Funcional','required'=>'true') )}}
        @else
        {{Form::text('requiere',$discap[0]->Requiere_apoyo_funcional,array('class'=>'form-control','placeholder'=>'Requiere Apoyo Funcional','required'=>'true') )}}
        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Tipo de Apoyo Requerido</label><br>
      @if(count($discap)==0)
        {{Form::text('tipoapoyo','',array('class'=>'form-control','placeholder'=>' Apoyo ','required'=>'true') )}}
        @else
        {{Form::text('tipoapoyo',$discap[0]->Tipo_apoyo,array('class'=>'form-control','placeholder'=>' Apoyo ','required'=>'true') )}}
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
