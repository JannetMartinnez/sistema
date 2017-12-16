<table class="table table-responsive" id="tipoModalidads-table">
    <thead>
        <th>Modalidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoModalidads as $tipoModalidad)
        <tr>
            <td>{!! $tipoModalidad->modalidad !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoModalidads.destroy', $tipoModalidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoModalidads.show', [$tipoModalidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoModalidads.edit', [$tipoModalidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>