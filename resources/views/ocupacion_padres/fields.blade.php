<!-- Desripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desripcion', 'Desripcion:') !!}
    {!! Form::text('desripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ocupacionPadres.index') !!}" class="btn btn-default">Cancel</a>
</div>
