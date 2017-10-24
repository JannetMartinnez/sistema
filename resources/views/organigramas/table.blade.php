<table class="table table-responsive" id="organigramas-table">
    <thead>
        <th>Clave Area</th>
        <th>Descripcion Area</th>
        <th>Descripcion Corta</th>
        <th>Area Depende</th>
        <th>Nivel</th>
        <th>Tipo Area</th>
        <th>Correo Electronico</th>
        <th>Activo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($organigramas as $organigrama)
        <tr>
            <td>{!! $organigrama->clave_area !!}</td>
            <td>{!! $organigrama->descripcion_area !!}</td>
            <td>{!! $organigrama->descripcion_corta !!}</td>
            <td>{!! $organigrama->area_depende !!}</td>
            <td>{!! $organigrama->nivel !!}</td>
            <td>{!! $organigrama->tipo_area !!}</td>
            <td>{!! $organigrama->correo_electronico !!}</td>
            <td>{!! $organigrama->activo !!}</td>
            <td>
                {!! Form::open(['route' => ['organigramas.destroy', $organigrama->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('organigramas.show', [$organigrama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('organigramas.edit', [$organigrama->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>