<!-- Tipo Doc Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_doc_id', 'Tipo Doc Id:') !!}
    {!! Form::number('tipo_doc_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Descrpcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrpcion', 'Descrpcion:') !!}
    {!! Form::text('descrpcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('docDigitalizars.index') !!}" class="btn btn-default">Cancel</a>
</div>
