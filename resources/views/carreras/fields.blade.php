<!-- Nivel Escolar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_escolar', 'Nivel Escolar:') !!}
    {!! Form::text('nivel_escolar', null, ['class' => 'form-control']) !!}
</div>

<!-- Clave Oficial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_oficial', 'Clave Oficial:') !!}
    {!! Form::text('clave_oficial', null, ['class' => 'form-control']) !!}
</div>

<!-- Clave Cosnet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave_cosnet', 'Clave Cosnet:') !!}
    {!! Form::text('clave_cosnet', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Carrera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_carrera', 'Nombre Carrera:') !!}
    {!! Form::text('nombre_carrera', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Reducido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_reducido', 'Nombre Reducido:') !!}
    {!! Form::text('nombre_reducido', null, ['class' => 'form-control']) !!}
</div>

<!-- Siglas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('siglas', 'Siglas:') !!}
    {!! Form::text('siglas', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Termino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_termino', 'Fecha Termino:') !!}
    {!! Form::date('fecha_termino', null, ['class' => 'form-control']) !!}
</div>

<!-- Creditos Totales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creditos_totales', 'Creditos Totales:') !!}
    {!! Form::number('creditos_totales', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Maxima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_maxima', 'Carga Maxima:') !!}
    {!! Form::number('carga_maxima', null, ['class' => 'form-control']) !!}
</div>

<!-- Carga Minima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carga_minima', 'Carga Minima:') !!}
    {!! Form::number('carga_minima', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::number('area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carreras.index') !!}" class="btn btn-default">Cancel</a>
</div>
