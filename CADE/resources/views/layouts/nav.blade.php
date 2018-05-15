

<nav class="navbar navbar-inverse sidebar" role="navigation">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <img class="navbar-brand img-responsive " src="{{asset('/img/usuarios/'.Auth::user()->imgperfil)}}" style="margin-left:25%; width:80px;height:80px;margin-bottom:-2%;" >
    <a class="navbar-brand"   >{{Auth::user()->name}}</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
    <ul class="nav navbar-nav">
      </li>
      <li><a href="/admin/dash">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
      @if(Auth::user()->privilegios=='admin')
      <li ><a href="/admin/usuarios">Usuarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
      @endif
      <li ><a href="/admin/benef">Beneficiarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-leaf"></span></a></li>
      <li ><a href="/admin/visitacomida">Visita y Comida<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li ><a href="/admin/graficos">Graficos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li><a href="/admin/formularios">Formularios y reportes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li ><a href="/admin/inventario">Inventario<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li ><a href="/admin/taller">Talleres<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  Cerrar sesion
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>
