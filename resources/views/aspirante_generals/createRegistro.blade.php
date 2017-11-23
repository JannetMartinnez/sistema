
@extends('layouts.reg')
@section('title','Preregistro sin logeo')
@section('content')

<h3 class="page-title titulopag"></h3>
<div class="col-md-10">
    <h1 class="text-center">Preregistro del aspirante </h1>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
              {!! Form::open(['route' => 'aspiranteGenerals.store']) !!}

                <!-- Apellido Paterno Aspirante Field -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                  {!! Form::label('apellido_paterno_aspirante', 'Nombre del aspirante: (tal como viene en su acta de nacimiento)') !!}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                  {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control','placeholder' => 'Apellido Paterno']) !!}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                  {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control','placeholder' => 'Apellido Materno']) !!}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group">
                  {!! Form::text('nombres_aspirante', null, ['class' => 'form-control','placeholder' => 'Nombre (s)']) !!}
                </div>

                <!-- Correo Elect Dom Actual Field -->
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    {!! Form::label('correo_elect_dom_actual', 'Correo electrónico:') !!}
                    {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder' => 'Correo electrónico']) !!}
                </div>
                <!-- Correo Elect Dom Actual Field -->
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    {!! Form::label('correo_elect_dom_actual_confirmation', 'Confirmar su correo electrónico:') !!}
                    {!! Form::text('correo_elect_dom_actual_confirmation', null, ['class' => 'form-control','placeholder' => 'Correo electrónico']) !!}
                </div>
                <!-- Numero seguro social Dom Actual Field -->

                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    {!! Form::label('numero_seguro_social', 'Número del Seguro Social:') !!}
                    {!! Form::text('numero_seguro_social', null, ['class' => 'form-control','placeholder' => 'Número del seguro social']) !!}
                </div>
                <!-- Numero seguro social Dom Actual Field -->
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    {!! Form::label('numero_seguro_social_confirmation', 'Confirmar su número del Seguro Social:') !!}
                    {!! Form::text('numero_seguro_social_confirmation', null, ['class' => 'form-control','placeholder' => 'Número del seguro social']) !!}
                </div>
                <!-- Submit Field -->
                <div class="clearfix">&nbsp;</div>
                <div class="form-group col-sm-12 text-center">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-itslp']) !!}
                    <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancelar</a>
                </div>

            {!! Form::close() !!}
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
