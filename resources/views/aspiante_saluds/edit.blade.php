@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aspiante Salud
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aspianteSalud, ['route' => ['aspianteSaluds.update', $aspianteSalud->id], 'method' => 'patch']) !!}

                        @include('aspiante_saluds.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection