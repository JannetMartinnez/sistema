<table class="table table-responsive" id="aspirantesDocumentos-table">
    <thead>
        <th>Aspirantes Generales Id</th>
        <th>Doc Digitalizar Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($aspirantesDocumentos as $aspirantesDocumentos)
        <tr>
            <td>{!! $aspirantesDocumentos->aspirantes_generales_id !!}</td>
            <td>{!! $aspirantesDocumentos->doc_digitalizar_id !!}</td>
            <td>
                {!! Form::open(['route' => ['aspirantesDocumentos.destroy', $aspirantesDocumentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('aspirantesDocumentos.show', [$aspirantesDocumentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('aspirantesDocumentos.edit', [$aspirantesDocumentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>