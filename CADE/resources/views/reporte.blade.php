<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="{{ asset('css/reporte.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >

    <title></title>
  </head>
  <body>

    <div id="Todo">
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
      <form class="" action="index.html" method="post">
        <div class="titulo">Expediente Beneficiario</div>
      <div class="folio">
        @forelse($datosper1 as $usua)
        Folio No. <label>
        {{$usua->Id_bene}}
      </label>
      @empty
      Folio No. <label>
      000
    </label>
      @endforelse
      </div>
      <div class="fecha">
        Fecha:<label id="fesha">
        </label>
      </div>
      <div class="foto">

      </div>
            <div class="requisitos">
              Requisitos
            </div>
            <div class="uno">
              <br>
              <input class="inp1" type="radio" name="" value="">Foto cuerpo e infantil
            </div>
            <br>
            <div class="dos">
              <input class="inp1" type="radio" name="" value="">Certificado/Credencial Discapacidad
            </div>

            <div class="tres">
              <input class="inp1" type="radio" name="" value="">CURP/Comprobante Domicilio
            </div>
              <label class="tnom">Nombre</label>
            <div class="nombre">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Nombre}}">

              </input>
              @empty
              <input value="Sin registrar">
              </input>
              @endforelse
            </div>
            <label class="tapp">Apellido Paterno</label>
            <div class="app">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Apellido_p}}">
              </input>
              @empty
              <input value="sin registrar">
              </input>
              @endforelse
            </div>
            <label class="tapm">Apellido Materno</label>
            <div class="apm">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Apellido_m}}">

              </input>
              @empty
              <input value="Sin registrar">

              </input>
              @endforelse
            </div>
            <div class="primera">
              Fecha de nacimiento
            </div>
            <div class="segunda">
              Lugar de nacimiento
            </div>
            <div class="tercera">
              CURP
            </div>

            <div class="fechadatos">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Fecha_nacimiento}}">

              </input>
              @empty
              <input value="Sin registrar">

              </input>
              @endforelse
            </div>
            <div class="lugarna">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Lugar_nacimiento}}">

              </input>
              @empty
              <input value="Sin registrar">

              </input>
              @endforelse
            </div>
            <div class="curp">
              @forelse($datosper1 as $usua)
              <input value="  {{$usua->Curp}}">

              </input>
              @empty
              <input value="Sin registrar">

              </input>
              @endforelse
            </div>

            <!--SIN DAR ESTILOS AUN-->

        <div class="ed">
          Edad
        </div>
        <div class="estciv">
          Estado Civil
      </div>
        <div class="sex">
          Sexo
        </div>
        <div class="edad">
          @forelse($datosper1 as $usua)
          <input value="  {{$usua->Edad}}">

          </input>
          @empty
          <input value="Sin registrar">

          </input>
          @endforelse

        </div>
      <div class="sexo">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Sexo}}">

        </input>
        @empty
        <input value="Sin registrar">

        </input>
        @endforelse
      </div>
      <div class="estadocivil">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Edo_civil}}">

        </input>
        @empty
        <input value="Sin registrar">

        </input>
        @endforelse
      </div>
      <div class="tdisc">
            Discapacidad
          </div>

          <div class="audvis">
            <label for=""><input class="" type="radio" name="1" value="Auditiva">Auditiva</label>
            <br>
            <label for=""><input type="radio" name="2" value="Visual" >Visual</label>
          </div>
          <div class="intmus">
            <input class="" type="radio" name="3" value="Musculo Esqueletica" >Musculo Esquelética
            <br>
            <input class="" type="radio" name="4" value="Intelectual">Intelectual
          </div>
          <div class="df">
            <input class="" type="radio" name="5" value="Neuromotora">Neuromotora
            <br>
            <input class="" type="text" name="6" value="">
          </div>
            @if(count($perros9)=='')
            <div class="audvis">
              <label for=""><input class="" type="radio" name="1" value="Auditiva">Auditiva</label>
              <br>
              <label for=""><input type="radio" name="2" value="Visual" >Visual</label>
            </div>
            <div class="intmus">
              <input class="" type="radio" name="3" value="Musculo Esqueletica" >Musculo Esquelética
              <br>
              <input class="" type="radio" name="4" value="Intelectual">Intelectual
            </div>
            <div class="df">
              <input class="" type="radio" name="5" value="Neuromotora">Neuromotora
              <br>
              <input class="" type="text" name="6" value="">
            </div>

              @else
                @if($perros9[0]->Auditiva=='Si')
                <div class="audvis">
                  <label for=""><input class="" type="radio" name="1" value="Auditiva" checked>Auditiva</label>
                </div>
                @else
                <div class="audvis">
                  <label for=""><input class="" type="radio" name="1" value="Auditiva">Auditiva</label>
                </div>
                @endif

              @if($perros9[0]->Visual=='Si')
                <div class="audvis">
                    <label for=""><input type="radio" name="2" value="Visual" style="margin-top:32px;" checked>Visual</label>
                </div>
              @else
              <div class="audvis">
                  <label for=""><input type="radio" name="2" value="Visual" style="margin-top:32px;" >Visual</label>
              </div>
              @endif
            @if($perros9[0]->Intelectual=='Si')
              <div class="intmus">
                  <input class="" type="radio" name="4" value="Intelectual" style="margin-left:0px; margin-top:26px; " checked>Intelectual
              </div>
            @else
            <div class="intmus">
                <input class="" type="radio" name="4" value="Intelectual" style="margin-left:222px; margin-top:26px;" >Intelectual
            </div>
            @endif
          @if($perros9[0]->MusculoEsqueletica=='Si')
        <div class="intmus">
          <input class="" type="radio" name="3" value="Musculo Esqueletica" style="margin-left:0px; margin-top:0px;" checked>Musculo Esqueletica
        </div>
        @else
        <div class="intmus">
          <input class="" type="radio" name="3" value="Musculo Esqueletica" style="margin-left:0px; margin-top:0px;">Musculo Esqueletica
        </div>
        @endif
        @if($perros9[0]->Neuromotora=='Si')
      <div class="df">
        <input class="" type="radio" name="5" value="Neuromotora" checked>Neuromotora
      </div>
      @else
      <div class="df">
        <input class="" type="radio" name="5" value="Neuromotora" >Neuromotora
      </div>
      @endif

              @endif
              @if(count($perros9[0]->Auditiva=='No' and ->Visual=='No'))
              
              @else
              @endif

      <div class="causa">
        Causa de la discapacidad
      </div>
      @if(count($perros2)=='')
      <div class="naen">
        <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
        <br>
        <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
      </div>
      <div class="viac">
    <label for=""><input type="radio" name="sEditar" value="Violencia">Violencia</label>
    <br>
    <label for=""><input type="radio" name="sEditar" value="Accidente">Accidente</label>
  </div>
  <div class="veot">
  <label for=""><input type="radio" name="sEditar" value="Vejez">Vejez</label>
  <br>
  <input class="" type="text" name="" value="">
</div>
        @else
          @if($perros2[0]->Causa_discapacidad=='Nacimiento')
          <div class="naen">

            <label for=""><input type="radio" name="sEditar" value="Nacimiento" checked>Nacimiento</label>
            <br>
            <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
          </div>
          <div class="viac">
        <label for=""><input type="radio" name="sEditar" value="Violencia">Violencia</label>
        <br>
        <label for=""><input type="radio" name="sEditar" value="Accidente">Accidente</label>
      </div>
      <div class="veot">
      <label for=""><input type="radio" name="sEditar" value="Vejez">Vejez</label>
      <br>
      <input class="" type="text" name="" value="">
    </div>
        @elseif($perros2[0]->Causa_discapacidad=='Enfermedad')
        <div class="naen">
          <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
          <br>
          <label for=""><input type="radio" name="sEditar" value="Enfermedad" checked>Enfermedad</label>
        </div>
        <div class="viac">
      <label for=""><input type="radio" name="sEditar" value="Violencia">Violencia</label>
      <br>
      <label for=""><input type="radio" name="sEditar" value="Accidente">Accidente</label>
    </div>
    <div class="veot">
    <label for=""><input type="radio" name="sEditar" value="Vejez">Vejez</label>
    <br>
    <input class="" type="text" name="" value="">
  </div>
  @elseif($perros2[0]->Causa_discapacidad=='Violencia')
  <div class="naen">
    <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
    <br>
    <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
  </div>
  <div class="viac">
<label for=""><input type="radio" name="sEditar" value="Violencia"  checked>Violencia</label>
<br>
<label for=""><input type="radio" name="sEditar" value="Accidente">Accidente</label>
</div>
<div class="veot">
<label for=""><input type="radio" name="sEditar" value="Vejez">Vejez</label>
<br>
<input class="" type="text" name="" value="">
</div>
  @elseif($perros2[0]->Causa_discapacidad=='Accidente')
  <div class="naen">
    <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
    <br>
    <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
  </div>
  <div class="viac">
<label for=""><input type="radio" name="sEditar" value="Violencia"  >Violencia</label>
<br>
<label for=""><input type="radio" name="sEditar" value="Accidente" checked>Accidente</label>
</div>
<div class="veot">
<label for=""><input type="radio" name="sEditar" value="Vejez">Vejez</label>
<br>
<input class="" type="text" name="" value="">
</div>
  @elseif($perros2[0]->Causa_discapacidad=='Vejez')
  <div class="naen">
    <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
    <br>
    <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
  </div>
  <div class="viac">
<label for=""><input type="radio" name="sEditar" value="Violencia"  >Violencia</label>
<br>
<label for=""><input type="radio" name="sEditar" value="Accidente" >Accidente</label>
</div>
<div class="veot">
<label for=""><input type="radio" name="sEditar" value="Vejez" checked>Vejez</label>
<br>
<input class="" type="text" name="" value="">
</div>
@else
<div class="naen">
  <label for=""><input type="radio" name="sEditar" value="Nacimiento" >Nacimiento</label>
  <br>
  <label for=""><input type="radio" name="sEditar" value="Enfermedad">Enfermedad</label>
</div>
<div class="viac">
<label for=""><input type="radio" name="sEditar" value="Violencia"  >Violencia</label>
<br>
<label for=""><input type="radio" name="sEditar" value="Accidente" >Accidente</label>
</div>
<div class="veot">
<label for=""><input type="radio" name="sEditar" value="Vejez" >Vejez</label>
<br>
<input class="" type="text" name="" value="{{$perros2[0]->Causa_discapacidad}}">
</div>
         @endif

        @endif

      <div class="tiposangre">
        Tipo de Sangre
      </div>
      <div class="sangre">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Tipo_sangre}}">

        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tpeso">
        Peso
      </div>
      <div class="peso">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Peso}}Kg">

        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="testatura">
        Estatura
      </div>
      <div class="estatura">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Estatura}}cm">

        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="ttalla">
        Talla
      </div>
      <div class="talla">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Talla}}">

        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tcalzado">
        Calzado
      </div>
      <div class="calzado">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Calzado}}">

        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="trehab">
      Recibe rehabilitación
      </div>
      <div class="rehabradios">
        @if(count($perros2)=='')
        <label for=""><input type="radio" name="sEditar" value="Si" >Si</label>
        <br>
        <label for=""><input type="radio" name="sEditar" value="No">No</label>
          @else
            @if($perros2[0]->Rehabilitacion=='Si')
            <label for=""><input type="radio" name="sEditar" value="Si" checked>Si</label>
            <br>
            <label for=""><input type="radio" name="sEditar" value="No">No</label>

          @else
          <label for=""><input type="radio" name="sEditar" value="Si"> Si</label>
          <br>
          <label for=""><input type="radio" name="sEditar" value="No" checked> No</label>
           @endif
          @endif
      </div>
      <div class="tdonde">
        Donde
      </div>
      <div class="donde">
        @forelse($perros2 as $disca)
        <input value="  {{$disca->Lugar_de_rehabilitacion}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tcual">
        Cual
      </div>
      <div class="cual">
        @forelse($perros2 as $disca)
        <input value="  {{$disca->Tipo_rehabilitacion}}">
        </input>
        @empty
        <input value="">
        @endforelse
      </div>

      <div class="tapoyo">
      Cuenta con apoyo funcional
      </div>
      <div class="apoyofun">
        @if(count($perros2)=='')
        <label for=""><input type="radio" name="sa" value="Si">Si</label>
        <br>
        <label for=""><input type="radio" name="sa" value="No">No</label>
          @else
            @if($perros2[0]->Apoyo_funcional=='Si')
            <label for=""><input type="radio" name="sa" value="Si" checked>Si</label>
            <br>
            <label for=""><input type="radio" name="sa" value="No">No</label>

              @forelse($perros2 as $disca)
              <input style="margin-left:20px;" value="{{$disca->Tipo_apoyo}}">
              </input>
              @empty
              <label for=""><input type="radio" name="sa" value="Si">Si</label>
              <br>
              <label for=""><input type="radio" name="sa" value="No">No</label>
              @endforelse

          @elseif($perros2[0]->Apoyo_funcional=='No')
          <label for=""><input type="radio" name="sa" value="Si"> Si</label>
          <br>
          <label for=""><input type="radio" name="sa" value="No" checked> No</label>
          <div class="apoyocual">
            @forelse($perros2 as $disca)
            <input value="">
            </input>
            @empty
            <label for=""><input type="radio" name="sa" value="Si">Si</label>
            <br>
            <label for=""><input type="radio" name="sa" value="No">No</label>
            @endforelse
          </div>
          @else
          <label for=""><input type="radio" name="sa" value="Si"> Si</label>
          <br>
          <label for=""><input type="radio" name="sa" value="No"> No</label>
          <div class="apoyocual">
            @forelse($perros2 as $disca)
            <input value="">
            </input>
            @empty
            <label for=""><input type="radio" name="sa" value="Si">Si</label>
            <br>
            <label for=""><input type="radio" name="sa" value="No">No</label>
            @endforelse
          </div>
           @endif
          @endif
      </div>
      <div class="tcualapo" style="margin-left:55px;">
        Cual
      </div>


      <div class="treq">
        Requiere apoyo funcional
      </div>
      <div class="req">
        @if(count($perros2)=='')
        <label for=""><input type="radio" name="reqapoyo" value="Si">Si</label>
        <br>
        <label for=""><input type="radio" name="reqapoyo" value="No">No</label>
          @else
            @if($perros2[0]->Requiere_apoyo_funcional=='Si')
            <label for=""><input type="radio" name="reqapoyo" value="Si" checked>Si</label>
            <br>
            <label for=""><input type="radio" name="reqapoyo" value="No">No</label>
            <div class="tcualapoyo">
              Cual
            </div>
            <input type="text" style="margin-left:20px;" name="" value="{{$perros2[0]->Tipo_apoyo}}">

          @elseif($perros2[0]->Requiere_apoyo_funcional=='No')
          <label for=""><input type="radio" name="reqapoyo" value="Si"> Si</label>
          <br>
          <label for=""><input type="radio" name="reqapoyo" value="No" checked> No</label>
          <div class="tcualapoyo" style="margin-left:60px; margin-top:-55px;">
            Cual
          </div>
          <div class="reqcual" style="margin-left:60px; margin-top:-30px;">
            <input type="text" name=""  value="">
          </div>
          @else
          <label for=""><input type="radio" name="reqapoyo" value="Si"> Si</label>
          <br>
          <label for=""><input type="radio" name="reqapoyo" value="No"> No</label>
          <div class="tcualapoyo" style="margin-left:60px; margin-top:-55px;">
            Cual
          </div>
            <div class="reqcual" style="margin-left:60px; margin-top:-30px;">
              <input type="text" name=""  value="{{$perros2[0]->Requiere_apoyo_funcional}}">
            </div>
           @endif
          @endif
      </div>

      <!-- FALTA LOS RADIOS DE CUAL TIPO DE APOYO FUNCIONAL Y DATOS DE DOMICILIO Y TELEFONOS-->
      <div class="titulocual">
        Cual
      </div>
      <div class="tres1">
        <input type="radio" name="" value="">Andador
        <br>
        <input type="radio" name="" value="">Bastón
        <br>
        <input type="radio" name="" value="">Bastón invidente
        <br>
        <input type="radio" name="" value="">Muletas
      </div>
      <div class="tres2">
        <input type="radio" name="" value="">Prótesis
        <br>
        <input type="radio" name="" value="">Silla eléctrica
        <br>
        <input type="radio" name="" value="">Silla infantil
        <br>
        <input type="radio" name="" value="">Silla PCI
      </div>
      <div class="tres3">
        <input type="radio" name="" value="">Silla de ruedas
        <br>
        <input type="radio" name="" value="">Silla soporte
        <br>
        <input type="radio" name="" value="">Silla de baño
        <br>
        <input type="text" name="" value="">Otro
      </div>
      <div class="tdireccion">
        Dirección
      </div>
      <div class="direccion">
        @forelse($datosper1 as $usua)
        <input value="  {{$usua->Domicilio}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tcolonia">
        Colonia
      </div>
      <div class="colonia">
        @forelse($datosper1 as $usua)
        <input value="Chamizal">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tmunicipio">
        Municipio
      </div>
      <div class="municipio">
        @forelse($datosper1 as $usua)
        <input value="{{$usua->Municipio}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tcp">
        Código postal
      </div>
      <div class="cp">
        @forelse($datosper1 as $usua)
        <input value="{{$usua->Cp}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tlocal">
        Localidad
      </div>
      <div class="localidad">
        @forelse($datosper1 as $usua)
        <input value="{{$usua->Localidad}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="ttel">
        Teléfono
      </div>
      <div class="telefono">
        @forelse($datosper1 as $usua)
        <input value="{{$usua->Tel}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tcel">
        Celular
      </div>
      <div class="cel">
        @forelse($datosper1 as $usua)
        <input value="{{$usua->Tel}}"></input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>

      <div class="tjubilado">
        Jubilado o Pensionado
      </div>
      <div class="jubilado">
        @if(count($perros5)=='')
        <label for=""><input type="radio" name="jubi" value="Si">Si</label>

        <label for=""><input type="radio" name="jubi" value="No">No</label>
          @else
            @if($perros5[0]->Jubilado=='Si')
            <label for=""><input type="radio" name="jubi" value="Si" checked>Si</label>

            <label for=""><input type="radio" name="jubi" value="No">No</label>

          @elseif($perros5[0]->Jubilado=='No')
          <label for=""><input type="radio" name="jubi" value="Si"> Si</label>

          <label for=""><input type="radio" name="jubi" value="No" checked> No</label>

           @endif

          @endif
      </div>
      <div class="tsm">
        Servicio Médico
      </div>
      <div class="sm">
        <input type="radio" name="" value="">Si
        <br>
        <input type="radio" name="" value="">No
      </div>
      <div class="sm2">
        <input type="radio" name="" value=""> IMSS
        <br>
        <input type="radio" name="" value=""> ISSTE
      </div>
      <div class="sm3">
        <input type="radio" name="" value="">Seguro popular
        <br>
        <input type="radio" name="" value="">Pensiones
      </div>
      <div class="sm4">
        <input type="radio" name="" value="">ICHISAL
        <br>
        <input type="radio" name="" value="">Dispensario
      </div>
      <div class="tdtutor">
        Datos Tutor
      </div>
      <div class="tnombret">
        Nombre
      </div>
      <div class="nombret">
        @forelse($perros4 as $usua)
        <input value="{{$usua->Nombre_tutor}}">
        </input>
        @empty
        <input type="text" name="" value="">
        @endforelse
      </div>
      <div class="tapellidos">
        Apellidos
      </div>
      <div class="apellidost">
        @forelse($perros4 as $usua)
        <input value="{{$usua->Apellido_tutor}}">
        </input>
        @empty
        <input type="" name="" value="">
        @endforelse
      </div>
      <div class="ttutor">
        Tutor
      </div>
      <div class="radiotutor">
        @if(count($perros4)=='')
        <label for=""><input type="radio" name="saw" value="Si" >Padre</label>

        <label for=""><input type="radio" name="saw" value="No">Madre</label>
        <input type="text" name="" value="">
          @else
            @if($perros4[0]->Encargado=='Padre')
            <label for=""><input type="radio" name="wer" value="Si" checked>Padre</label>

            <label for=""><input type="radio" name="wer" value="No">Madre</label>
            <input type="text" name="" value="">

          @elseif($perros4[0]->Encargado=='Madre')
          <label for=""><input type="radio" name="wer" value="Si"> Padre</label>

          <label for=""><input type="radio" name="wer" value="No" checked> Madre</label>
          <input type="text" name="" value="">
          @else
          <label for=""><input type="radio" name="wer" value="Si"> Padre</label>

          <label for=""><input type="radio" name="wer" value="No"> Madre</label>
          <input type="text" name="" value="{{$perros4[0]->Encargado}}">
           @endif
          @endif
        </div>
      <div class="tcurp">
        CURP
      </div>
      <div class="curptutor">
        @forelse($perros4 as $usua)
        <input value="{{$usua->Curp_tutor}}">
        </input>
        @empty
        <input value="">
        </input>
        @endforelse
      </div>
      <div class="trfc">
        RFC
      </div>
      <div class="rfctutor">
        @forelse($perros4 as $usua)
        <input value="{{$usua->Rfc_tutor}}">
        </input>
        @empty
        <input value="">
        </input>
        @endforelse
      </div>

      <div class="thabitos">
        Hábitos Personales
      </div>
      <div class="tdiario">
        Baño Diario
      </div>
      <div class="diario">
        @if(count($perros10)=='')
        <label for=""><input type="radio" name="saw" value="Si" >Si</label>

        <label for=""><input type="radio" name="saw" value="No">No</label>
          @else
            @if($perros10[0]->Bano_diario=='Si')
            <label for=""><input type="radio" name="saw" value="Si" checked>Si</label>

            <label for=""><input type="radio" name="saw" value="No">No</label>

          @elseif($perros10[0]->Bano_diario=='No')
          <label for=""><input type="radio" name="saw" value="Si"> Si</label>

          <label for=""><input type="radio" name="saw" value="No" checked> No</label>
           @endif
          @endif
      </div>
      <div class="tconvive">
        Convive con animales
      </div>
      <div class="convive">
        @if(count($perros10)=='')
        <label for=""><input type="radio" name="x" value="Si">Si   </label>

        <label for=""><input type="radio" name="x" value="No">No</label>
          @else
            @if($perros10[0]->Convivencia_animal=='Si')
            <label for=""><input type="radio" name="x" value="Si" checked>Si</label>

            <label for=""><input type="radio" name="x" value="No">No</label>

          @elseif($perros10[0]->Convivencia_animal=='No')
          <label for=""><input type="radio" name="x" value="Si"> Si</label>

          <label for=""><input type="radio" name="x" value="No" checked> No</label>

           @endif

          @endif
      </div>
      <div class="tantecedentes">
        Antecedentes
      </div>
      <div class="antecedentes">
        @forelse($perros4 as $usuas)
        <input value="{{$usuas->Antecedentes}}">
        </input>
        @empty
        <input value="">
        </input>
        @endforelse
      </div>



  </body>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
}

if(mm<10) {
    mm = '0'+mm
}

today = dd + '/' + mm + '/' + yyyy;
    document.getElementById('fesha').innerHTML=today;




function imprimir(elemento){
  var  respaldo=$('body').html();
  var div=$("#"+elemento).clone();
  $('body').empty().html(div);

  window.print();
  $('body').html(respaldo);

}
$(document).ready(function(){
  imprimir('Todo');
});
</script>
  </body>
</html>
