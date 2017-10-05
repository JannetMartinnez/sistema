<table class="table table-responsive" id="entidadFederativas-table">
    <thead>
        <th>Clave Entidad</th>
        <th>Nombre Entidad</th>
        <th>Abreviatura</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $entidadFederativas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidadFederativa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $entidadFederativa->clave_entidad; ?></td>
            <td><?php echo $entidadFederativa->nombre_entidad; ?></td>
            <td><?php echo $entidadFederativa->abreviatura; ?></td>
            <td>
                <?php echo Form::open(['route' => ['entidadFederativas.destroy', $entidadFederativa->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('entidadFederativas.show', [$entidadFederativa->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('entidadFederativas.edit', [$entidadFederativa->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>