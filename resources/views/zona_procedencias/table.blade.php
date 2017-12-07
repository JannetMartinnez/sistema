<table class="table table-responsive" id="zonaProcedencias-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($zonaProcedencias as $zonaProcedencia)
        <tr>
            <td>{!! $zonaProcedencia->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['zonaProcedencias.destroy', $zonaProcedencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('zonaProcedencias.show', [$zonaProcedencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('zonaProcedencias.edit', [$zonaProcedencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>