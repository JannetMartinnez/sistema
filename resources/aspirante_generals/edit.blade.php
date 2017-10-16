@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aspirante General
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aspiranteGeneral, ['route' => ['aspiranteGenerals.update', $aspiranteGeneral->id], 'method' => 'patch']) !!}

                        @include('aspirante_generals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection