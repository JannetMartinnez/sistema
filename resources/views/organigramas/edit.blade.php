@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Organigrama
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($organigrama, ['route' => ['organigramas.update', $organigrama->id], 'method' => 'patch']) !!}

                        @include('organigramas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection