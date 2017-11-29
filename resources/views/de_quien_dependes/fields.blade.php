<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Update At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('update_at', 'Update At:') !!}
    {!! Form::date('update_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Create At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('create_at', 'Create At:') !!}
    {!! Form::date('create_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('deQuienDependes.index') !!}" class="btn btn-default">Cancel</a>
</div>
