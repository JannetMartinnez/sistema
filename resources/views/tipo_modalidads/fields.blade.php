<!-- Modalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modalidad', 'Modalidad:') !!}
    {!! Form::text('modalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoModalidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
