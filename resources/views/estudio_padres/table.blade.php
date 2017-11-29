<table class="table table-responsive" id="estudioPadres-table">
    <thead>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($estudioPadres as $estudioPadre)
        <tr>
            <td>{!! $estudioPadre->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['estudioPadres.destroy', $estudioPadre->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estudioPadres.show', [$estudioPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estudioPadres.edit', [$estudioPadre->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>