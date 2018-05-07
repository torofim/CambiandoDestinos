@extends('layouts.layout')

@section('principal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Datos Personales</div>

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

                  {{Form::open(array('url'=>'admin.datospersonales.edit',$usu->id))}}
                    <div class="input=-group col-md-4">
                      <label for="nombre">Nombre</label><br>
                      {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Apellido Paterno</label><br>
                      {{Form::text('ap_p','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Apellido materno</label><br>
                      {{Form::text('ap_m','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Fecha nacimiento </label><br>
                      {{Form::date('fecha_na','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Lugar nacimiento </label><br>
                      {{Form::text('lugar_na','',array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Edad </label><br>
                      {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Sexo </label><br>
                      {{Form::text('sexo','',array('class'=>'form-control','placeholder'=>'M o F') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Estado civil </label><br>
                      {{Form::text('edo_civil','',array('class'=>'form-control','placeholder'=>'Estado civil') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Tipo sanguineo </label><br>
                      {{Form::text('tipo_sangre','',array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Peso </label><br>
                      {{Form::text('peso','',array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Estatura </label><br>
                      {{Form::number('estatura','',array('class'=>'form-control','placeholder'=>'Ejemplo: 1.6') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Talla </label><br>
                      {{Form::number('talla','',array('class'=>'form-control','placeholder'=>'Talla') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Calzado </label><br>
                      {{Form::number('calzado','',array('class'=>'form-control','placeholder'=>'Calzado') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Domicilio </label><br>
                      {{Form::text('domicilio','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Codigo Postal </label><br>
                      {{Form::number('cp','',array('class'=>'form-control','placeholder'=>'Cp') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Localidad </label><br>
                      {{Form::text('localidad','',array('class'=>'form-control','placeholder'=>'Localidad') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Telefono </label><br>
                      {{Form::number('tel','',array('class'=>'form-control','placeholder'=>'Telefono') )}}
                    </div>
                    <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
                      {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
                    </div>
                  {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
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



@endsection
