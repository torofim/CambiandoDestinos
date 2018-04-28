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




       {!!  Form::open(['url' => 'admin/dash', 'method' => 'GET']) !!}
        <div class="row center-block">
            <div class="col-md-6 center-block">
                <div class="input-group">
                  <input type="radio" name="mes" value="1" checked="checked"/>Enero
                  <input type='radio' name='mes' value='2' />Febrero
                  <input type='radio' name='mes' value='3' />Marzo
                  <input type='radio' name='mes' value='4' />Abril
                  <input type='radio' name='mes' value='5' />Mayo
                  <input type='radio' name='mes' value='6' />Junio
                  <input type='radio' name='mes' value='7' />Julio
                  <input type='radio' name='mes' value='8' />Agosto
                  <input type='radio' name='mes' value='9' />Septiembre
                  <input type='radio' name='mes' value='10' />Octubre
                  <input type='radio' name='mes' value='11' />Noviembre
                  <input type='radio' name='mes' value='12' />Diciembre

                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">submit</button>
                    </span>
                </div>
            </div>
     </div>
        {!! Form::close() !!}
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


  </script>

  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/graficabarras.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>
