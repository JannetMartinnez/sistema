<table class="table table-responsive" id="aspiranteGenerals-table">
    <thead>
        <th>Users Id</th>
        <th>Entidades Federativas Id</th>
        <th>Carreras Id</th>
        <th>Folio Solicitud</th>
        <th>Periodo</th>
        <th>Ficha</th>
        <th>Curp Asp 2</th>
        <th>Apellidos Aspirante</th>
        <th>Nombres Aspirante</th>
        <th>Fecha Nacimiento Asp</th>
        <th>Sexo Asp</th>
        <th>Estado Civil Asp</th>
        <th>Tipo Escuela</th>
        <th>Clave Escuela</th>
        <th>Escuela Procedencia</th>
        <th>Promedio Bachillerato</th>
        <th>Anio Termino Bachillerato</th>
        <th>Calle Dom Actual</th>
        <th>Municipio Nac</th>
        <th>Codigo Postal</th>
        <th>Carrera Op1 Id</th>
        <th>Nacionalidad Asp</th>
        <th>Curp Asp</th>
        <th>Carrera Op2 Id</th>
        <th>Entidad Federativa Proc Id</th>
        <th>Municipio Proc Id</th>
        <th>Entidad Federativa Dom Actual Id</th>
        <th>Municipio Dom Actual Id</th>
        <th>Codigo Postal Dom Actual</th>
        <th>Colonia Dom Actual</th>
        <th>Correo Elect Dom Actual</th>
        <th>Telefono Dom Actual</th>
        <th>Zona Proc Aspirante</th>
        <th>Oportunidades Aspirante</th>
        <th>Nombres Padre</th>
        <th>Apellidos Padre</th>
        <th>Vive Padre</th>
        <th>Nombres Madre</th>
        <th>Apellidos Madre</th>
        <th>Vive Madre</th>
        <th>Nombres Tutor</th>
        <th>Apellidos Tutor</th>
        <th>Usuario Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $aspiranteGenerals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aspiranteGeneral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $aspiranteGeneral->users_id; ?></td>
            <td><?php echo $aspiranteGeneral->entidades_federativas_id; ?></td>
            <td><?php echo $aspiranteGeneral->carreras_id; ?></td>
            <td><?php echo $aspiranteGeneral->folio_solicitud; ?></td>
            <td><?php echo $aspiranteGeneral->periodo; ?></td>
            <td><?php echo $aspiranteGeneral->ficha; ?></td>
            <td><?php echo $aspiranteGeneral->curp_asp_2; ?></td>
            <td><?php echo $aspiranteGeneral->apellidos_aspirante; ?></td>
            <td><?php echo $aspiranteGeneral->nombres_aspirante; ?></td>
            <td><?php echo $aspiranteGeneral->fecha_nacimiento_asp; ?></td>
            <td><?php echo $aspiranteGeneral->sexo_asp; ?></td>
            <td><?php echo $aspiranteGeneral->estado_civil_asp; ?></td>
            <td><?php echo $aspiranteGeneral->tipo_escuela; ?></td>
            <td><?php echo $aspiranteGeneral->clave_escuela; ?></td>
            <td><?php echo $aspiranteGeneral->escuela_procedencia; ?></td>
            <td><?php echo $aspiranteGeneral->promedio_bachillerato; ?></td>
            <td><?php echo $aspiranteGeneral->anio_termino_bachillerato; ?></td>
            <td><?php echo $aspiranteGeneral->calle_dom_actual; ?></td>
            <td><?php echo $aspiranteGeneral->municipio_nac; ?></td>
            <td><?php echo $aspiranteGeneral->codigo_postal; ?></td>
            <td><?php echo $aspiranteGeneral->carrera_op1_id; ?></td>
            <td><?php echo $aspiranteGeneral->nacionalidad_asp; ?></td>
            <td><?php echo $aspiranteGeneral->curp_asp; ?></td>
            <td><?php echo $aspiranteGeneral->carrera_op2_id; ?></td>
            <td><?php echo $aspiranteGeneral->entidad_federativa_proc_id; ?></td>
            <td><?php echo $aspiranteGeneral->municipio_proc_id; ?></td>
            <td><?php echo $aspiranteGeneral->entidad_federativa_dom_actual_id; ?></td>
            <td><?php echo $aspiranteGeneral->municipio_dom_actual_id; ?></td>
            <td><?php echo $aspiranteGeneral->codigo_postal_dom_actual; ?></td>
            <td><?php echo $aspiranteGeneral->colonia_dom_actual; ?></td>
            <td><?php echo $aspiranteGeneral->correo_elect_dom_actual; ?></td>
            <td><?php echo $aspiranteGeneral->telefono_dom_actual; ?></td>
            <td><?php echo $aspiranteGeneral->zona_proc_aspirante; ?></td>
            <td><?php echo $aspiranteGeneral->oportunidades_aspirante; ?></td>
            <td><?php echo $aspiranteGeneral->nombres_padre; ?></td>
            <td><?php echo $aspiranteGeneral->apellidos_padre; ?></td>
            <td><?php echo $aspiranteGeneral->vive_padre; ?></td>
            <td><?php echo $aspiranteGeneral->nombres_madre; ?></td>
            <td><?php echo $aspiranteGeneral->apellidos_madre; ?></td>
            <td><?php echo $aspiranteGeneral->vive_madre; ?></td>
            <td><?php echo $aspiranteGeneral->nombres_tutor; ?></td>
            <td><?php echo $aspiranteGeneral->apellidos_tutor; ?></td>
            <td><?php echo $aspiranteGeneral->usuario_id; ?></td>
            <td>
                <?php echo Form::open(['route' => ['aspiranteGenerals.destroy', $aspiranteGeneral->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('aspiranteGenerals.show', [$aspiranteGeneral->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('aspiranteGenerals.edit', [$aspiranteGeneral->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>