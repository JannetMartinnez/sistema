<!-- Aspirantes Generales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_generales_id', 'Aspirantes Generales Id:') !!}
    {!! Form::number('aspirantes_generales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Estudios Padres Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_estudios_padres_id', 'Nivel Estudios Padres Id:') !!}
    {!! Form::number('nivel_estudios_padres_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Estudios Madres Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_estudios_madres_id', 'Nivel Estudios Madres Id:') !!}
    {!! Form::number('nivel_estudios_madres_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quien Vives Actual Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quien_vives_actual_id', 'Quien Vives Actual Id:') !!}
    {!! Form::number('quien_vives_actual_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingresos Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingresos_padre', 'Ingresos Padre:') !!}
    {!! Form::number('ingresos_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingresos Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingresos_madre', 'Ingresos Madre:') !!}
    {!! Form::number('ingresos_madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingresos Hermanos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingresos_hermanos', 'Ingresos Hermanos:') !!}
    {!! Form::number('ingresos_hermanos', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingresos Propios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingresos_propios', 'Ingresos Propios:') !!}
    {!! Form::number('ingresos_propios', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingresos Otros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingresos_otros', 'Ingresos Otros:') !!}
    {!! Form::number('ingresos_otros', null, ['class' => 'form-control']) !!}
</div>

<!-- Ocupacion Padre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ocupacion_padre_id', 'Ocupacion Padre Id:') !!}
    {!! Form::number('ocupacion_padre_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ocupacion Madre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ocupacion_madre_id', 'Ocupacion Madre Id:') !!}
    {!! Form::number('ocupacion_madre_id', null, ['class' => 'form-control']) !!}
</div>

<!-- De Quien Dependes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('de_quien_dependes_id', 'De Quien Dependes Id:') !!}
    {!! Form::number('de_quien_dependes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Casa Vives Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('casa_vives_id', 'Casa Vives Id:') !!}
    {!! Form::number('casa_vives_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuartos Personas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuartos_personas_id', 'Cuartos Personas Id:') !!}
    {!! Form::number('cuartos_personas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Personas Casas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_casas_id', 'Personas Casas Id:') !!}
    {!! Form::number('personas_casas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Personas Dependen Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_dependen_id', 'Personas Dependen Id:') !!}
    {!! Form::number('personas_dependen_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Union Padres Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_union_padres_id', 'Estado Union Padres Id:') !!}
    {!! Form::number('estado_union_padres_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSocioecomicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
