

<nav class="navbar navbar-default navbar-fixed-top ">
  <a class="navbar-brand nombre" href="#page-top" >Fundación Cambiando Destinos, A.C. </a>
  <div class="containerarriba">

      <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li class="hidden">
                  <a href="#page-top"></a>
              </li>
              <li class="page-scroll">
                  <a href="#segundo">Cambiando Destinos  <img src="./img/logonavi.png" alt=""></a>
              </li>
              <li class="page-scroll">
                  <a href="#primero">Sobre Nosotros <img src="./img/logonavi.png" alt=""></a>
              </li>

              <li class="page-scroll">
                  <a href="#tercero">Historias <img src="./img/logonavi.png" alt=""></a>
              </li>
              <li class="page-scroll">
                  <a href="#cuarto">Galería<img src="./img/logonavi.png" alt=""></a>
              </li>
              <li class="page-scroll">
                  <a href="#quinto">Contacto<img src="./img/logonavi.png" alt=""></a>
              </li>
              <li class="page-scroll">
                @if(Auth::guard()->check())
                  <a class="col-md-12"href="/admin/dash">{{Auth::user()->name}}<img src="./img/logonavi.png" alt=""></a>
                  @else
                  <a class="col-md-12"href="/login">Iniciar Sesion<img src="./img/logonavi.png" alt=""></a>
                  @endif
              </li>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
