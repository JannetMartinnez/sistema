<table class="table table-responsive" id="aspiranteSocioecomicos-table">
    <thead>
        <th>Aspirantes Generales Id</th>
        <th>Nivel Estudios Padres Id</th>
        <th>Nivel Estudios Madres Id</th>
        <th>Quien Vives Actual Id</th>
        <th>Ingresos Padre</th>
        <th>Ingresos Madre</th>
        <th>Ingresos Hermanos</th>
        <th>Ingresos Propios</th>
        <th>Ingresos Otros</th>
        <th>Ocupacion Padre Id</th>
        <th>Ocupacion Madre Id</th>
        <th>De Quien Dependes Id</th>
        <th>Casa Vives Id</th>
        <th>Cuartos Personas Id</th>
        <th>Personas Casas Id</th>
        <th>Personas Dependen Id</th>
        <th>Estado Union Padres Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($aspiranteSocioecomicos as $aspiranteSocioecomico)
        <tr>
            <td>{!! $aspiranteSocioecomico->aspirantes_generales_id !!}</td>
            <td>{!! $aspiranteSocioecomico->nivel_estudios_padres_id !!}</td>
            <td>{!! $aspiranteSocioecomico->nivel_estudios_madres_id !!}</td>
            <td>{!! $aspiranteSocioecomico->quien_vives_actual_id !!}</td>
            <td>{!! $aspiranteSocioecomico->ingresos_padre !!}</td>
            <td>{!! $aspiranteSocioecomico->ingresos_madre !!}</td>
            <td>{!! $aspiranteSocioecomico->ingresos_hermanos !!}</td>
            <td>{!! $aspiranteSocioecomico->ingresos_propios !!}</td>
            <td>{!! $aspiranteSocioecomico->ingresos_otros !!}</td>
            <td>{!! $aspiranteSocioecomico->ocupacion_padre_id !!}</td>
            <td>{!! $aspiranteSocioecomico->ocupacion_madre_id !!}</td>
            <td>{!! $aspiranteSocioecomico->de_quien_dependes_id !!}</td>
            <td>{!! $aspiranteSocioecomico->casa_vives_id !!}</td>
            <td>{!! $aspiranteSocioecomico->cuartos_personas_id !!}</td>
            <td>{!! $aspiranteSocioecomico->personas_casas_id !!}</td>
            <td>{!! $aspiranteSocioecomico->personas_dependen_id !!}</td>
            <td>{!! $aspiranteSocioecomico->estado_union_padres_id !!}</td>
            <td>
                {!! Form::open(['route' => ['aspiranteSocioecomicos.destroy', $aspiranteSocioecomico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aspiranteSocioecomicos.show', [$aspiranteSocioecomico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('aspiranteSocioecomicos.edit', [$aspiranteSocioecomico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>