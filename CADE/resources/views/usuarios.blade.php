@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                  {{Form::open(array('url'=>'/admin/usuarios','files'=>true))}}
                    <div class="input=-group col-md-12">
                      <label for="nombre">Nombre</label><br>
                      {{Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Correo</label><br>
                      {{Form::email('correo','',array('class'=>'form-control','placeholder'=>'Correo') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Contraseña</label><br>
                      {{Form::password('p1',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre"> Repetir Contraseña</label><br>
                      {{Form::password('p2',array('class'=>'form-control','placeholder'=>'Contraseña') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Image</label><br>
                      {{Form::file('p1',array('class'=>'form-control','placeholder'=>'Imagen') )}}
                    </div>
                    <div class="input=-group col-md-12">
                      <label for="nombre">Nivel</label><br>
                      {{Form::select('Nivel',
                      array('admin'=>'Administrador','Normal','Normal')
                      array('class'=>'form-Controller',
                      'placeholder'=>'imagen') )}}
                    </div>

                  {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
