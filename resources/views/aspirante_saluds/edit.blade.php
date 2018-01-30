@extends('layouts.app')

@section('content')
  <section class="content-header">
        <h1>
            Aspirante - Datos Salud
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
   <div class="col-md-10">
    <div class="panel panel-default">
       <div class="panel-heading text-center">
            <a href="{{ route('aspiranteGenerals.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-plus" aria-hidden="true"></i> @yield('title')</strong>
        </div>
        <div class="panel-body">
                   {!! Form::model($aspiranteSalud, ['route' => ['aspiranteSaluds.update', $aspiranteSalud->id], 'method' => 'patch']) !!}

                        @include('aspirante_saluds.fields')

                   {!! Form::close() !!}
      
    </div>
   </div>

   <aside class="col-md-2">
       <h3 class="titulos">Avisos</h3>
       Favor de completar sus datos llenando los apartados:</br> </br> 
       <b class="glyphicon glyphicon-pencil">Datos Generales,</b></br>
       <b class="glyphicon glyphicon-usd">Datos Socioeconómicos</b>",</br>
       <b class="glyphicon glyphicon-lock">Datos de salud y </b></br>
       <b class="glyphicon glyphicon-picture">Digitalizar Documentos</b><br/></br> 
      Una vez registrados podrás imprimir tu <b class="glyphicon glyphicon-share">Referencia de pago</b>, que llevarás al Banco (Banamex) y realizar tu pago.
      En ésta sección y en tu correo electrónico encontrarás el aviso una vez detectado tu pago y proseguir tu proceso de inscripción.
   </aside>
@endsection