<!-- Nombre Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_municipio', 'Nombre Municipio:') !!}
    {!! Form::text('nombre_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Clave Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_entidad', 'Clave Entidad:') !!}
    {!! Form::number('clave_entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidades Federativas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidades_federativas_id', 'Entidades Federativas Id:') !!}
    {!! Form::number('entidades_federativas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('municipios.index') !!}" class="btn btn-default">Cancel</a>
</div>
