<!-- Nivel Escolar Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nivel_escolar', 'Nivel Escolar:'); ?>

    <?php echo Form::text('nivel_escolar', null, ['class' => 'form-control']); ?>

</div>

<!-- Clave Oficial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('clave_oficial', 'Clave Oficial:'); ?>

    <?php echo Form::text('clave_oficial', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Carrera Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_carrera', 'Nombre Carrera:'); ?>

    <?php echo Form::text('nombre_carrera', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Reducido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_reducido', 'Nombre Reducido:'); ?>

    <?php echo Form::text('nombre_reducido', null, ['class' => 'form-control']); ?>

</div>

<!-- Siglas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('siglas', 'Siglas:'); ?>

    <?php echo Form::text('siglas', null, ['class' => 'form-control']); ?>

</div>

<!-- Carga Maxima Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('carga_maxima', 'Carga Maxima:'); ?>

    <?php echo Form::number('carga_maxima', null, ['class' => 'form-control']); ?>

</div>

<!-- Carga Minima Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('carga_minima', 'Carga Minima:'); ?>

    <?php echo Form::number('carga_minima', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_inicio', 'Fecha Inicio:'); ?>

    <?php echo Form::date('fecha_inicio', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha Termino Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_termino', 'Fecha Termino:'); ?>

    <?php echo Form::date('fecha_termino', null, ['class' => 'form-control']); ?>

</div>

<!-- Clave Cosnet Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('clave_cosnet', 'Clave Cosnet:'); ?>

    <?php echo Form::text('clave_cosnet', null, ['class' => 'form-control']); ?>

</div>

<!-- Creditos Totales Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('creditos_totales', 'Creditos Totales:'); ?>

    <?php echo Form::number('creditos_totales', null, ['class' => 'form-control']); ?>

</div>

<!-- Titulo Entrega Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('titulo_entrega', 'Titulo Entrega:'); ?>

    <?php echo Form::text('titulo_entrega', null, ['class' => 'form-control']); ?>

</div>

<!-- Clave Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('clave', 'Clave:'); ?>

    <?php echo Form::text('clave', null, ['class' => 'form-control']); ?>

</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nivel', 'Nivel:'); ?>

    <?php echo Form::text('nivel', null, ['class' => 'form-control']); ?>

</div>

<!-- Consecturivo Carrera Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('consecturivo_carrera', 'Consecturivo Carrera:'); ?>

    <?php echo Form::text('consecturivo_carrera', null, ['class' => 'form-control']); ?>

</div>

<!-- Area Academica Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('area_academica', 'Area Academica:'); ?>

    <?php echo Form::text('area_academica', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('carreras.index'); ?>" class="btn btn-default">Cancel</a>
</div>
