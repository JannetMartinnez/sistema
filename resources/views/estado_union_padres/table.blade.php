<table class="table table-responsive" id="estadoUnionPadres-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($estadoUnionPadres as $estadoUnionPadre)
        <tr>
            <td>{!! $estadoUnionPadre->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['estadoUnionPadres.destroy', $estadoUnionPadre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estadoUnionPadres.show', [$estadoUnionPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estadoUnionPadres.edit', [$estadoUnionPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>