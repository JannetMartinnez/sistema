@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aspirante Socioecomico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aspiranteSocioecomico, ['route' => ['aspiranteSocioecomicos.update', $aspiranteSocioecomico->id], 'method' => 'patch']) !!}

                        @include('aspirante_socioecomicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection