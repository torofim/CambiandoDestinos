<div class="card-body" >
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
  <!-- ESTA ES LA TABLA ORIGINAL PARA POSTERIORES USOS-->
  <div class="row">
    <h2 style="margin-left:1%;"></h2>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
        <p>Datos Personales del Beneficiario</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right:white solid;">Id</td>
          <td style="border-right:white solid;">Nombre</td>
          <td style="border-right:white solid;">Apellido</td>
          <td style="border-right:white solid;">Apellido</td>
          <td style="border-right:white solid;">Fecha Nacimiento</td>


        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros as $usu)
          <td>{{$usu->Id_bene}}</td>
          <td>{{$usu->Nombre}}</td>
          <td>{{$usu->Apellido_p}}</td>
          <td>{{$usu->Apellido_m}}</td>
          <td>{{$usu->Fecha_nacimiento}}</td>



          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>

    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
    <thead>
      <tr style="border:white solid;background-color:#4c4f54;">
        <td style="border-right:white solid;">Lugar Nacimiento</td>
        <td style="border-right:white solid;">Edad</td>
        <td style="border-right:white solid;">Sexo</td>
        <td style="border-right:white solid;">Estado Civil</td>
        <td style="border-right:white solid;">Tipo de Sangre</td>
      </tr>
    </thead>
    <tbody id="tbody">
      <tr>
        @forelse($perros as $usu)
        <td>{{$usu->Lugar_nacimiento}}</td>
        <td>{{$usu->Edad}}</td>
        <td>{{$usu->Sexo}}</td>
        <td>{{$usu->Edo_civil}}</td>
        <td>{{$usu->Tipo_sangre}}</td>


        </tr>
      @empty
      <p>sin registro</p>
      @endforelse
    </tbody>
  </table>

    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">


          <td style="border-right:white solid;">Peso</td>
          <td style="border-right:white solid;">Estatura</td>
          <td style="border-right:white solid;">Talla</td>
          <td style="border-right:white solid;">Calzado</td>
          <td style="border-right:white solid;">Domicilio</td>


        </tr>
      </thead>
      <tbody id="tbody">
        <tr >
          @forelse($perros as $usu)


          <td>{{$usu->Peso}}</td>
          <td>{{$usu->Estatura}}</td>
          <td>{{$usu->Talla}}</td>
          <td>{{$usu->Calzado}}</td>
          <td>{{$usu->Domicilio}}</td>



          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>


    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right:white solid;">Codigo Postal</td>
          <td style="border-right:white solid;">Localidad</td>
          <td style="border-right:white solid;">Tel</td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros as $usu)
          <td>{{$usu->Cp}}</td>
          <td>{{$usu->Localidad}}</td>
          <td>{{$usu->Tel}}</td>
          <td></td>
          <td>
          </td>
          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
        <p>Centro de Salud</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">

          <td style="border-right:white solid;">Edad </td>
          <td style="border-right:white solid;">Peso</td>
          <td style="border-right:white solid;">Pas</td>
          <td style="border-right:white solid;">Pad</td>
          <td style="border-right:white solid;">Fecha de Examen</td>


        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros6 as $usu)

          <td>{{$usu->Edad}}</td>
          <td>{{$usu->Peso}}</td>
          <td>{{$usu->Pas}}</td>
          <td>{{$usu->Pad}}</td>
          <td>{{$usu->Fecha_centrosalud}}</td>

          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
        <p>Discapacidad</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">

          <td style="border-right:white solid;">Discapacidad </td>
          <td style="border-right:white solid;">Causa Discapacidad</td>
          <td style="border-right:white solid;">Rehabilitacion</td>
          <td style="border-right:white solid;">Lugar de la Rehabilitacion</td>
          <td style="border-right:white solid;"></td>




        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros2 as $usu)

          <td >{{$usu->Discapacidad}}</td>
          <td>{{$usu->Causa_discapacidad}}</td>
          <td>{{$usu->Rehabilitacion}}</td>
          <td>{{$usu->Lugar_de_rehabilitacion}}</td>


          <td>
          </td>
          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">

      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right: white solid;">Tipo de Rehabilitacion</td>
          <td style="border-right:white solid;">Apoyo Funcional</td>
          <td style="border-right:white solid;">Requiere Apoyo Funcional</td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros2 as $usu)
          <td>{{$usu->Tipo_rehabilitacion}}</td>
          <td>{{$usu->Apoyo_funcional}}</td>
          <td>{{$usu->Requiere_apoyo_funcional}}</td>
          <td></td>
          <td></td>


          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <p>Estatus</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right: white solid;">Jubilado</td>
          <td style="border-right:white solid;">Servicio Medico</td>
          <td style="border-right:white solid;">Baño Diario</td>
          <td style="border-right:white solid;">Convivencia Animal</td>
          <td style="border-right:white solid;"></td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros5 as $usu)
          <td>{{$usu->Jubilado}}</td>
          <td>{{$usu->Servicio_medico}}</td>
          <td>{{$usu->Bano_diario}}</td>
          <td>{{$usu->Convivencia_animal}}</td>
          <td></td>


          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <p>Tutor</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right: white solid;">Nombre del Tutor</td>
          <td style="border-right:white solid;">Apellido del Tutor</td>
          <td style="border-right:white solid;">Encargado</td>
          <td style="border-right:white solid;">Curp Tutor</td>
          <td style="border-right:white solid;">Rfc Tutor</td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros4 as $usu)
          <td>{{$usu->Nombre_tutor}}</td>
          <td>{{$usu->Apellido_tutor}}</td>
          <td>{{$usu->Encargado}}</td>
          <td>{{$usu->Curp_tutor}}</td>
          <td>{{$usu->Rfc_tutor}}</td>


          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">

      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right: white solid;">Antecedentes</td>
          <td style="border-right:white solid;">Telefono</td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros4 as $usu)
          <td>{{$usu->Antecedentes}}</td>
          <td>{{$usu->Telefono}}</td>
          <td></td>
          <td></td>
          <td></td>


          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <p>Examenes</p>
      <thead>
        <tr style="border:white solid;background-color:#4c4f54;">
          <td style="border-right: white solid;">Tipo de Examen</td>
          <td style="border-right:white solid;">Puntuacion</td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
          <td style="border-right:white solid;"></td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($perros3 as $usu)
          <td>{{$usu->tipo_examen}}</td>
          <td>{{$usu->puntuacion}}</td>
          <td></td>
          <td></td>
          <td></td>


          </tr>
        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>


</div>
</div>
  </div>
