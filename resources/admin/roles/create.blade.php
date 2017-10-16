@extends('layouts.app')
@section('title','Crear rol')
@section('content')
    <h3 class="page-title"></h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <a href="{{ route('admin.roles.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-plus" aria-hidden="true"></i> @yield('title')</strong>
        </div>
        
        <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    {!! Form::label('name', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                    {!! Form::label('abilities', 'Habilidades', ['class' => 'control-label']) !!}
                    {!! Form::select('abilities[]', $abilities, old('abilities'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('abilities'))
                        <p class="help-block">
                            {{ $errors->first('abilities') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12">{!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-itslp']) !!}</div>
            
        </div>
    </div>

    
    {!! Form::close() !!}
@stop

