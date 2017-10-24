@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Preparatoria Procedencia
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'preparatoriaProcedencias.store']) !!}

                        @include('preparatoria_procedencias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
