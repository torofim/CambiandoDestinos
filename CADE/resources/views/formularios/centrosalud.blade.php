
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Datos Del Centro de Salud</div>

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
                  {!!Form::open(array('route'=>['admin.centrosalud.store','0'],'method'=>'POST'))!!}
                    <div class="input=-group col-md-4">
                      <label for="nombre">Edad</label><br>
                      @if(count($perros6)==0)
                        {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                        @else
                        {{Form::number('edad',$perros6[0]->Edad,array('class'=>'form-control','placeholder'=>'Edad') )}}
                        @endif
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Peso (Kg)</label><br>
                      @if(count($perros6)==0)
                        {{Form::number('peso','',array('class'=>'form-control','placeholder'=>'Peso') )}}
                        @else
                        {{Form::number('peso',$perros6[0]->Peso,array('class'=>'form-control','placeholder'=>'Peso') )}}
                        @endif
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Presion Arterial</label><br>
                      @if(count($perros6)==0)
                        {{Form::number('presion','',array('class'=>'form-control','placeholder'=>'Presion Arterial') )}}
                        @else
                        {{Form::number('presion',$perros6[0]->presion_arterial,array('class'=>'form-control','placeholder'=>'Presion Arterial') )}}
                        @endif
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Presion Arterial</label><br>
                      @if(count($perros6)==0)
                        {{Form::date('fecha','',array('class'=>'form-control','placeholder'=>'Fecha') )}}
                        @else
                        {{Form::date('fecha',$perros6[0]->Fecha_centrosalud,array('class'=>'form-control','placeholder'=>'Fecha') )}}
                        @endif
                    </div>
                    <div class="input-group col-md-4" style="margin-left:2%; padding-top:2.5%;">
                      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                    </div>
                    <input type="hidden" name="idis" value="{{$Id}}">
                  {!!Form::close()!!}
                </div>

            </div>
        </div>
    </div>
</div>
