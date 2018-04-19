<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
  @include('layouts.nav')
  <div class="main">
    <div class="panel panel-default">
        <div class="panel-body cold-md-2" id="sepa">

      </div>
    </div>
    <div class="panel2 panel-default col-xs-12 ">
      <div class="panel-body2" style="border-bottom:groove;">
        Dashboard
      </div>
    </div>
    <br>
    <br>

      <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Beneficiarios activos</p>
              <p style="font-size:3.5rem;">
                @forelse ($beneficiarios as $b)
                  {{ $b->total }}
                    @empty
                      @endforelse
              </p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Usuarios Activos</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;" >
              <p style="border-bottom:groove; border-bottom-width:.5px;">Visitantes</p>
              <p style="font-size:3.5rem;">145</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Beneficiarios de taller</p>
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
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>
