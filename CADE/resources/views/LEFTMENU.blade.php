<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estiloside.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
  @include('layouts.nav')
  <div class="main">
    <div class="panel panel-default">
        <div class="panel-body cold-md-2">

      </div>
    </div>
    <div class="panel2 panel-default col-xs-6 ">
      <div class="panel-body2">
        Dashboard
      </div>
    </div>
    <br>
    <br>

      <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:green; height:15vh;">
              <p>Display numero</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:blue; height:15vh;">
              <p>Display numero</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:red; height:15vh;" >
              <p>Display numero</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:green; height:15vh;">
              <p>Display numero</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
		      </div>
	     </div>
       <div class="container-fluid">
         <div class="row">
           <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white; height:350px;">
             <canvas id="bar-chart" width="800" height="450"></canvas>
           </div>
           <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white;height:350px;">
             <canvas id="bar-chart2" width="800" height="450"></canvas>
           </div>
         </div>
       </div>
  </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/graficabarras.js"></script>
    <script src="js/side.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
