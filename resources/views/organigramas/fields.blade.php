<!-- Clave Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_area', 'Clave Area:') !!}
    {!! Form::text('clave_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_area', 'Descripcion Area:') !!}
    {!! Form::text('descripcion_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Corta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_corta', 'Descripcion Corta:') !!}
    {!! Form::text('descripcion_corta', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Depende Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_depende', 'Area Depende:') !!}
    {!! Form::text('area_depende', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::number('nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_area', 'Tipo Area:') !!}
    {!! Form::text('tipo_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Electronico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo_electronico', 'Correo Electronico:') !!}
    {!! Form::text('correo_electronico', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activo', false) !!}
        {!! Form::checkbox('activo', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('organigramas.index') !!}" class="btn btn-default">Cancel</a>
</div>
