<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $alumno->id; ?></p>
</div>

<!-- Nombre Tx Field -->
<div class="form-group">
    <?php echo Form::label('nombre_tx', 'Nombre Tx:'); ?>

    <p><?php echo $alumno->nombre_tx; ?></p>
</div>

<!-- Carreras Id Field -->
<div class="form-group">
    <?php echo Form::label('carreras_id', 'Carreras Id:'); ?>

    <p><?php echo $alumno->carreras_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $alumno->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $alumno->updated_at; ?></p>
</div>

