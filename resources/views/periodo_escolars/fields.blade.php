<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Identificacion Larga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identificacion_larga', 'Identificacion Larga:') !!}
    {!! Form::text('identificacion_larga', null, ['class' => 'form-control']) !!}
</div>

<!-- Identificacion Corta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identificacion_corta', 'Identificacion Corta:') !!}
    {!! Form::text('identificacion_corta', null, ['class' => 'form-control']) !!}
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

<!-- Inicio Vacacional Ss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_vacacional_ss', 'Inicio Vacacional Ss:') !!}
    {!! Form::date('inicio_vacacional_ss', null, ['class' => 'form-control']) !!}
</div>

<!-- Termino Vacacional Ss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('termino_vacacional_ss', 'Termino Vacacional Ss:') !!}
    {!! Form::date('termino_vacacional_ss', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Dias Clase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_dias_clase', 'Num Dias Clase:') !!}
    {!! Form::number('num_dias_clase', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_especial', 'Inicio Especial:') !!}
    {!! Form::date('inicio_especial', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin_especial', 'Fin Especial:') !!}
    {!! Form::date('fin_especial', null, ['class' => 'form-control']) !!}
</div>

<!-- Cierre Horarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cierre_horarios', 'Cierre Horarios:') !!}
    {!! Form::text('cierre_horarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Cierre Seleccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cierre_seleccion', 'Cierre Seleccion:') !!}
    {!! Form::text('cierre_seleccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Enc Estudiantil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_enc_estudiantil', 'Inicio Enc Estudiantil:') !!}
    {!! Form::date('inicio_enc_estudiantil', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Enc Estudiantil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin_enc_estudiantil', 'Fin Enc Estudiantil:') !!}
    {!! Form::date('fin_enc_estudiantil', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Sele Alumnos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_sele_alumnos', 'Inicio Sele Alumnos:') !!}
    {!! Form::date('inicio_sele_alumnos', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Sele Alumnos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin_sele_alumnos', 'Fin Sele Alumnos:') !!}
    {!! Form::date('fin_sele_alumnos', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Vacacional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_vacacional', 'Inicio Vacacional:') !!}
    {!! Form::date('inicio_vacacional', null, ['class' => 'form-control']) !!}
</div>

<!-- Termino Vacacional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('termino_vacacional', 'Termino Vacacional:') !!}
    {!! Form::date('termino_vacacional', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('periodoEscolars.index') !!}" class="btn btn-default">Cancel</a>
</div>
