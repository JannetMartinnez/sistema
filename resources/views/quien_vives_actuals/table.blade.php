<table class="table table-responsive" id="quienVivesActuals-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($quienVivesActuals as $quienVivesActual)
        <tr>
            <td>{!! $quienVivesActual->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['quienVivesActuals.destroy', $quienVivesActual->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('quienVivesActuals.show', [$quienVivesActual->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('quienVivesActuals.edit', [$quienVivesActual->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>