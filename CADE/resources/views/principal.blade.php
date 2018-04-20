@extends('layouts.layout')

@section('principal')
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



<div class="ws1">
  <label id="titulopie">Grafica de edades</label>
  <canvas id="chart" style="width:60%; height:50%"></canvas>

</div>
<div class="ws2">
  <label id="titulopie">Grafica de edades</label>
  <canvas id="chart2" style="width:60%; height:50%"></canvas>


</div>

@section('scripts')
<script type="text/javascript">
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

      new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#3e95cd", "#8e5ea2"],
          data: [80,20]
        }
      ]
    },
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
    });
  </script>
@endsection
