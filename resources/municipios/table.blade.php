<table class="table table-bordered table-striped" id="municipios-table">
    <thead>
        <th>Nombre Municipio</th>
        <th>Clave Entidad</th>
        <th>Entidades Federativas Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($municipios as $municipio)
        <tr>
            <td>{!! $municipio->nombre_municipio !!}</td>
            <td>{!! $municipio->clave_entidad !!}</td>
            <td>{!! $municipio->entidades_federativas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['municipios.destroy', $municipio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('municipios.show', [$municipio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('municipios.edit', [$municipio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>