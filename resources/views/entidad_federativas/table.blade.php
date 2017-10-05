<table class="table table-responsive" id="entidadFederativas-table">
    <thead>
        <th>Clave Entidad</th>
        <th>Nombre Entidad</th>
        <th>Abreviatura</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($entidadFederativas as $entidadFederativa)
        <tr>
            <td>{!! $entidadFederativa->clave_entidad !!}</td>
            <td>{!! $entidadFederativa->nombre_entidad !!}</td>
            <td>{!! $entidadFederativa->abreviatura !!}</td>
            <td>
                {!! Form::open(['route' => ['entidadFederativas.destroy', $entidadFederativa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('entidadFederativas.show', [$entidadFederativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('entidadFederativas.edit', [$entidadFederativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>