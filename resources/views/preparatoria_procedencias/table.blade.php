<table class="table table-responsive" id="preparatoriaProcedencias-table">
    <thead>
        <th>Clave Preparatoria</th>
        <th>Nombre Preparatoria</th>
        <th>Entidades Federativas Id</th>
        <th>Municipios Id</th>
        <th>Colonia</th>
        <th>Servicio</th>
        <th>Sostenimiento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($preparatoriaProcedencias as $preparatoriaProcedencia)
        <tr>
            <td>{!! $preparatoriaProcedencia->clave_preparatoria !!}</td>
            <td>{!! $preparatoriaProcedencia->nombre_preparatoria !!}</td>
            <td>{!! $preparatoriaProcedencia->entidades_federativas_id !!}</td>
            <td>{!! $preparatoriaProcedencia->municipios_id !!}</td>
            <td>{!! $preparatoriaProcedencia->colonia !!}</td>
            <td>{!! $preparatoriaProcedencia->servicio !!}</td>
            <td>{!! $preparatoriaProcedencia->sostenimiento !!}</td>
            <td>
                {!! Form::open(['route' => ['preparatoriaProcedencias.destroy', $preparatoriaProcedencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('preparatoriaProcedencias.show', [$preparatoriaProcedencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('preparatoriaProcedencias.edit', [$preparatoriaProcedencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>