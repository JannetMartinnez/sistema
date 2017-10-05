<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $carrera->id; ?></p>
</div>

<!-- Nombre Tx Field -->
<div class="form-group">
    <?php echo Form::label('nombre_tx', 'Nombre Tx:'); ?>

    <p><?php echo $carrera->nombre_tx; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $carrera->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $carrera->updated_at; ?></p>
</div>

