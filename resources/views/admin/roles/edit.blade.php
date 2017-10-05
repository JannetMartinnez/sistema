@extends('layouts.app')
@section('title','Editar rol')
@section('content')
    <h3 class="page-title"></h3>
    
    {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <a href="{{ route('admin.roles.index') }}" class="btn_reg pull-left"  data-toggle="tooltip" data-placement="right" title="Regresar"><i class="fa fa-arrow-circle-left"></i></a>
            <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i> @yield('title')</strong>
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
                    {!! Form::select('abilities[]', $abilities, old('abilities') ? old('abilities') : $role->getAbilities()->pluck('name', 'name'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('abilities'))
                        <p class="help-block">
                            {{ $errors->first('abilities') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12">{!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-itslp']) !!}</div>
            
        </div>
    </div>

    
    {!! Form::close() !!}
@stop

