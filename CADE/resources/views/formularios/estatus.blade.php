<div class="container col-md-12">
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

    {!!Form::open(array('route'=>['admin.estatus.store','0'],'method'=>'POST'))!!}
    <div class="input=-group col-md-2">
      <label for="nombre">Jubilado</label><br>
      @if(count($perros5)==0)
        <label >{{Form::radio('jubilado','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('jubilado','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros5[0]->Jubilado=='Si')
          <label for=""><input type="radio" name="jubilado" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="jubilado" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="jubilado" value="Si"> Si</label>
        <label for=""><input type="radio" name="jubilado" value="No" checked> No</label>

         @endif

        @endif

    </div>
    <div class="input=-group col-md-2">
      <label for="nombre">Servicio Medico</label><br>

      @if(count($perros5)==0)
        <label >{{Form::radio('servicio','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('servicio','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros5[0]->Servicio_medico=='Si')
          <label for=""><input type="radio" name="servicio" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="servicio" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="servicio" value="Si"> Si</label>
        <label for=""><input type="radio" name="servicio" value="No" checked> No</label>

         @endif

        @endif

    </div>
    <div class="input=-group col-md-2">
      <label for="nombre">Baño Diario</label><br>

      @if(count($perros5)==0)
        <label >{{Form::radio('bano','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('bano','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros5[0]->Bano_diario=='Si')
          <label for=""><input type="radio" name="bano" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="bano" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="bano" value="Si"> Si</label>
        <label for=""><input type="radio" name="bano" value="No" checked> No</label>

         @endif

        @endif

    </div>
    <div class="input=-group col-md-2">
      <label for="nombre">Convivencia Animal </label><br>

      @if(count($perros5)==0)
        <label >{{Form::radio('convivencia','Si',array('class'=>'form-control','required'=>'true') )}} Si</label>
        <label>{{Form::radio('convivencia','No',array('class'=>'form-control','required'=>'true') )}}No</label>
        @else
          @if($perros5[0]->Convivencia_animal=='Si')
          <label for=""><input type="radio" name="convivencia" value="Si" checked> Si</label>
          <label for=""><input type="radio" name="convivencia" value="No"> No</label>

        @else
        <label for=""><input type="radio" name="convivencia" value="Si"> Si</label>
        <label for=""><input type="radio" name="convivencia" value="No" checked> No</label>

         @endif

        @endif

    </div>

    <div class="input-group col-md-12" style="margin-left:1%; padding-top:2%;margin-bottom:3%;">
      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
    </div>

    <input type="hidden" name="idbo" value="{{$Id_bene}}">

  {!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>
