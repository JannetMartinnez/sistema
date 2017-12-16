@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Modalidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoModalidad, ['route' => ['tipoModalidads.update', $tipoModalidad->id], 'method' => 'patch']) !!}

                        @include('tipo_modalidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection