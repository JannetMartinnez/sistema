@extends('layouts.app')
@section('title','Aspirantes Salud')
@section('content')
    <h3 class="page-title titulopag"></h3>
         
         @include('adminlte-templates::common.errors')
 <div class="col-md-10">
    <div class="panel panel-default">
       <div class="panel-heading text-center">
            <a href="{{ route('aspiranteSaluds.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-plus" aria-hidden="true"></i> @yield('title')</strong>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'aspiranteSaluds.store']) !!}

              @include('aspirante_saluds.fields')

            {!! Form::close() !!}
        </div>
    </div>
    </div>
<aside class="col-md-2">
    <h3 class="titulos">Avisos</h3>
Aquí quiero que se vea la ayuda pero en la parte izquierda arriba de alguna imagen tenue y que de la siguiente información:

    El Instituto Tecnológico de San Luis Potosí te da la más cordial bienvenida. 
En este momento eres ASPIRANTE a ingresar a éste INSTITUTO. 
Si eres nuevo, deberas llenar los datos iniciales y obligatorios como son: el apellido paterno, materno, nombre del aspirante, número de seguro social y correo electrónico.
NOTA: El correo electrónico es requerido ya que en el vas a recibir tu usuario y contraseña, referencia bancaria y ficha de exámen ingreso.
Una vez que tengas tu usuario y contraseña, deberás continuar llenando tus datos generales, datos socioeconómicos y de salud.
Más información en www.itslp.edu.mx en la sección de Aspirantes.
</aside>
@endsection
