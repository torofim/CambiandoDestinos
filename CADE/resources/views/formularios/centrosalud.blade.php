
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <div class="alert alert-success divfade" style="position:absolute;top:10%;left:40%;">
                      {{session()->get('mensaje')}}
                    </div>
                  @endif
                  {!!Form::open(array('route'=>['admin.centrosalud.store','0'],'method'=>'POST'))!!}
                    <div class="input=-group col-md-4">
                      <label for="nombre">Edad</label><br>

                        {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}

                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Peso (Kg)</label><br>

                        {{Form::number('peso','',array('class'=>'form-control','placeholder'=>'Peso') )}}

                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">PAS</label><br>

                        {{Form::number('pas','',array('class'=>'form-control','placeholder'=>'Presion Arterial') )}}

                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">PAD</label><br>

                        {{Form::number('pad','',array('class'=>'form-control','placeholder'=>'Presion Arterial') )}}

                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Fecha</label><br>

                        {{Form::date('fecha','',array('class'=>'form-control','placeholder'=>'Fecha') )}}

                    </div>
                    <div class="input-group col-md-4" style="margin-left:4%; padding-top:2.5%;top:10%;">
                      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                    </div>
                    <input type="hidden" name="idis" value="{{$Id_bene}}">
                  {!!Form::close()!!}
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">
$('.divfade').fadeOut(2000);

</script>
