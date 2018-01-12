<table class="table table-responsive" id="periodoEscolars-table">
    <thead>
        <th>Periodo</th>
        <th>Identificacion Larga</th>
        <th>Identificacion Corta</th>
        <th>Fecha Inicio</th>
        <th>Fecha Termino</th>
        <th>Inicio Vacacional Ss</th>
        <th>Termino Vacacional Ss</th>
        <th>Num Dias Clase</th>
        <th>Inicio Especial</th>
        <th>Fin Especial</th>
        <th>Cierre Horarios</th>
        <th>Cierre Seleccion</th>
        <th>Inicio Enc Estudiantil</th>
        <th>Fin Enc Estudiantil</th>
        <th>Inicio Sele Alumnos</th>
        <th>Fin Sele Alumnos</th>
        <th>Inicio Vacacional</th>
        <th>Termino Vacacional</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($periodoEscolars as $periodoEscolar)
        <tr>
            <td>{!! $periodoEscolar->periodo !!}</td>
            <td>{!! $periodoEscolar->identificacion_larga !!}</td>
            <td>{!! $periodoEscolar->identificacion_corta !!}</td>
            <td>{!! $periodoEscolar->fecha_inicio !!}</td>
            <td>{!! $periodoEscolar->fecha_termino !!}</td>
            <td>{!! $periodoEscolar->inicio_vacacional_ss !!}</td>
            <td>{!! $periodoEscolar->termino_vacacional_ss !!}</td>
            <td>{!! $periodoEscolar->num_dias_clase !!}</td>
            <td>{!! $periodoEscolar->inicio_especial !!}</td>
            <td>{!! $periodoEscolar->fin_especial !!}</td>
            <td>{!! $periodoEscolar->cierre_horarios !!}</td>
            <td>{!! $periodoEscolar->cierre_seleccion !!}</td>
            <td>{!! $periodoEscolar->inicio_enc_estudiantil !!}</td>
            <td>{!! $periodoEscolar->fin_enc_estudiantil !!}</td>
            <td>{!! $periodoEscolar->inicio_sele_alumnos !!}</td>
            <td>{!! $periodoEscolar->fin_sele_alumnos !!}</td>
            <td>{!! $periodoEscolar->inicio_vacacional !!}</td>
            <td>{!! $periodoEscolar->termino_vacacional !!}</td>
            <td>{!! $periodoEscolar->status !!}</td>
            <td>
                {!! Form::open(['route' => ['periodoEscolars.destroy', $periodoEscolar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('periodoEscolars.show', [$periodoEscolar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('periodoEscolars.edit', [$periodoEscolar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>