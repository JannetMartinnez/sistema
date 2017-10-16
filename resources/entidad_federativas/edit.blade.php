@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidad Federativa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entidadFederativa, ['route' => ['entidadFederativas.update', $entidadFederativa->id], 'method' => 'patch']) !!}

                        @include('entidad_federativas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection