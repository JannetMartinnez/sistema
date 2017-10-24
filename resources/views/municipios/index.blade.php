@extends('layouts.app')
@section('title','Lista de Municipios')
@section('content')
    <div class="clearfix"></div>
        @include('flash::message')
    <div class="clearfix"></div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <i class="fa fa-list-ul-alt" aria-hidden="true"></i>
            <strong>@yield('title')</strong><a 
            href="{!! route('municipios.create') !!}" class="btn btn-itslp pull-right">@lang('global.app_add_new')</a>
        </div>
        <div class="panel-body table-responsive">
            @include('municipios.table')
        </div>

    </div>
@endsection

