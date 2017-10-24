<!-- Sol Asp Fi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sol_asp_fi', 'Sol Asp Fi:') !!}
    {!! Form::date('sol_asp_fi', null, ['class' => 'form-control']) !!}
</div>

<!-- Sol Asp  Ff Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sol_asp__ff', 'Sol Asp  Ff:') !!}
    {!! Form::date('sol_asp__ff', null, ['class' => 'form-control']) !!}
</div>

<!-- Val Datos Fi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('val_datos_fi', 'Val Datos Fi:') !!}
    {!! Form::date('val_datos_fi', null, ['class' => 'form-control']) !!}
</div>

<!-- Val Datos Ff Field -->
<div class="form-group col-sm-6">
    {!! Form::label('val_datos_ff', 'Val Datos Ff:') !!}
    {!! Form::date('val_datos_ff', null, ['class' => 'form-control']) !!}
</div>

<!-- Examen Ceneval Field -->
<div class="form-group col-sm-6">
    {!! Form::label('examen_ceneval', 'Examen Ceneval:') !!}
    {!! Form::date('examen_ceneval', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Resultados Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_resultados', 'Fecha Resultados:') !!}
    {!! Form::date('fecha_resultados', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configFechaInscripcions.index') !!}" class="btn btn-default">Cancel</a>
</div>
