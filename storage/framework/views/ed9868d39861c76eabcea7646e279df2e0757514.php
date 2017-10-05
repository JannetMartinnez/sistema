<table class="table table-responsive" id="alumnoMaterias-table">
    <thead>
        <th>Alumnos Id</th>
        <th>Materias Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $alumnoMaterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumnoMateria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $alumnoMateria->alumnos_id; ?></td>
            <td><?php echo $alumnoMateria->materias_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['alumnoMaterias.destroy', $alumnoMateria->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('alumnoMaterias.show', [$alumnoMateria->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('alumnoMaterias.edit', [$alumnoMateria->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>