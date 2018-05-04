<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title>Beneficiarios</title>
  </head>
  <body >
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
    <div class="card-header" style="margin-bottom:2%; font-size:3rem; margin-left:1.5%;">Datos Personales</div>

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
          @if(count($perros)==0)
            {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
            @else
            {{Form::text('nombre',$perros[0]->Nombre,array('class'=>'form-control','placeholder'=>'Nombre') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Apellido Paterno</label><br>
          @if(count($perros)==0)
            {{Form::text('ap_p','',array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
            @else
            {{Form::text('ap_p',$perros[0]->Apellido_p,array('class'=>'form-control','placeholder'=>'Apellido paterno') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Apellido materno</label><br>
          @if(count($perros)==0)
            {{Form::text('ap_m','',array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
            @else
            {{Form::text('ap_m',$perros[0]->Apellido_m,array('class'=>'form-control','placeholder'=>'Apellido materno') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Fecha nacimiento </label><br>
          @if(count($perros)==0)
            {{Form::date('fecha_na','',array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
            @else
            {{Form::date('fecha_na',$perros[0]->Fecha_nacimiento,array('class'=>'form-control','placeholder'=>'Fecha nacimiento') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Lugar nacimiento </label><br>
          @if(count($perros)==0)
            {{Form::text('lugar_na','',array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
            @else
            {{Form::text('lugar_na',$perros[0]->Lugar_nacimiento,array('class'=>'form-control','placeholder'=>'Lugar nacimiento') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Edad </label><br>
          @if(count($perros)==0)
            {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
            @else
            {{Form::number('edad',$perros[0]->Edad,array('class'=>'form-control','placeholder'=>'Edad') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Sexo </label><br>
          @if(count($perros)==0)
            {{Form::text('sexo','',array('class'=>'form-control','placeholder'=>'M o F') )}}
            @else
            {{Form::text('sexo',$perros[0]->Sexo,array('class'=>'form-control','placeholder'=>'M o F') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Estado civil </label><br>
          @if(count($perros)==0)
            {{Form::text('edo_civil','',array('class'=>'form-control','placeholder'=>'Estado civil') )}}
            @else
            {{Form::text('edo_civil',$perros[0]->Edo_civil,array('class'=>'form-control','placeholder'=>'Estado civil') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Tipo sanguineo </label><br>
          @if(count($perros)==0)
            {{Form::text('tipo_sangre','',array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
            @else
            {{Form::text('tipo_sangre',$perros[0]->Tipo_sangre,array('class'=>'form-control','placeholder'=>'Tipo sangre') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Peso </label><br>
          @if(count($perros)==0)
            {{Form::text('peso','',array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
            @else
            {{Form::text('peso',$perros[0]->Peso,array('class'=>'form-control','placeholder'=>'Tipo peso') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Estatura </label><br>
          @if(count($perros)==0)
            {{Form::number('estatura','',array('class'=>'form-control','placeholder'=>'Ejemplo: 1.6') )}}
            @else
            {{Form::number('estatura',$perros[0]->Estatura,array('class'=>'form-control','placeholder'=>'Ejemplo: 1.6') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Talla </label><br>
          @if(count($perros)==0)
            {{Form::number('talla','',array('class'=>'form-control','placeholder'=>'Talla') )}}
            @else
            {{Form::number('talla',$perros[0]->Talla,array('class'=>'form-control','placeholder'=>'Talla') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Calzado </label><br>
          @if(count($perros)==0)
            {{Form::number('calzado','',array('class'=>'form-control','placeholder'=>'Calzado') )}}
            @else
            {{Form::number('calzado',$perros[0]->Calzado,array('class'=>'form-control','placeholder'=>'Calzado') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Domicilio </label><br>
          @if(count($perros)==0)
            {{Form::text('domicilio','',array('class'=>'form-control','placeholder'=>'Domicilio') )}}
            @else
            {{Form::text('domicilio',$perros[0]->Domicilio,array('class'=>'form-control','placeholder'=>'Domicilio') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Codigo Postal </label><br>
          @if(count($perros)==0)
            {{Form::number('cp','',array('class'=>'form-control','placeholder'=>'Cp') )}}
            @else
            {{Form::number('cp',$perros[0]->Cp,array('class'=>'form-control','placeholder'=>'Cp') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Localidad </label><br>
          @if(count($perros)==0)
            {{Form::text('localidad','',array('class'=>'form-control','placeholder'=>'Localidad') )}}
            @else
              {{Form::text('localidad',$perros[0]->Localidad,array('class'=>'form-control','placeholder'=>'Localidad') )}}
            @endif
        </div>
        <div class="input=-group col-md-4">
          <label for="nombre">Telefono </label><br>
          @if(count($perros)==0)
            {{Form::number('tel','',array('class'=>'form-control','placeholder'=>'Telefono') )}}
            @else
            {{Form::number('tel',$perros[0]->Tel,array('class'=>'form-control','placeholder'=>'Telefono') )}}
            @endif
        </div>
        <div class="input-group col-md-12" style="margin-left:2%; padding-top:2%;margin-bottom:2%;">
          {{Form::submit('Actualizar',array('class'=>'btn btn-primary'))}}
        </div>
      {{Form::close()}}

    </div>
      </div>

  </div>

  <button class="accordion">Centro de Salud</button>
  <div class="panel1">
    @include('centrosalud')
</div>
  <button class="accordion">Discapacidad</button>
  <div class="panel1">
    @include('formularios.discapacidad')
  </div>
  <button class="accordion">Estatus</button>
  <div class="panel1">
    @include('formularios.estatus')
  </div>
  <button class="accordion">Tutor</button>
  <div class="panel1">
    @include('formularios.tutor')
  </div>
  <button class="accordion">Evaluacion</button>
  <div class="panel1">
    @include('formularios.evaluacion')
  </div>
  <button class="accordion">Archivos en Imagen</button>
  <div class="panel1">
    @include('archivo')

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
