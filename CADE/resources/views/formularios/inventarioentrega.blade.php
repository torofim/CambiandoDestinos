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
    <div class="alert alert-success divfade" style="position:absolute;top:10%;left:40%;">
      {{session()->get('mensaje')}}
    </div>
  @endif
  <!-- ESTA ES LA TABLA ORIGINAL PARA POSTERIORES USOS-->
  <div class="row">
    <h2 style="margin-left:1%;"></h2>
    <table class="table table-condensed col-md-12" style="margin-left:0%;">
      <thead>
        <tr>
          <td>Id</td>
          <td>Articulo</td>
          <td>Cantidad</td>
          <td>Funcionalidad</td>
          <td>Tipo</td>
          <td>Editar</td>
          <td>Editar</td>
          <td>Editar</td>

        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          @forelse($resultado as $usu)

          <td>{{$usu->Id_bene}}</td>
          <td>{{$usu->Nombre_bene}}</td>
          <td>{{$usu->Articulo_entregado}}</td>
          <td>{{$usu->Cantidad}}</td>
          <td>{{$usu->Tipo}}</td>
          <td>{{$usu->Fecha_entrega}}</td>
          <td>{{$usu->Notas}}</td>
          <td><button type="button" class="btn btn-info btn-lg btne"
            data-toggle="modal" data-target="#myModal"
          >Editar </button></td>



        @empty
        <p>sin registro</p>
        @endforelse
      </tbody>
    </table>
</div>
</div>
