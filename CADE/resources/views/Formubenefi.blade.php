<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Beneficiarios</title>
  </head>
  <body>
      @include('layouts.nav')
      <div class="main">
        <div class="panel panel-default" style="background-color:transparent;">
            <div class="panel-body cold-md-2" id="sepa">

          </div>

        </div>
        <div class="panel2 panel-default col-xs-12 ">
          <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">
            Fundacion Cambiando Destinos
          </div>
        </div>

        <div class="col-md-12 contenida" >
          <div class="acordiona" style="height:inherit;">


          <button class="accordion">Datos Personales</button>
  <div class="panel1">
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

        {{Form::open(array('url'=>'/admin/benefi','files'=>true))}}
        <div class="input=-group col-md-4">
          <label for="nombre">Nombre</label><br>
          {{Form::text('nombre',$perros[0]->Nombre,array('class'=>'form-control','placeholder'=>'Nombre') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Apellido Paterno</label><br>
          {{Form::text('ap_p',$perros[0]->Apellido_p,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Apellido materno</label><br>
          {{Form::text('ap_m',$perros[0]->Apellido_m,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Fecha nacimiento </label><br>
          {{Form::date('fecha_na',$perros[0]->Fecha_nacimiento,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Lugar nacimiento </label><br>
          {{Form::text('lugar_na',$perros[0]->Lugar_nacimiento,array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Edad </label><br>
          {{Form::number('edad',$perros[0]->Edad,array('class'=>'form-control','placeholder'=>'Edad') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Sexo </label><br>
          {{Form::text('sexo',$perros[0]->Sexo,array('class'=>'form-control','placeholder'=>'M o F') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Estado civil </label><br>
          {{Form::text('edo_civil',$perros[0]->Edo_civil,array('class'=>'form-control','placeholder'=>'Estado civil') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Tipo sanguineo </label><br>
          {{Form::text('tipo_sangre',$perros[0]->Tipo_sangre,array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Peso </label><br>
          {{Form::text('peso',$perros[0]->Peso,array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Estatura </label><br>
          {{Form::number('estatura',$perros[0]->Estatura,array('class'=>'form-control','placeholder'=>'Ejemplo: 1.6') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Talla </label><br>
          {{Form::number('talla',$perros[0]->Talla,array('class'=>'form-control','placeholder'=>'Talla') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Calzado </label><br>
          {{Form::number('calzado',$perros[0]->Calzado,array('class'=>'form-control','placeholder'=>'Calzado') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Domicilio </label><br>
          {{Form::text('domicilio',$perros[0]->Domicilio,array('class'=>'form-control','placeholder'=>'Domicilio') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Codigo Postal </label><br>
          {{Form::number('cp',$perros[0]->Cp,array('class'=>'form-control','placeholder'=>'Cp') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Localidad </label><br>
          {{Form::text('localidad',$perros[0]->Localidad,array('class'=>'form-control','placeholder'=>'Localidad') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Telefono </label><br>
          {{Form::number('tel',$perros[0]->Tel,array('class'=>'form-control','placeholder'=>'Telefono') )}}
        </div>
        <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;">
          {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
        </div>
      {{Form::close()}}

    </div>
      </div>

  </div>

  <button class="accordion">Centro de Salud</button>
  <div class="panel1">
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
      {{Form::open(array('url'=>'/admin/Centrosalud','files'=>true))}}
        <div class="input=-group col-md-4">
          <label for="nombre">Edad</label><br>
          {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Peso (Kg)</label><br>
          {{Form::number('peso','',array('class'=>'form-control','placeholder'=>'Peso') )}}
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Presion Arterial</label><br>
          {{Form::text('presion','',array('class'=>'form-control','placeholder'=>'Presion') )}}
        </div>
        <div class="input-group col-md-4" style="margin-left:2%; padding-top:2.5%;">
          {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
        </div>
      {{Form::close()}}
    </div>
  </div>

  <button class="accordion">Discapacidad</button>
  <div class="panel1">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" name="button" id="btnformas"></button>
  </div>
  <button class="accordion">Tutor</button>
  <div class="panel1">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" name="button"id="btnformas"></button>
  </div>
  <button class="accordion">Evaluacion</button>
  <div class="panel1">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" name="button"id="btnformas"></button>
  </div>
  <button class="accordion">Archivos en Imagen</button>
  <div class="panel1">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, o laboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button" name="button"id="btnformas"></button>
  </div>

</div>
        </div>


        <script>
        var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel1 = this.nextElementSibling;
      if (panel1.style.maxHeight){
        panel1.style.maxHeight = null;
      } else {
        panel1.style.maxHeight = panel1.scrollHeight + "px";
      }
    });
  }
        </script>
  </body>
</html>
