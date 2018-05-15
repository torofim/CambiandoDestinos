
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

                  {!!Form::open(array('route'=>['admin.datospersonales.edit','0'],'method'=>'GET'))!!}
                  <div class="input=-group col-md-4">
                    <label for="nombre">Nombre</label><br>
                    @if(count($datosper)==0)
                      {{Form::text('nameEditar','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                      @else
                      {{Form::text('nameEditar',$datosper[0]->Nombre,array('class'=>'form-control','placeholder'=>'Nombre') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Apellido Paterno</label><br>
                    @if(count($datosper)==0)
                      {{Form::text('appEditar','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
                      @else
                      {{Form::text('appEditar',$datosper[0]->Apellido_p,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Apellido materno</label><br>
                    @if(count($datosper)==0)
                      {{Form::text('apmEditar','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
                      @else
                      {{Form::text('apmEditar',$datosper[0]->Apellido_m,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Fecha nacimiento </label><br>
                    @if(count($datosper)==0)
                      {{Form::date('fEditar','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
                      @else
                      {{Form::date('fEditar',$datosper[0]->Fecha_nacimiento,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Lugar nacimiento </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('lEditar','',array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
                      @else
                      {{Form::text('lEditar',$datosper[0]->Lugar_nacimiento,array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Edad </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('eEditar','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                      @else
                      {{Form::number('eEditar',$datosper[0]->Edad,array('class'=>'form-control','placeholder'=>'Edad') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Sexo </label><br>
                    @if(count($datosper)==0)
                      <label >{{Form::radio('sEditar','M',array('class'=>'form-control','required'=>'true') )}} M</label>
                      <label>{{Form::radio('sEditar','F',array('class'=>'form-control','required'=>'true') )}}F</label>
                      @else
                        @if($datosper[0]->Sexo=='Si')
                        <label for=""><input type="radio" name="sEditar" value="M" checked> M</label>
                        <label for=""><input type="radio" name="sEditar" value="F"> F</label>

                      @else
                      <label for=""><input type="radio" name="sEditar" value="M"> M</label>
                      <label for=""><input type="radio" name="sEditar" value="F" checked> F</label>

                       @endif

                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Curp </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('curpEditar','',array('class'=>'form-control','placeholder'=>'Curp') )}}
                      @else
                      {{Form::number('curpEditar',$datosper[0]->Curp,array('class'=>'form-control','placeholder'=>'Curp') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Estado civil </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('edoEditar','',array('class'=>'form-control','placeholder'=>'Estado civil') )}}
                      @else
                      {{Form::text('edoEditar',$datosper[0]->Edo_civil,array('class'=>'form-control','placeholder'=>'Estado civil') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Tipo sanguineo </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('tiEditar','',array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
                      @else
                      {{Form::text('tiEditar',$datosper[0]->Tipo_sangre,array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Peso </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('peEditar','',array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
                      @else
                      {{Form::text('peEditar',$datosper[0]->Peso,array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Estatura </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('esEditar','',array('class'=>'form-control','step'=>'any','placeholder'=>'Ejemplo: 1.6') )}}
                      @else
                      {{Form::number('esEditar',$datosper[0]->Estatura,array('class'=>'form-control','step'=>'any','placeholder'=>'Ejemplo: 1.6') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Talla </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('taEditar','',array('class'=>'form-control','placeholder'=>'Talla') )}}
                      @else
                      {{Form::number('taEditar',$datosper[0]->Talla,array('class'=>'form-control','placeholder'=>'Talla') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Calzado </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('caEditar','',array('class'=>'form-control','placeholder'=>'Calzado') )}}
                      @else
                      {{Form::number('caEditar',$datosper[0]->Calzado,array('class'=>'form-control','placeholder'=>'Calzado') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Domicilio </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('doEditar','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}
                      @else
                      {{Form::text('doEditar',$datosper[0]->Domicilio,array('class'=>'form-control','placeholder'=>'Domicilio') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre" >Codigo Postal </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('cpEditar','',array('class'=>'form-control','placeholder'=>'Cp') )}}
                      @else
                      {{Form::number('cpEditar',$datosper[0]->Cp,array('class'=>'form-control','placeholder'=>'Cp') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Localidad </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('locEditar','',array('class'=>'form-control','placeholder'=>'Localidad') )}}
                      @else
                        {{Form::text('locEditar',$datosper[0]->Localidad,array('class'=>'form-control','placeholder'=>'Localidad') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Municipio </label><br>
                    @if(count($datosper)==0)
                      {{Form::text('munEditar','',array('class'=>'form-control','placeholder'=>'Municipio') )}}
                      @else
                        {{Form::text('munEditar',$datosper[0]->Localidad,array('class'=>'form-control','placeholder'=>'Municipio') )}}
                      @endif
                  </div>
                  <div class="input=-group col-md-4">
                    <label for="nombre">Telefono </label><br>
                    @if(count($datosper)==0)
                      {{Form::number('telEditar','',array('class'=>'form-control','placeholder'=>'Telefono') )}}
                      @else
                      {{Form::number('telEditar',$datosper[0]->Tel,array('class'=>'form-control','placeholder'=>'Telefono') )}}
                      @endif
                  </div>
                  <div class="input-group col-md-12" style="margin-left:1.5%; padding-top:2%;margin-bottom:2%;">
                    {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
                  </div>
                  <input type="hidden" name="id" value="{{$datosper[0]->Id_bene}}" >
                  {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    A VER SI SALE
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".btn").on('click',function(){
    var a=$(this).data('Nombre');
    var b=$(this).data('Apellido_p');
    var c=$(this).data('Apellido_m');
    var d=$(this).data('Fecha_nacimiento');
    var e=$(this).data('Lugar_nacimiento');
    var f=$(this).data('Edad');
    var g=$(this).data('Sexo');
    var h=$(this).data('Edo_civil');
    var i=$(this).data('Tipo_sangre');
    var j=$(this).data('Peso');
    var k=$(this).data('Estatura');
    var l=$(this).data('Talla');
    var m=$(this).data('Calzado');
    var n=$(this).data('Domicilio');
    var o=$(this).data('Cp');
    var p=$(this).data('Localidad');
    var q=$(this).data('Tel');

    $("#nameEditar").val(a);
    $("#appEditar").val(b);
    $('#apmEditar').val(c);
    $("#fEditar").val(d);
    $("#lEditar").val(e);
    $('#eEditar').val(f);
    $("#sEditar").val(g);
    $("#edoEditar").val(h);
    $('#tiEditar').val(i);
    $("#peEditar").val(j);
    $("#esEditar").val(k);
    $('#taEditar').val(l);
    $("#caEditar").val(m);
    $("#doEditar").val(n);
    $('#cpEditar').val(o);
    $("#locEditar").val(p);
    $("#telEditar").val(q);

  });
});
</script>
