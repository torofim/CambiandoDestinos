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

      {!!Form::open(array('route'=>['admin.tipodiscapacidad.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-4">
      <label for="nombre">Auditiva</label><br>
      @if(count($perros9)==0)
        <label >{{Form::radio('auditiva','Si',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}} Si</label>
        <label>{{Form::radio('auditiva','No',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}No</label>
        @else
          @if($perros9[0]->Auditiva=='Si')
          <label for=""><input type="radio" name="auditiva" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="auditiva" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="auditiva" value="Si"> Si</label>
        <label for=""><input type="radio" name="auditiva" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Visual</label><br>
      @if(count($perros9)==0)
        <label >{{Form::radio('visual','Si',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}} Si</label>
        <label>{{Form::radio('visual','No',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}No</label>
        @else
          @if($perros9[0]->Visual=='Si')
          <label for=""><input type="radio" name="visual" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="visual" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="visual" value="Si"> Si</label>
        <label for=""><input type="radio" name="visual" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Intelectual</label><br>
      @if(count($perros9)==0)
        <label >{{Form::radio('intelectual','Si',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}} Si</label>
        <label>{{Form::radio('intelectual','No',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}No</label>
        @else
          @if($perros9[0]->Intelectual=='Si')
          <label for=""><input type="radio" name="intelectual" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="intelectual" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="intelectual" value="Si"> Si</label>
        <label for=""><input type="radio" name="intelectual" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Musculo Esqueletica</label><br>
      @if(count($perros9)==0)
        <label >{{Form::radio('musculo','Si',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}} Si</label>
        <label>{{Form::radio('musculo','No',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}No</label>
        @else
          @if($perros9[0]->MusculoEsqueletica=='Si')
          <label for=""><input type="radio" name="musculo" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="musculo" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="musculo" value="Si"> Si</label>
        <label for=""><input type="radio" name="musculo" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Neuromotora</label><br>
      @if(count($perros9)==0)
        <label >{{Form::radio('neuro','Si',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}} Si</label>
        <label>{{Form::radio('neuro','No',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}No</label>
        @else
          @if($perros9[0]->Neuromotora=='Si')
          <label for=""><input type="radio" name="neuro" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="neuro" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="neuro" value="Si"> Si</label>
        <label for=""><input type="radio" name="neuro" value="No" checked> No</label>

         @endif

        @endif
    </div>
    <div class="input=-group col-md-4">
      <label for="nombre">Otra</label><br>
      @if(count($perros9)==0)
        {{Form::text('otra','',array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}
        @else
        {{Form::text('otra',$perros9[0]->Otra,array('class'=>'form-control','placeholder'=>'Nombre','required'=>'true') )}}
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
