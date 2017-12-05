<table class="table table-responsive" id="aspianteSaluds-table">
    <thead>
        <th>Tipo Sangre</th>
        <th>Baston</th>
        <th>Muletas</th>
        <th>Silla Ruedas</th>
        <th>Calzado Especial</th>
        <th>Otros</th>
        <th>Difi Escuchar</th>
        <th>Apara Escuchar</th>
        <th>Proble Ver</th>
        <th>Utiliza Lentes</th>
        <th>Enfer Cronode</th>
        <th>Enfer Infec Conta</th>
        <th>Enfer Cance</th>
        <th>Problema Lenguaje</th>
        <th>Dificultad Aprender</th>
        <th>Enfer Como</th>
        <th>Problemas Relacionarte</th>
        <th>Tienes Fobia</th>
        <th>Aspirantes Generales Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($aspianteSaluds as $aspianteSalud)
        <tr>
            <td>{!! $aspianteSalud->tipo_sangre !!}</td>
            <td>{!! $aspianteSalud->baston !!}</td>
            <td>{!! $aspianteSalud->muletas !!}</td>
            <td>{!! $aspianteSalud->silla_ruedas !!}</td>
            <td>{!! $aspianteSalud->calzado_especial !!}</td>
            <td>{!! $aspianteSalud->otros !!}</td>
            <td>{!! $aspianteSalud->difi_escuchar !!}</td>
            <td>{!! $aspianteSalud->apara_escuchar !!}</td>
            <td>{!! $aspianteSalud->proble_ver !!}</td>
            <td>{!! $aspianteSalud->utiliza_lentes !!}</td>
            <td>{!! $aspianteSalud->enfer_cronode !!}</td>
            <td>{!! $aspianteSalud->enfer_infec_conta !!}</td>
            <td>{!! $aspianteSalud->enfer_cance !!}</td>
            <td>{!! $aspianteSalud->problema_lenguaje !!}</td>
            <td>{!! $aspianteSalud->dificultad_aprender !!}</td>
            <td>{!! $aspianteSalud->enfer_como !!}</td>
            <td>{!! $aspianteSalud->problemas_relacionarte !!}</td>
            <td>{!! $aspianteSalud->tienes_fobia !!}</td>
            <td>{!! $aspianteSalud->aspirantes_generales_id !!}</td>
            <td>
                {!! Form::open(['route' => ['aspianteSaluds.destroy', $aspianteSalud->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aspianteSaluds.show', [$aspianteSalud->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('aspianteSaluds.edit', [$aspianteSalud->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>