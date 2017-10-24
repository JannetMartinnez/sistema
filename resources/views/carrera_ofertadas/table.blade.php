<table class="table table-responsive" id="carreraOfertadas-table">
    <thead>
        <th>Carreras Id</th>
        <th>Fecha Inicio</th>
        <th>Feha Fin</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($carreraOfertadas as $carreraOfertada)
        <tr>
            <td>{!! $carreraOfertada->carreras_id !!}</td>
            <td>{!! $carreraOfertada->fecha_inicio !!}</td>
            <td>{!! $carreraOfertada->feha_fin !!}</td>
            <td>
                {!! Form::open(['route' => ['carreraOfertadas.destroy', $carreraOfertada->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('carreraOfertadas.show', [$carreraOfertada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('carreraOfertadas.edit', [$carreraOfertada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>