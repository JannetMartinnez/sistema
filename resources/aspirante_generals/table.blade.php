<table class="table table-bordered table-striped" id="aspiranteGenerals-table">
    <thead>
        <th>Folio Solicitud</th>
        <th>Periodo</th>
        <th>Ficha</th>
        <th>Apellido Paterno Aspirante</th>
        <th>Apellido Materno Aspirante</th>
        <th>Nombres Aspirante</th>
        <th>Fecha Nacimiento Asp</th>
        <th>Sexo Asp</th>
        <th>Escuela Procedencia Id</th>
        <th>Promedio Bachillerato</th>
        <th>Anio Termino Bachillerato</th>
        <th>Calle Dom Actual</th>
        <th>Municipio Nac</th>
        <th>Codigo Postal</th>
        <th>Carrera Op1 Id</th>
        <th>Carrera Op2 Id</th>
        <th>Nacionalidad Asp</th>
        <th>Curp Asp</th>
        <th>Entidad Federativa Proc Id</th>
        <th>Municipio Proc Id</th>
        <th>Entidad Federativa Dom Actual Id</th>
        <th>Municipio Dom Actual Id</th>
        <th>Codigo Postal Dom Actual</th>
        <th>Colonia Dom Actual</th>
        <th>Correo Elect Dom Actual</th>
        <th>Telefono Fijo Dom Actual</th>
        <th>Telefono Cel Aspirante</th>
        <th>Zona Proc Aspirante</th>
        <th>Oportunidades Aspirante</th>
        <th>Nombres Padre</th>
        <th>Apellido Paterno Padre</th>
        <th>Apellido Materno Padre</th>
        <th>Vive Padre</th>
        <th>Nombres Madre</th>
        <th>Apellido Paterno Madre</th>
        <th>Apellido Materno Madre</th>
        <th>Vive Madre</th>
        <th>Nombres Tutor</th>
        <th>Apellido Paterno Tutor</th>
        <th>Apellido Materno Tutor</th>
        <th>Usuario Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($aspiranteGenerals as $aspiranteGeneral)
        <tr>
            <td>{!! $aspiranteGeneral->folio_solicitud !!}</td>
            <td>{!! $aspiranteGeneral->periodo !!}</td>
            <td>{!! $aspiranteGeneral->ficha !!}</td>
            <td>{!! $aspiranteGeneral->apellido_paterno_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->apellido_materno_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->nombres_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->fecha_nacimiento_asp !!}</td>
            <td>{!! $aspiranteGeneral->sexo_asp !!}</td>
            <td>{!! $aspiranteGeneral->escuela_procedencia_id !!}</td>
            <td>{!! $aspiranteGeneral->promedio_bachillerato !!}</td>
            <td>{!! $aspiranteGeneral->anio_termino_bachillerato !!}</td>
            <td>{!! $aspiranteGeneral->calle_dom_actual !!}</td>
            <td>{!! $aspiranteGeneral->municipio_nac !!}</td>
            <td>{!! $aspiranteGeneral->codigo_postal !!}</td>
            <td>{!! $aspiranteGeneral->carrera_op1_id !!}</td>
            <td>{!! $aspiranteGeneral->carrera_op2_id !!}</td>
            <td>{!! $aspiranteGeneral->nacionalidad_asp !!}</td>
            <td>{!! $aspiranteGeneral->curp_asp !!}</td>
            <td>{!! $aspiranteGeneral->entidad_federativa_proc_id !!}</td>
            <td>{!! $aspiranteGeneral->municipio_proc_id !!}</td>
            <td>{!! $aspiranteGeneral->entidad_federativa_dom_actual_id !!}</td>
            <td>{!! $aspiranteGeneral->municipio_dom_actual_id !!}</td>
            <td>{!! $aspiranteGeneral->codigo_postal_dom_actual !!}</td>
            <td>{!! $aspiranteGeneral->colonia_dom_actual !!}</td>
            <td>{!! $aspiranteGeneral->correo_elect_dom_actual !!}</td>
            <td>{!! $aspiranteGeneral->telefono_fijo_dom_actual !!}</td>
            <td>{!! $aspiranteGeneral->telefono_cel_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->zona_proc_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->oportunidades_aspirante !!}</td>
            <td>{!! $aspiranteGeneral->nombres_padre !!}</td>
            <td>{!! $aspiranteGeneral->apellido_paterno_padre !!}</td>
            <td>{!! $aspiranteGeneral->apellido_materno_padre !!}</td>
            <td>{!! $aspiranteGeneral->vive_padre !!}</td>
            <td>{!! $aspiranteGeneral->nombres_madre !!}</td>
            <td>{!! $aspiranteGeneral->apellido_paterno_madre !!}</td>
            <td>{!! $aspiranteGeneral->apellido_materno_madre !!}</td>
            <td>{!! $aspiranteGeneral->vive_madre !!}</td>
            <td>{!! $aspiranteGeneral->nombres_tutor !!}</td>
            <td>{!! $aspiranteGeneral->apellido_paterno_tutor !!}</td>
            <td>{!! $aspiranteGeneral->apellido_materno_tutor !!}</td>
            <td>{!! $aspiranteGeneral->usuario_id !!}</td>
            <td>
                {!! Form::open(['route' => ['aspiranteGenerals.destroy', $aspiranteGeneral->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aspiranteGenerals.show', [$aspiranteGeneral->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('aspiranteGenerals.edit', [$aspiranteGeneral->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>