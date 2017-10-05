<!-- Nombre Tx Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_tx', 'Nombre Tx:'); ?>

    <?php echo Form::text('nombre_tx', null, ['class' => 'form-control']); ?>

</div>

<!-- Carreras Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('carreras_id', 'Carreras Id:'); ?>

    <?php echo Form::number('carreras_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('materias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
