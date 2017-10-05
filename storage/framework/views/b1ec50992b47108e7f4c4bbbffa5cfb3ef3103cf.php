<table class="table table-responsive" id="carreras-table">
    <thead>
        <th>Nivel Escolar</th>
        <th>Clave Oficial</th>
        <th>Nombre Carrera</th>
        <th>Nombre Reducido</th>
        <th>Siglas</th>
        <th>Carga Maxima</th>
        <th>Carga Minima</th>
        <th>Fecha Inicio</th>
        <th>Fecha Termino</th>
        <th>Clave Cosnet</th>
        <th>Creditos Totales</th>
        <th>Titulo Entrega</th>
        <th>Clave</th>
        <th>Nivel</th>
        <th>Consecturivo Carrera</th>
        <th>Area Academica</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $carrera->nivel_escolar; ?></td>
            <td><?php echo $carrera->clave_oficial; ?></td>
            <td><?php echo $carrera->nombre_carrera; ?></td>
            <td><?php echo $carrera->nombre_reducido; ?></td>
            <td><?php echo $carrera->siglas; ?></td>
            <td><?php echo $carrera->carga_maxima; ?></td>
            <td><?php echo $carrera->carga_minima; ?></td>
            <td><?php echo $carrera->fecha_inicio; ?></td>
            <td><?php echo $carrera->fecha_termino; ?></td>
            <td><?php echo $carrera->clave_cosnet; ?></td>
            <td><?php echo $carrera->creditos_totales; ?></td>
            <td><?php echo $carrera->titulo_entrega; ?></td>
            <td><?php echo $carrera->clave; ?></td>
            <td><?php echo $carrera->nivel; ?></td>
            <td><?php echo $carrera->consecturivo_carrera; ?></td>
            <td><?php echo $carrera->area_academica; ?></td>
            <td>
                <?php echo Form::open(['route' => ['carreras.destroy', $carrera->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('carreras.show', [$carrera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('carreras.edit', [$carrera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>