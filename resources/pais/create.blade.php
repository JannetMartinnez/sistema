@extends('layouts.app')
@section('title','Crear País')
@section('content')
    <h3 class="page-title titulopag"></h3>
         @include('adminlte-templates::common.errors')
    <div class="panel panel-default">
       <div class="panel-heading text-center">
            <a href="{{ route('pais.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-plus" aria-hidden="true"></i> @yield('title')</strong>
        </div>
        <div class="panel-body">
        {!! Form::open(['route' => 'pais.store']) !!}

                        @include('pais.fields')

                    {!! Form::close() !!}
        </div>
    </div>
@endsection
