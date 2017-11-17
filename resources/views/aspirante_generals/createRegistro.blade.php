
@extends('layouts.app')
@section('title','Preregistro del aspirante')
@section('content')


<h3 class="page-title titulopag"></h3>
<div class="col-md-10">
    <div class="panel panel-default">
       <div class="panel-heading text-center">
           Preregistro del aspirante
           
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'aspiranteGenerals.store']) !!}

                <!-- Apellido Paterno Aspirante Field -->
                <div >
                    {!! Form::label('apellido_paterno_aspirante', 'Nombre del aspirante: (tal como viene en su acta de nacimiento)') !!}
                </div>
                <div class="form-group col-sm-3">
                {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control','placeholder' => 'Apellido Paterno']) !!}
                </div>
                <div class="form-group col-sm-3">
                {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control','placeholder' => 'Apellido Materno']) !!}
                </div>
                <div class="form-group col-sm-4">
                {!! Form::text('nombres_aspirante', null, ['class' => 'form-control','placeholder' => 'Nombres del aspirante']) !!}
                </div>

                <!-- Correo Elect Dom Actual Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('correo_elect_dom_actual', 'Correo electr�nico:') !!}
                    {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder' => 'Correo elctr�nico']) !!}
                </div>
                <!-- Correo Elect Dom Actual Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('correo_elect_dom_actual_confirmation', 'Confirmar su correo electr�nico:') !!}
                    {!! Form::text('correo_elect_dom_actual_confirmation', null, ['class' => 'form-control','placeholder' => 'Correo electr�nico']) !!}
                </div>
                <!-- Numero seguro social Dom Actual Field -->

                <div class="form-group col-sm-4" style="clear: both">
                    {!! Form::label('numero_seguro_social', 'N�mero del Seguro Social:') !!}
                    {!! Form::text('numero_seguro_social', null, ['class' => 'form-control','placeholder' => 'N�mero S.S.']) !!}
                </div>
                <!-- Numero seguro social Dom Actual Field -->
                <div class="form-group col-sm-4">
                    {!! Form::label('numero_seguro_social', 'Confirmar su n�mero del Seguro Social:') !!}
                    {!! Form::text('numero_seguro_social_confirmation', null, ['class' => 'form-control','placeholder' => 'Num. S.S.']) !!}
                </div>
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancel</a>
                </div>
                </div>      

            {!! Form::close() !!}
        </div>
</div>         
    <aside class="col-md-2">
        
        El Instituto Tecnol�gico de San Luis Potos� te da la m�s cordial bienvenida. 
        En este momento eres ASPIRANTE a ingresar a �ste INSTITUTO. 
        Si eres nuevo, deberas llenar los datos iniciales y obligatorios 
        El correo electr�nico es requerido ya que en el vas a recibir tu usuario y contrase�a, referencia bancaria y ficha de ex�men ingreso.
        Una vez que tengas tu usuario y contrase�a, deber�s continuar llenando tus datos generales, datos socioecon�micos y de salud.
        M�s informaci�n en www.itslp.edu.mx en la secci�n de Aspirantes.
    </aside>  

    

@endsection

