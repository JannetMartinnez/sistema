<table class="table table-responsive" id="aspiranteSaluds-table">
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
    @foreach($aspiranteSaluds as $aspiranteSalud)
        <tr>
            <td>{!! $aspiranteSalud->tipo_sangre !!}</td>
            <td>{!! $aspiranteSalud->baston !!}</td>
            <td>{!! $aspiranteSalud->muletas !!}</td>
            <td>{!! $aspiranteSalud->silla_ruedas !!}</td>
            <td>{!! $aspiranteSalud->calzado_especial !!}</td>
            <td>{!! $aspiranteSalud->otros !!}</td>
            <td>{!! $aspiranteSalud->difi_escuchar !!}</td>
            <td>{!! $aspiranteSalud->apara_escuchar !!}</td>
            <td>{!! $aspiranteSalud->proble_ver !!}</td>
            <td>{!! $aspiranteSalud->utiliza_lentes !!}</td>
            <td>{!! $aspiranteSalud->enfer_cronode !!}</td>
            <td>{!! $aspiranteSalud->enfer_infec_conta !!}</td>
            <td>{!! $aspiranteSalud->enfer_cance !!}</td>
            <td>{!! $aspiranteSalud->problema_lenguaje !!}</td>
            <td>{!! $aspiranteSalud->dificultad_aprender !!}</td>
            <td>{!! $aspiranteSalud->enfer_como !!}</td>
            <td>{!! $aspiranteSalud->problemas_relacionarte !!}</td>
            <td>{!! $aspiranteSalud->tienes_fobia !!}</td>
            <td>{!! $aspiranteSalud->aspirantes_generales_id !!}</td>
            <td>
                {!! Form::open(['route' => ['aspiranteSaluds.destroy', $aspiranteSalud->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aspiranteSaluds.show', [$aspiranteSalud->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('aspiranteSaluds.edit', [$aspiranteSalud->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>