<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/estiloside.css') }}" rel="stylesheet" type="text/css">
    <title>Inicio</title>
  </head>
  <body>
  @include('layouts.nav')
  <div class="main">
    <div class="panel panel-default" style="background-color:transparent;">
        <div class="panel-body cold-md-2" id="sepa">
      </div>
    </div>
    <div class="panel2 panel-default col-xs-12 ">
      <div class="panel-body2 col-xs-12" style="border-bottom:groove; background-color:transparent;">
      <label class="titula col-xs-12">Fundación Cambiando Destinos, A.C.</label>
      </div>
    </div>
    <br>
    <br>

      <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px; font-size:2rem;">Beneficiarios activos</p>
              <p style="font-size:3.5rem;">
                @forelse ($benef as $b)
                {{ $b->total }}
                @empty
                @endforelse
              </p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px; font-size:2rem;">Usuarios Activos</p>
              <p style="font-size:3.5rem;">
                @forelse ($usuarios as $u)
                {{ $u->usu }}
                @empty
                @endforelse
              </p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6  " style="background-color:transparent; height:15vh;" >
              <p style="border-bottom:groove; border-bottom-width:.5px; font-size:2rem;">Platos comida caliente</p>
              <p style="font-size:3.5rem;">
                @forelse ($disc as $d)
                {{ $d->disca }}
                @empty
                @endforelse</p>
            </div>
            <div class="panel panel-default2 col-md-3  col-sm-4 col-xs-6 " style="background-color:transparent; height:15vh;">
              <p style="border-bottom:groove; border-bottom-width:.5px; font-size:2rem;">Talleres impartidos</p>
              <p style="font-size:3.5rem;">
                @forelse ($taller as $t)
                {{ $t->btaller }}
                @empty
                @endforelse</p>
            </div>
		      </div>
	     </div>

       <div class="container-fluid">

         <div class="row">
           <table class="table table-condensed col-md-6 col-sm-8 col-xs-12" >
             <p style="font-size:3rem;">Discapacidad</p>
             <thead>
               <td>Nombre</td>
               <td>Apellido</td>
               <td>Apellido</td>
               <td>Discapacidad</td>
               <td>Causa</td>
               <td>Requiere apoyo</td>
               <td>tipo de apoyo</td>
             </thead>
             <tbody>
               <tr>
                    @foreach($discap as $x)
                 <td>{{$x->nombre}}</td>
                 <td>{{$x->apellido_p}}</td>
                 <td>{{$x->apellido_m}}</td>
                 <td>{{$x->discapacidad}}</td>
                 <td>{{$x->Causa_discapacidad}}</td>
                 <td>{{$x->Requiere_apoyo_funcional}}</td>
                 <td>{{$x->Apoyo_funcional}}</td>
                 <tr>

                 </tr>
                 @endforeach
               </tr>
             </tbody>
           </table>
           </div>
           <div class="row">
             <table class="table table-condensed col-md-6 col-sm-8 col-xs-12" >
               <p style="font-size:3rem;">Presión arterial (Hipertensión)</p>
               <thead>
                 <td>Id</td>
                 <td>Nombre</td>
                 <td>Apellido</td>
                 <td>Apellido</td>
                 <td>Hipertensión</td>
               </thead>
               <tbody>
                 <tr>
                      @foreach($hipert as $y)
                      <td>{{$y->Id_bene}}</td>
                   <td>{{$y->nombre}}</td>
                   <td>{{$y->apellido_p}}</td>
                   <td>{{$y->apellido_m}}</td>
                   <td>{{$y->hipertension}}</td>
                   <td><a data-toggle="modal" href="#myModal"  class="btn btn-primary btn-s">Historial</a>
                     <div class="modal fade" id="myModal">
                       <div class="modal-dialog">
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             <h4 class="modal-title " style="color: #fff; padding: 9px 15px; border-bottom: 1px solid #eee;background-color: green; " >Historial hipertensión </h4>
                           </div>
                           <div class="modal-body">
                             <table class="table table-hover table-sm ">
                               <thead>
                                 <td style="color:black;">Nombre </td>
                                 <td style="color:black;">Apellido </td>
                                 <td style="color:black;">Apellido </td>
                                 <td style="color:black;">Pas</td>
                                 <td style="color:black;">/</td>
                                 <td style="color:black;">Pad</td>
                               </thead>
                               <tbody class="table" >
                                 <tr>
                                      @foreach($Palta as $w )
                                      @if($w->Id_bene == $y->Id_bene)
                                   <td style="color:black;">{{$w->nombre}} </td>
                                   <td style="color:black;">{{$w->apellido_p}} </td>
                                   <td style="color:black;">{{$w->apellido_m}} </td>
                                   <td style="color:black;">{{$w->Pas}}</td>
                                   <td style="color:black;">/</td>
                                   <td style="color:black;">{{$w->Pad}}</td>
                                   <tr>
                                   </tr>
                                   @endif
                                   @endforeach
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-outline-danger btn-sm"  style="color:#dc3545;  background-color:transparent; border-color:#dc3545;" data-dismiss="modal">Cerrar</button>
                           </div>
                         </div>
                       </div>
                     </div><!-- modal -->
                  </td>
                   <tr>
                   </tr>
                   @endforeach
                 </tr>
               </tbody>
             </table>
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
