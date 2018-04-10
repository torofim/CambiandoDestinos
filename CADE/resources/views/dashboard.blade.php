<!DOCTYPE Html>
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
	@include('nav')

		</ul>
	</div>
	<div class="lefted" style="background-image:url()">
		<div class="separador">
			<label id="titulo">Dashboard</label>
		</div>

		<div class="sws1">
			<div class="chartspace">
				<canvas id="doughnut-chart" style="width:70%; height:60%; align-content:right;'"></canvas>
			</div>
			<div class="centertext"><label class="centered"> Beneficiarios activos</label></div>
			<div class="icon">
				 <span class="glyphicon glyphicon-user"></span>
			</div>

		</div>
		<div class="sws2">
			<div class="chartspace">
				<label class="centered"></label>
			</div>
			<div class="centertext"><label class="centered"> Registros Totales</label></div>
			<div class="icon">
				 <span class="glyphicon glyphicon-tasks"></span>
			</div>

		</div>

		<div class="sws1">
			<div class="chartspace">
				<canvas id="doughnut-chart2" style="width:70%; height:60%; align-content:right;'"></canvas>
			</div>
			<div class="centertext">
				<label class="centered"> Usuarios activos</label>
			</div>
			<div class="icon">
				 <span class="glyphicon glyphicon-user"></span>
			</div>

		 	</div>



		<div class="sws2">
			<div class="chartspace">

			</div>
			<div class="centertext">
				<label class="centered">Informes Generados</label>
			</div>
			<div class="icon">
				<span class="glyphicon glyphicon-list-alt"></span>
			</div>
		</div>
		<div id="target" style="display:none;">
			<?php
			//PHP DONDE ESTA SACAR LOS DATOS DE LA BDD
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="Cambiando_Destinos";
				$con= mysqli_connect($servername,$username,$password,$dbname);

				$sql="SELECT count(id) AS total FROM users ";
				$result= mysqli_query($con, $sql);
				$values= mysqli_fetch_assoc($result);
				$num_rows= $values['total'];
			  $num_rows;
				echo htmlspecialchars($num_rows);
			 ?>
		</div>




		<div class="ws1">
			<label id="titulopie">Grafica de edades</label>
			<canvas id="chart" style="width:60%; height:50%"></canvas>

		</div>
		<div class="ws2">
			<label id="titulopie">Grafica de edades</label>
			<canvas id="chart2" style="width:60%; height:50%"></canvas>


		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('js/Chart.bundle.min.js') }}"></script>
	<script type="text/javascript">
		$(function(){
			$('')
		});
	</script>
	<script type="text/javascript">
		var div=document.getElementById("target");
		var myData=div.textContent;

		$(document).ready(function(){
			Chart.defaults.global.defaultFontColor = 'black';

				var datos ={
					type: "pie",
					data :{
						datasets :[{
							data :[
								5,
								10,
								40,
								20,
								25,
							],
							backgroundColor: [
								"#f7466a",
								"#bdbdbd",
								"#abc321",
								"#949fb1",
								"#321456",
							],
						}],
							labels: [

								"Dato 1",
								"Dato 2",
								"Dato 3",
								"Dato 4",
								"Dato 5",
							]
					},
				};
				var canvas=document.getElementById('chart').getContext('2d');
				var canvas2=document.getElementById('chart2').getContext('2d');

				window.pie = new Chart(canvas,datos);
				window.pies= new Chart(canvas2,datos);

				setInterval(function(){
					datos.data.datasets.splice(0);
					var newData={
						backgroundColor:[
							"#f7466a",
							"#bdbdbd",
							"#abc321",
							"#949fb1",
							"#321456",
						],
						data:[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()]
					};
					datos.data.datasets.push(newData);
					window.pie.update();
					window.pies.update();
				},5000);

				function getRandom(){
					return Math.round(Math.random()*100);

				}
			});
		</script>

		<!--ESTEEEEEEEEEEE ES EL SCRIPT DE LAS DONAAAAAAAAAAAAAAAAAAAAS-------------------------------->

		<script type="text/javascript">
	Chart.defaults.global.legend.display = false;

		new Chart(document.getElementById("doughnut-chart"), {
	type: 'doughnut',
	data: {
			 labels: ["Activos",""],
		datasets: [
			{
				backgroundColor: ["#3e95cd", "black"],
				//AQUI ES DONDE VOY A PONER LA VARIABLE
				borderColor: [
					 'rgba(255,255,255,1)',
					 'rgba(54, 162, 235,0)'
			 ],
				data: [myData,10]
			}]
	},
	options: {

}
});


				new Chart(document.getElementById("doughnut-chart2"), {
	type: 'doughnut',
	data: {
		datasets: [
			{
				backgroundColor: ["#3e95cd", "#8e5ea2"],
				data: [65,35]
			}
		]
	},
});
		</script>
</body>
</html>
