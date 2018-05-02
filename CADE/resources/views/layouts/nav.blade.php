

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
    <a class="navbar-brand" href="/">Cambiando Destinos</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
    <ul class="nav navbar-nav">
      </li>
      <li><a href="/admin/dash">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
      <li ><a href="/admin/usuarios">Usuarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
      <li ><a href="/admin/benef">Beneficiarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-leaf"></span></a></li>
        <li ><a href="/#">Graficos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
        <li><a href="/admin/formularios">Formularios y reportes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajustes <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
        <ul class="dropdown-menu forAnimate" role="menu">
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" >
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
