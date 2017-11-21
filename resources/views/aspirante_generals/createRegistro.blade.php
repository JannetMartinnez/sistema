
@extends('layouts.app')
@section('title','Preregistro del aspirante')
@section('content')

<h3 class="page-title titulopag"></h3>
<div class="col-md-10">
       
    <div class="panel panel-default">
       <div class="panel-heading text-center">
           Preregistro del aspirante 
           
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'aspiranteGenerals.store']) !!}

                <!-- Apellido Paterno Aspirante Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('apellido_paterno_aspirante', 'Apellido Paterno Aspirante:') !!}
                    {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control']) !!}
                </div>  
                <!-- Apellido Materno Aspirante Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('apellido_materno_aspirante', 'Apellido Materno Aspirante:') !!}
                    {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Nombres Aspirante Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('nombres_aspirante', 'Nombres Aspirante:') !!}
                    {!! Form::text('nombres_aspirante', null, ['class' => 'form-control']) !!}
                </div>           

                <!-- Correo Elect Dom Actual Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('correo_elect_dom_actual', 'Correo Elect Dom Actual:') !!}
                    {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control']) !!}
                </div>


                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancel</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
<aside class="col-md-2">
 Aquí quiero que se vea la ayuda pero en la parte izquierda arriba de alguna imagen tenue y que de la siguiente información:

    El Instituto Tecnológico de San Luis Potosí te da la más cordial bienvenida. 
En este momento eres ASPIRANTE a ingresar a éste INSTITUTO. 
Si eres nuevo, deberas llenar los datos iniciales y obligatorios como son: el apellido paterno, materno, nombre del aspirante, número de seguro social y correo electrónico.
NOTA: El correo electrónico es requerido ya que en el vas a recibir tu usuario y contraseña, referencia bancaria y ficha de exámen ingreso.
Una vez que tengas tu usuario y contraseña, deberás continuar llenando tus datos generales, datos socioeconómicos y de salud.
Más información en www.itslp.edu.mx en la sección de Aspirantes.   


</aside>
@endsection
