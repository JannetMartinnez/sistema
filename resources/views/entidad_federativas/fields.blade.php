<!-- Clave Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_entidad', 'Clave Entidad:') !!}
    {!! Form::text('clave_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_entidad', 'Nombre Entidad:') !!}
    {!! Form::text('nombre_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais_id', 'Pais Id:') !!}
    {!! Form::number('pais_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('entidadFederativas.index') !!}" class="btn btn-default">Cancel</a>
</div>
