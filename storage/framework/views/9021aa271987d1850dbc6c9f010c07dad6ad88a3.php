<table class="table table-bordered table-striped <?php echo e(count($carreras) > 0 ? 'datatable' : ''); ?> dt-select" id="carreras-table">
    <thead>
        <th>Nombre Tx</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $carrera->nombre_tx; ?></td>
            <td>
                <?php echo Form::open(['route' => ['carreras.destroy', $carrera->id], 'method' => 'delete']); ?>

                <div class='btn-group'>

                    <a href="<?php echo route('carreras.show', [$carrera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edita_carrera')): ?>
                    <a href="<?php echo route('carreras.edit', [$carrera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borra_carrera')): ?>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    <?php endif; ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
