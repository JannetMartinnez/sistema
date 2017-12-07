@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Zona Procedencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($zonaProcedencia, ['route' => ['zonaProcedencias.update', $zonaProcedencia->id], 'method' => 'patch']) !!}

                        @include('zona_procedencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection