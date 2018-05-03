<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="{{ asset('css/reporte.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <div class="titulo col-md-12">Expediente</div>
    <div class="col-md-2 col-md-offset-10">
      Folio No. <label>0001</label>
    </div>

    <div class="row col-md-12">
      <div class="foto col-md-1 col-md-offset-1">

      </div>
      <div class="requisitos col-md-4">
          Requisitos
        <br>
        <label for="">
          <input type="radio" name="" value="">Foto infantil y cuerpo entero
        </label>
        <br>
        <label for="">
          <input type="radio" name="" value="">Certificado y/0 credencial de discapacidad
        </label>
        <br>
        <label for="">
          <input type="radio" name="" value="">CURP y comprobante de domicilio
        </label>
      </div>
      <div class="col-md-4 col-md-offset-2">
        <label> Día
          <input class"col-md-1" type="number" name="" value="">
        </label>
        <label> Mes
          <input class"col-md-1" type="number" name="" value="">
        </label>
        <label> Año
          <input class"col-md-1" type="number" name="" value="">
        </label>
      </div>

    </div>
    <div class="segundalinea row col-md-12">
      <div class="col-md-4">
        <input class="col-md-12" type="text" name="" value="" placeholder="Nombre">
      </div>
      <div class="col-md-4">
        <input class="col-md-12" type="text" name="" value="" placeholder="Apellido Paterno">
      </div>
      <div class="col-md-4">
        <input class="col-md-12" type="text" name="" value="" placeholder="Apellido Materno">
      </div>
    </div>
    <div class="titulosterceralinea col-md-12">
      <div class="primera col-md-4">
      Fecha de nacimiento
      </div>
      <div class="segunda col-md-2">
      Lugar de nacimiento
      </div>
      <div class="tercero col-md-6">
      CURP
      </div>
    </div>
    <div class="terceralinea row col-md-12">

      <div class="col-md-4">

        <input class="col-md-4" type="number" name="" value="" placeholder="Dia">
        <input class="col-md-4" type="number" name="" value="" placeholder="Mes">
        <input class="col-md-4" type="number" name="" value="" placeholder="Año">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="">
      </div>
      <div class="col-md-6">
        <input class="col-md-4" type="text" name="" value="" placeholder="AAAA000000AAAAAA00">
      </div>
    </div>
    <div class="titulocuartalinea col-md-12">
      <div class="col-md-2">
        Edad
      </div>
      <div class="col-md-2">
        Sexo
      </div>
      <div class="col-md-8">
        Estado Civil
      </div>
    </div>
    <div class="cuartalinea col-md-12">
      <div class="col-md-2">
        <input type="number" name="" value="">
      </div>
      <div class="col-md-2">
        <label>Masculino <input type="radio" name="sexo" value="M"></label>
        <label>Femenino <input type="radio" name="sexo" value="F"></label>
      </div>
      <div class="col-md-8">
        <label class="col-md-2">Soltero <input type="radio" name="edo" value="1"></label>
        <label class="col-md-2">Casado<input type="radio" name="edo" value="2"></label>
        <label class="col-md-2">Viudo <input type="radio" name="edo" value="3"></label>
        <label class="col-md-2">Union Libre <input type="radio" name="edo" value="4"></label>
      </div>
    </div>

    <div class="titulosquintalinea col-md-12">
      <div class="col-md-6">
        Discapacidad
      </div>
      <div class="col-md-6">
        Causas de la Discapacidad
      </div>
    </div>
    <div class="quintalinea col-md-12">
      <div class="col-md-6">
        <label class="col-md-2">Auditiva <input type="radio" name="edo" value="1"></label>
        <label class="col-md-2">Visual <input type="radio" name="edo" value="2"></label>
        <label class="col-md-2">Intelectual <input type="radio" name="edo" value="3"></label>
        <label class="col-md-1">ME <input type="radio" name="edo" value="4"></label>
        <label class="col-md-2">Neuromotora <input type="radio" name="edo" value="5"></label>
        <input class="col-md-2" type="text" name="" value="" placeholder="Otra">
      </div>
      <div class="col-md-6">
        <label class="col-md-2">Nacimiento<input type="radio" name="edo" value="1"></label>
        <label class="col-md-2">Enfermedad<input type="radio" name="edo" value="2"></label>
        <label class="col-md-2">Violencia<input type="radio" name="edo" value="3"></label>
        <label class="col-md-2">Accidente<input type="radio" name="edo" value="4"></label>
        <label class="col-md-2">Vejez<input type="radio" name="edo" value="5"></label>
        <input class="col-md-2" type="text" name="" value="" placeholder=" Otra">
        <input class="col-md-3" type="text" name="" value="" placeholder=" Tiempo de padecer">
      </div>
    </div>
    <div class="titulosextalinea col-md-12 ">
      <div class="col-md-2">
        Tipo de Sangre
      </div>
      <div class="col-md-2">
        Peso
      </div>
      <div class="col-md-2">
        Estatura
      </div>
      <div class="col-md-2">
        Talla
      </div>
      <div class="col-md-2">
        Calzado
      </div>
      <div class="col-md-2">

      </div>
    </div>
    <div class="sextalinea col-md-12 ">
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="AB+">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="76">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="1.60">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="34">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="7">
      </div>
    </div>

    <div class="tituloseptimalinea col-md-12">
      <div class="col-md-4">
        Recibe Rehabilitacion
      </div>
      <div class="col-md-4">
        Cuenta con apoyo funcional
      </div>
      <div class="col-md-4">
        Requiere apoyo funcional
      </div>
    </div>
    <div class="septimalinea col-md-12">
      <div class="col-md-4">
        <label class="col-md-2">Si<input type="radio" name="rehab" value="1"></label>
        <label class="col-md-2">No<input type="radio" name="rehab" value="2"></label>
        <input class="col-md-4" type="text" name="donde" placeholder="Donde recibe">
        <input class="col-md-4" type="text" name="donde" placeholder="Que rehabilitacion">
      </div>
      <div class="col-md-4">
        <label class="col-md-2">Si<input type="radio" name="apoyo" value="1"></label>
        <label class="col-md-2">No<input type="radio" name="apoyo" value="2"></label>
        <input class="col-md-8" type="text" name="" value="" placeholder="Cual">
      </div>
      <div class="col-md-4">
        <label class="col-md-2">Si<input type="radio" name="requiere" value="1"></label>
        <label class="col-md-2">No<input type="radio" name="requiere" value="2"></label>
      </div>
    </div>
    <div class="titulodebajoseptima col-md-12">
      <div class="col-md-12">
        Tipo de apoyo funcional
      </div>
    </div>
    <div class="debajoseptima col-md-12">
      <div class="col-md-12">
        <label class="col-md-2">Andador<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Aparato auditivo<input type="radio" name="tipo" value="2"></label>
        <label class="col-md-1">Baston<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Baston invidente<input type="radio" name="tipo" value="2"></label>
        <label class="col-md-1">Muletas<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Protesis<input type="radio" name="tipo" value="2"></label>
        <label class="col-md-2">Silla electrica<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Silla infantil<input type="radio" name="tipo" value="2"></label>
        <label class="col-md-2">Silla PCI<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Silla de ruedas<input type="radio" name="tipo" value="2"></label>
        <label class="col-md-2">Silla de soporte<input type="radio" name="tipo" value="1"></label>
        <label class="col-md-2">Silla de baño<input type="radio" name="tipo" value="2"></label>
        <input class="col-md-2" type="text" name="" value="" placeholder="Otro">
      </div>
    </div>
    <div class="titulooctavalinea col-md-12">
      <div class="col-md-4">
        Domicilio
      </div>
      <div class="col-md-2">
        Cp
      </div>
      <div class="col-md-4">
        Localidad
      </div>
    </div>
    <div class="octavalinea col-md-12">
      <div class="col-md-4">
          <input class="col-md-12" type="text" name="" value="" placeholder="Calle, colonia  y numero">
      </div>
      <div class="col-md-2">
        <input class="col-md-4" type="text" name="" value="" placeholder="Cp">
      </div>
      <div class="col-md-2">
        <input type="text" name="" value="" placeholder="Localidad">
      </div>
    </div>


    </form>


  </body>
</html>
