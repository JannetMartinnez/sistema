<table class="table table-responsive" id="casaVives-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($casaVives as $casaVive)
        <tr>
            <td>{!! $casaVive->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['casaVives.destroy', $casaVive->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('casaVives.show', [$casaVive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('casaVives.edit', [$casaVive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>