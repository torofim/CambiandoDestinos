@extends('layouts.layout')

@section('principal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-bottom:5%; font-size:3rem; margin-left:1.5%;">Datos Del Centro de Salud</div>

                <div class="card-body">
                  @if($errors->any())
                    <div class="alert alert-warning alert-dismissable">
                      <ul>

                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                      </ul>
                    </div>
                  @endif
                  @if(session()->has('mensaje'))
                    <div class="alert alert-success">
                      {{session()->get('mensaje')}}
                    </div>
                  @endif
                  {{Form::open(array('url'=>'/admin/Centrosalud','files'=>true))}}
                    <div class="input=-group col-md-4">
                      <label for="nombre">Edad</label><br>
                      {{Form::number('edad','',array('class'=>'form-control','placeholder'=>'Edad') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Peso (Kg)</label><br>
                      {{Form::number('peso','',array('class'=>'form-control','placeholder'=>'Peso') )}}
                    </div>
                    <div class="input=-group col-md-4">
                      <label for="nombre">Presion Arterial</label><br>
                      {{Form::text('presion','',array('class'=>'form-control','placeholder'=>'Presion') )}}
                    </div>
                    <div class="input-group col-md-4" style="margin-left:2%; padding-top:2.5%;">
                      {{Form::submit('Enviar',array('class'=>'btn btn-primary'))}}
                    </div>
                  {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
