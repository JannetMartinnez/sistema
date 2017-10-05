<!-- Alumnos Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('alumnos_id', 'Alumnos Id:'); ?>

    <?php echo Form::number('alumnos_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Materias Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('materias_id', 'Materias Id:'); ?>

    <?php echo Form::number('materias_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('alumnoMaterias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
