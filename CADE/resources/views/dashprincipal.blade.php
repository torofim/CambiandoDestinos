<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css">
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
              <p style="border-bottom:groove; border-bottom-width:.5px;">Platos comida caliente</p>
              <p style="font-size:3.5rem;">
                @forelse ($disc as $d)
                {{ $d->disca }}
                @empty
                @endforelse</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px;">Talleres impartidos</p>
              <p style="font-size:3.5rem;">
                @forelse ($taller as $t)
                {{ $t->btaller }}
                @empty
                @endforelse</p>
            </div>
		      </div>
	     </div>
       <div class="panel panel-default" style="background-color:transparent;">
           <div class="panel-body cold-md-2" id="sepa">
         </div>
       </div>
  </div>

  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/side.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>
