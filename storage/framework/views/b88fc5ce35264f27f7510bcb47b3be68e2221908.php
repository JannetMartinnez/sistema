<!-- Clave Entidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('clave_entidad', 'Clave Entidad:'); ?>

    <?php echo Form::text('clave_entidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Entidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_entidad', 'Nombre Entidad:'); ?>

    <?php echo Form::text('nombre_entidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('abreviatura', 'Abreviatura:'); ?>

    <?php echo Form::text('abreviatura', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('entidadFederativas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
