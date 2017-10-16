<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Alfa2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alfa2', 'Alfa2:') !!}
    {!! Form::text('alfa2', null, ['class' => 'form-control']) !!}
</div>

<!-- Abrev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abrev', 'Abrev:') !!}
    {!! Form::text('abrev', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pais.index') !!}" class="btn btn-default">Cancel</a>
</div>
