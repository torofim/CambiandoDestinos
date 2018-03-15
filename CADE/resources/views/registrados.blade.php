<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/newstyle.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Hind" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-inverse">
	 <div class="container-fluid">
	  <div class="navbar-header">
	   <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
	    <span class="sr-only">Toggle navigation</span>
	     <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	       <span class="icon-bar"></span>
	        </button>
	         <a href="#" class="navbar-brand">Cambiando Destinos</a>
	          </div>
	           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
	            <ul class="nav navbar-nav">
	             <li class="active"><a href="#">Home</a>
	             </li> <li><a href="#" style="margin-left:920px;">Cerrar sesion</a>
	             <span></span></li>
	              </ul>
	               </div>
	                </div>
	                 </nav>
	<div class="side">
		<div class="list-group">
 		 <a href="#" class="list-group-item">Inicio</a>
 		 <a href="#" class="list-group-item active">Usuarios</a>
  		<a href="#" class="list-group-item ">Registros</a>
  		<a href="#" class="list-group-item ">Graficos</a>

	</div>
	</div>

	<div class="lefted" style="background-image:url({{url('img/atras.jpg')}});">
		<div class="separador">
			<label id="titulo">Beneficiarios</label>
		</div>
		<div class="lws">
			<div class="panel panel-default">
			 <div class="panel-heading">Panel de Beneficiarios</div>
			    <table class="table">
			    	<thead>
			        	<tr>
			   				<th>#</th>
			   	 			<th>Nombre</th>
			   	   			<th>Apellido</th>
			   	   			<th>Username</th>
			   	    	</tr>
			    	</thead>
			    <tbody>
			    	<tr>
			    		<th scope="row">1</th>
			     		<td>Mark</td>
			      		<td>Otto</td>
			       		<td>@mdo</td>
			       		<td><button>Eliminar</button></td>
			       		<td><button>Modificar</button></td>
			        </tr>
			   		<tr>
			    		<th scope="row">2</th>
			    	 	<td>Jacob</td>
			    	 	<td>Thornton</td>
			    	    <td>@fat</td>
			    	    <td><button>Eliminar</button></td>
			    	    <td><button>Modificar</button></td>
			    	</tr>
			        <tr>
			    	      <th scope="row">3</th>
			    	      <td>Larry</td>
			    	      <td>the Bird</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Varela</td>
			    	      <td>the hobbo</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	     <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Fercho</td>
			    	      <td>the Bird</td>
			    	      <td>@owl</td>
			    	      <td><button>Eliminar</button></td>
			    	     <td><button>Modificar</button></td>
			    	</tr>

			    	<tr>
			    		<th scope="row">1</th>
			     		<td>Mark</td>
			      		<td>Otto</td>
			       		<td>@mdo</td>
			       		<td><button>Eliminar</button></td>
			       		<td><button>Modificar</button></td>
			        </tr>
			   		<tr>
			    		<th scope="row">2</th>
			    	 	<td>Jacob</td>
			    	 	<td>Thornton</td>
			    	    <td>@fat</td>
			    	    <td><button>Eliminar</button></td>
			    	    <td><button>Modificar</button></td>
			    	</tr>
			        <tr>
			    	      <th scope="row">3</th>
			    	      <td>Larry</td>
			    	      <td>the Bird</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	     <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Varela</td>
			    	      <td>the hobbo</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Fercho</td>
			    	      <td>the Bird</td>
			    	      <td>@owl</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>

			    	<tr>
			    		<th scope="row">1</th>
			     		<td>Mark</td>
			      		<td>Otto</td>
			       		<td>@mdo</td>
			       		<td><button>Eliminar</button></td>
			       		<td><button>Modificar</button></td>
			        </tr>
			   		<tr>
			    		<th scope="row">2</th>
			    	 	<td>Jacob</td>
			    	 	<td>Thornton</td>
			    	    <td>@fat</td>
			    	    <td><button>Eliminar</button></td>
			    	   <td><button>Modificar</button></td>
			    	</tr>
			        <tr>
			    	      <th scope="row">3</th>
			    	      <td>Larry</td>
			    	      <td>the Bird</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	     <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Varela</td>
			    	      <td>the hobbo</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	     <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Fercho</td>
			    	      <td>the Bird</td>
			    	      <td>@owl</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>
			    	<tr>
			    		<th scope="row">1</th>
			     		<td>Mark</td>
			      		<td>Otto</td>
			       		<td>@mdo</td>
			       		<td><button>Eliminar</button></td>
			       		<td><button>Modificar</button></td>
			        </tr>
			   		<tr>
			    		<th scope="row">2</th>
			    	 	<td>Jacob</td>
			    	 	<td>Thornton</td>
			    	    <td>@fat</td>
			    	    <td><button>Eliminar</button></td>
			    	   <td><button>Modificar</button></td>
			    	</tr>
			        <tr>
			    	      <th scope="row">3</th>
			    	      <td>Larry</td>
			    	      <td>the Bird</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	    	<td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Varela</td>
			    	      <td>the hobbo</td>
			    	      <td>@twitter</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>
			    	 <tr>
			    	      <th scope="row">3</th>
			    	      <td>Fercho</td>
			    	      <td>the Bird</td>
			    	      <td>@owl</td>
			    	      <td><button>Eliminar</button></td>
			    	      <td><button>Modificar</button></td>
			    	</tr>

			    </tbody>
			    </table>
			   </div>
		</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
		<script src="{{ URL::asset('js/Chart.bundle.min.js') }}"></script>

</body>

</html>
