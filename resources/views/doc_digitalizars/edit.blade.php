@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doc Digitalizar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($docDigitalizar, ['route' => ['docDigitalizars.update', $docDigitalizar->id], 'method' => 'patch']) !!}

                        @include('doc_digitalizars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection