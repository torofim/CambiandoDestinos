<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estiloside.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
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
  			<a class="navbar-brand" href="#">Cambiando Destinos</a>
  		</div>
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
  			<ul class="nav navbar-nav">
  				</li>
  				<li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
  				<li ><a href="#">Usuarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
  				<li ><a href="#">Beneficiarios<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-leaf"></span></a></li>
  				<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
  					<ul class="dropdown-menu forAnimate" role="menu">
  						<li><a href="#">Log Out</a></li>
  					</ul>
  				</li>
  			</ul>
  		</div>
  	</div>
  </nav>
  <div class="main">
    <div class="panel panel-default">
  <div class="panel-body">
    Panel de Administración
  </div>
</div>

<button class="btn btn-primary" id="primero" type="button">
  Usuarios Activos <span class="badge">4</span>
</button>
<button class="btn btn-primary" type="button">
  Beneficiarios Activos <span class="badge">10</span>
</button>
<button class="btn btn-primary" type="button">
   Necesidad de apoyo funcional
   <span class="badge">10</span>
</button>
  </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/side.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
