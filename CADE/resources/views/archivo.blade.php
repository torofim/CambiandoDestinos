
<div class="container col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subir archivo</div>

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
                  {{Form::open(array('url'=>'/admin/archivos','files'=>true))}}
                    <div class="input=-group col-md-6">
                      <label for="nombre">Foto infantil</label><br>
                        {{Form::file('Foto_infantil',array('class'=>'form-control','placeholder'=>'Imagen','required'=>'true') )}}
                    </div>
                    <div class="input=-group col-md-6">
                      <label for="nombre">Cuerpo completo</label><br>
                      {{Form::file('Foto_cuerpo',array('class'=>'form-control','placeholder'=>'Imagen','required'=>'true') )}}
                    </div>
                    <div class="input=-group col-md-6">
                      <label for="nombre">Certificado</label><br>
                      {{Form::file('Certificado_discapacida',array('class'=>'form-control','placeholder'=>'Imagen','required'=>'true') )}}
                    </div>
                    <div class="input=-group col-md-6">
                      <label for="nombre"> Comprobante Domicilio</label><br>
                        {{Form::file('Com_dom',array('class'=>'form-control','placeholder'=>'Imagen','required'=>'true') )}}
                    </div>

                    <div class="input=-group col-md-6" >
                      <label for="nombre">Curp</label><br>
                      {{Form::file('Curp',array('class'=>'form-control','placeholder'=>'Imagen','required'=>'true') )}}
                    </div>
                    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;margin-bottom:3%;">
                      {{Form::submit('Subir',array('class'=>'btn btn-primary'))}}
                    </div>
                    <input type="hidden" name="idbene" value="{{$Id_bene}}">
                  {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
