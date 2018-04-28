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
        <div class="panel-body cold-md-2" id="sepa">
      </div>
    </div>
    <div class="panel2 panel-default col-xs-12 ">
      <div class="panel-body2" style="border-bottom:groove; background-color:transparent;">
        Fundacion Cambiando Destinos
      </div>
    </div>
    <br>
    <br>

      <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Beneficiarios activos</p>
              <p style="font-size:3.5rem;">
                @forelse ($benef as $b)
                {{ $b->total }}
                @empty
                @endforelse
              </p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Usuarios Activos</p>
              <p style="font-size:3.5rem;">
                @forelse ($usuarios as $u)
                {{ $u->usu }}
                @empty
                @endforelse
              </p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;" >
              <p style="border-bottom:groove; border-bottom-width:.5px;">Beneficiarios Disc.</p>
              <p style="font-size:3.5rem;">
                @forelse ($disc as $d)
                {{ $d->disca }}
                @empty
                @endforelse</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Beneficiarios de taller</p>
              <p style="font-size:3.5rem;">
                @forelse ($taller as $t)
                {{ $t->btaller }}
                @empty
                @endforelse</p>
            </div>
		      </div>
	     </div>

      
          <div id="formulario">
            <label for="r1" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r1" data-mes="01">ENERO</label>           
            <label for="r2" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r2" data-mes="02">FEBRERO</label>           
            <label for="r3" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r3" data-mes="03">Marzo</label>           
            <label for="r4" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r4" data-mes="04">Abril</label>           
            <label for="r5" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r5" data-mes="05">Mayo</label>
            <br>
            <label for="r6" class="col-lg-2"> <input class="radio" type="radio" name="x" id="r6" data-mes="anual">Anual</label>
            <br>

            <button class="btn btn-primary" id="miLink">ENVIAR</button>           
          </div>
      
       <div class="container-fluid">
         <div class="row">
           <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white; height:auto;">
             <canvas id="bar-chart" width="800" height="450"></canvas>
           </div>
           <div class="panel panel-default2 col-md-6  col-sm-8 col-xs-12 " style="background-color:white;height:auto;">
             <canvas id="bar-chart2" width="800" height="450"></canvas>
           </div>
         </div>
       </div>
       <div class="panel panel-default" style="background-color:transparent;">
           <div class="panel-body cold-md-2" id="sepa">
         </div>
       </div>
  </div>
  <script>
    var nombres=[{!!$nombres!!}];
    var valores=[{!!$valores!!}];
    var semanas=[{!!$semanas!!}];
    var valoresMes=[{!!$valoresMes!!}];

  </script>

  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    var link='';
    $(document).ready(function(){
      $('.radio').on('click',function(){
        link=$(this).data('mes');
        console.log(link);
      });
      $('#miLink').on('click',function(){
        if(link==''){alert('selecccione un mes');}else{
          location.href='/admin/dash/'+link;
        }
      });

    });
  </script>

  </body>
</html>
