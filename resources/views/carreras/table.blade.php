<table class="table table-responsive" id="carreras-table">
    <thead>
        <th>Nivel Escolar</th>
        <th>Clave Oficial</th>
        <th>Clave Cosnet</th>
        <th>Nombre Carrera</th>
        <th>Nombre Reducido</th>
        <th>Siglas</th>
        <th>Fecha Inicio</th>
        <th>Fecha Termino</th>
        <th>Creditos Totales</th>
        <th>Carga Maxima</th>
        <th>Carga Minima</th>
        <th>Area Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($carreras as $carrera)
        <tr>
            <td>{!! $carrera->nivel_escolar !!}</td>
            <td>{!! $carrera->clave_oficial !!}</td>
            <td>{!! $carrera->clave_cosnet !!}</td>
            <td>{!! $carrera->nombre_carrera !!}</td>
            <td>{!! $carrera->nombre_reducido !!}</td>
            <td>{!! $carrera->siglas !!}</td>
            <td>{!! $carrera->fecha_inicio !!}</td>
            <td>{!! $carrera->fecha_termino !!}</td>
            <td>{!! $carrera->creditos_totales !!}</td>
            <td>{!! $carrera->carga_maxima !!}</td>
            <td>{!! $carrera->carga_minima !!}</td>
            <td>{!! $carrera->area_id !!}</td>
            <td>
                {!! Form::open(['route' => ['carreras.destroy', $carrera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('carreras.show', [$carrera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('carreras.edit', [$carrera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>