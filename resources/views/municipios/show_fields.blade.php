<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $municipio->id !!}</p>
</div>

<!-- Nombre Municipio Field -->
<div class="form-group">
    {!! Form::label('nombre_municipio', 'Nombre Municipio:') !!}
    <p>{!! $municipio->nombre_municipio !!}</p>
</div>

<!-- Clave Entidad Field -->
<div class="form-group">
    {!! Form::label('clave_entidad', 'Clave Entidad:') !!}
    <p>{!! $municipio->clave_entidad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $municipio->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $municipio->updated_at !!}</p>
</div>

<!-- Entidades Federativas Id Field -->
<div class="form-group">
    {!! Form::label('entidades_federativas_id', 'Entidades Federativas Id:') !!}
    <p>{!! $municipio->entidades_federativas_id !!}</p>
</div>

