<!-- Sol Asp Fi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sol_asp_fi', 'Sol Asp Fi:') !!}
    {!! Form::date('sol_asp_fi', null, ['class' => 'form-control']) !!}
</div>

<!-- Sol Asp Ff Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sol_asp_ff', 'Sol Asp Ff:') !!}
    {!! Form::date('sol_asp_ff', null, ['class' => 'form-control']) !!}
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

<!-- Periodo Entrada Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo_entrada_id', 'Periodo Entrada Id:') !!}
    {!! Form::number('periodo_entrada_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Limite Pago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_limite_pago', 'Fecha Limite Pago:') !!}
    {!! Form::date('fecha_limite_pago', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Pagar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_pagar', 'Cantidad Pagar:') !!}
    {!! Form::number('cantidad_pagar', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Modalidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_modalidad_id', 'Tipo Modalidad Id:') !!}
    {!! Form::number('tipo_modalidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configFechaInscripcions.index') !!}" class="btn btn-default">Cancel</a>
</div>
