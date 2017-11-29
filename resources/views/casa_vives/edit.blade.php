@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Casa Vive
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($casaVive, ['route' => ['casaVives.update', $casaVive->id], 'method' => 'patch']) !!}

                        @include('casa_vives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection