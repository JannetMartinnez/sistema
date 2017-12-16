<table class="table table-responsive" id="configFechaInscripcions-table">
    <thead>
        <th>Sol Asp Fi</th>
        <th>Sol Asp Ff</th>
        <th>Val Datos Fi</th>
        <th>Val Datos Ff</th>
        <th>Examen Ceneval</th>
        <th>Fecha Resultados</th>
        <th>Periodo Entrada Id</th>
        <th>Fecha Limite Pago</th>
        <th>Cantidad Pagar</th>
        <th>Tipo Modalidad Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($configFechaInscripcions as $configFechaInscripcion)
        <tr>
            <td>{!! $configFechaInscripcion->sol_asp_fi !!}</td>
            <td>{!! $configFechaInscripcion->sol_asp_ff !!}</td>
            <td>{!! $configFechaInscripcion->val_datos_fi !!}</td>
            <td>{!! $configFechaInscripcion->val_datos_ff !!}</td>
            <td>{!! $configFechaInscripcion->examen_ceneval !!}</td>
            <td>{!! $configFechaInscripcion->fecha_resultados !!}</td>
            <td>{!! $configFechaInscripcion->periodo_entrada_id !!}</td>
            <td>{!! $configFechaInscripcion->fecha_limite_pago !!}</td>
            <td>{!! $configFechaInscripcion->cantidad_pagar !!}</td>
            <td>{!! $configFechaInscripcion->tipo_modalidad_id !!}</td>
            <td>
                {!! Form::open(['route' => ['configFechaInscripcions.destroy', $configFechaInscripcion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('configFechaInscripcions.show', [$configFechaInscripcion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('configFechaInscripcions.edit', [$configFechaInscripcion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>