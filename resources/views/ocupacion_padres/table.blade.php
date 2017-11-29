<table class="table table-responsive" id="ocupacionPadres-table">
    <thead>
        <th>Desripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ocupacionPadres as $ocupacionPadre)
        <tr>
            <td>{!! $ocupacionPadre->desripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['ocupacionPadres.destroy', $ocupacionPadre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ocupacionPadres.show', [$ocupacionPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ocupacionPadres.edit', [$ocupacionPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>