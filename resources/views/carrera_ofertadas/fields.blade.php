<!-- Carreras Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carreras_id', 'Carrera:') !!}
 	{!! Form::select('carreras_id',$carreras,null,['class' => 'form-control']) !!}   
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Feha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feha_fin', 'Feha Fin:') !!}
    {!! Form::date('feha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('carreraOfertadas.index') !!}" class="btn btn-default">Cancel</a>
</div>
