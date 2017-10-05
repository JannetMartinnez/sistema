<table class="table table-responsive" id="materias-table">
    <thead>
        <th>Nombre Tx</th>
        <th>Carreras Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $materia->nombre_tx; ?></td>
            <td><?php echo $materia->carreras_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['materias.destroy', $materia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('materias.show', [$materia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('materias.edit', [$materia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>