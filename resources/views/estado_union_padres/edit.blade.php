@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estado Union Padre
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estadoUnionPadre, ['route' => ['estadoUnionPadres.update', $estadoUnionPadre->id], 'method' => 'patch']) !!}

                        @include('estado_union_padres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection