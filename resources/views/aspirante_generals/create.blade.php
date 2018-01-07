@extends('layouts.app')
@section('title','Crear aspirante')
@section('content')
    <h3 class="page-title titulopag"></h3>
         
         @include('adminlte-templates::common.errors')
 <div class="col-md-10">
    <div class="panel panel-default">
       <div class="panel-heading text-center">
            <a href="{{ route('aspiranteGenerals.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-plus" aria-hidden="true"></i> @yield('title')</strong>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'aspiranteGenerals.store']) !!}

                @include('aspirante_generals.fields')

            {!! Form::close() !!}
        </div>
    </div>
    </div>
<aside class="col-md-2">
    <h3 class="titulos">Avisos</h3>
   
    El Instituto Tecnológico de San Luis Potosí te da la más cordial bienvenida. 
En este momento eres ASPIRANTE a ingresar a éste INSTITUTO. 
Si eres nuevo, deberas llenar los apartados <b class="glyphicon glyphicon-pencil">Datos Generales</b>, <b class="glyphicon glyphicon-usd">Datos Socioeconómicos</b>", <b class="glyphicon glyphicon-lock">Datos de salud</b> y <b class="glyphicon glyphicon-picture">Digitalizar Documentos</b><br/>
Una vez registrados podrás imprimir tu <b class="glyphicon glyphicon-share">referencia de pago</b>, que llevarás al Banco (Banamex) y realizar tu pago.
En ésta sección y en tu correo electrónico encontrarás el aviso una vez detectado tu pago y proseguir tu proceso de inscripción.
</aside>
@endsection