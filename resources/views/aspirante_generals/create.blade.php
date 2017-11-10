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
    <h3 class="titulos" >Avisos</h3>
    Excelente días, tardes o noches, maestra aqui su grupo fregon de Programación jeje, se le hicieron los cambios que pidio de las carreras, acomodo y reduccion de algunos campos.<br><br>

    Atte: Los programadores 

    </aside>
@endsection

