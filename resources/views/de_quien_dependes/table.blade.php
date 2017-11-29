<table class="table table-responsive" id="deQuienDependes-table">
    <thead>
        <th>Descripcion</th>
        <th>Update At</th>
        <th>Create At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($deQuienDependes as $deQuienDepende)
        <tr>
            <td>{!! $deQuienDepende->descripcion !!}</td>
            <td>{!! $deQuienDepende->update_at !!}</td>
            <td>{!! $deQuienDepende->create_at !!}</td>
            <td>
                {!! Form::open(['route' => ['deQuienDependes.destroy', $deQuienDepende->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('deQuienDependes.show', [$deQuienDepende->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('deQuienDependes.edit', [$deQuienDepende->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>