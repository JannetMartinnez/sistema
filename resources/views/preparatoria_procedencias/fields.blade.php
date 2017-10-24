<!-- Clave Preparatoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_preparatoria', 'Clave Preparatoria:') !!}
    {!! Form::text('clave_preparatoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Preparatoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_preparatoria', 'Nombre Preparatoria:') !!}
    {!! Form::text('nombre_preparatoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidades Federativas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidades_federativas_id', 'Entidades Federativas Id:') !!}
    {!! Form::number('entidades_federativas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipios_id', 'Municipios Id:') !!}
    {!! Form::number('municipios_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Colonia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('colonia', 'Colonia:') !!}
    {!! Form::text('colonia', null, ['class' => 'form-control']) !!}
</div>

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    {!! Form::text('servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Sostenimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sostenimiento', 'Sostenimiento:') !!}
    {!! Form::text('sostenimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preparatoriaProcedencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
