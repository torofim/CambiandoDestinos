<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css" >
    <title></title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="main">
        <div class="panel panel-default" style="background-color:transparent;">
            <div class="panel-body cold-md-2" id="sepa"></div>

        </div>
        <div class="panel2 panel-default col-xs-12 ">
          <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">Fundacion Cambiando Destinos</div>
        </div>
        <div id="formulario" style="margin-top:10%;">
          <label for="r1" class="col-md-1"> <input class="radio" type="radio" name="x" id="r1" data-mes="01">ENERO</label>
          <label for="r2" class="col-md-1"> <input class="radio" type="radio" name="x" id="r2" data-mes="02">FEBRERO</label>
          <label for="r3" class="col-md-1"> <input class="radio" type="radio" name="x" id="r3" data-mes="03">Marzo</label>
          <label for="r4" class="col-md-1"> <input class="radio" type="radio" name="x" id="r4" data-mes="04">Abril</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r5" data-mes="05">Mayo</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r6" data-mes="06">Junio</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r7" data-mes="07">Julio</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r12" data-mes="18">Agosto</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r8" data-mes="09">Septiembre</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r9" data-mes="10">Octubre</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r10" data-mes="11">Noviembre</label>
          <label for="r5" class="col-md-1"> <input class="radio" type="radio" name="x" id="r11" data-mes="12">Diciembre</label>
          <label for="r6" class="col-md-2"> <input class="radio" type="radio" name="x" id="r6" data-mes="anual">Anual</label>

          <input class="col-md-1 " type="number" name="year" value="" min="2018" max="2050" id="year">

          <button class="btn btn-primary col-md-1 col-md-offset-1" id="miLink">ENVIAR</button>

        </div>
        <div class="container-fluid">
          <div class="row col-md-12">
            <div class="panel panel-default2 col-md-6 col-sm-8 col-xs-12 " style="background-color:white; height:auto;">
              <canvas id="bar-chart" width="800" height="450"></canvas>
            </div>
            <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white;height:auto;">
              <canvas id="bar-chart2" width="800" height="450"></canvas>
            </div>

          </div>
          <div class="row col-md-12">
            <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white;height:auto;">
              <canvas id="bar-chart3" width="800" height="450"></canvas>
            </div>
            <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white;height:auto;">
              <canvas id="bar-chart4" width="800" height="450"></canvas>
            </div>
          </div>
        </div>

    </div><!--CIERRE DEL MAIN-->
    <script type="text/javascript">
      var nombres=[{!!$nombres!!}];
      var valores=[{!!$valores!!}];
      var valoresMes=[{!!$valoresMes!!}];
      var semanas=[{!!$semanas!!}];
      var cateva=[{!!$cateva!!}];
      var valoreseva=[{!!$valoreseva!!}];
      var catplatos=[{!!$catplatos!!}];
      var valoresplatos=[{!!$valoresplatos!!}];
    </script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/graficasgraficos.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
      var link='';
      var actual = (new Date()).getFullYear();

      document.getElementById('year').value=actual;
      $(document).ready(function(){


        $('.radio').on('click',function(){
          link=$(this).data('mes');
          console.log(link);
        });
        $('#miLink').on('click',function(){
          if(link==''){alert('selecccione un mes');}else{
            var year=$('#year').val();
            if(year==''){alert('seleccione el año');}else{
              location.href='/admin/graficos/'+link+'/'+year;
            }

          }
        });

      });
    </script>
  </body>
</html>
