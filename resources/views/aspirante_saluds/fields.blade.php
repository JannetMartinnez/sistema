<!-- Tipo Sangre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_sangre', 'Tipo Sangre:') !!}
    {!! Form::text('tipo_sangre', null, ['class' => 'form-control']) !!}
</div>

<!-- Baston Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baston', 'Baston:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('baston', false) !!}
        {!! Form::checkbox('baston', '1', null) !!} 1
    </label>
</div>

<!-- Muletas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('muletas', 'Muletas:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('muletas', false) !!}
        {!! Form::checkbox('muletas', '1', null) !!} 1
    </label>
</div>

<!-- Silla Ruedas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('silla_ruedas', 'Silla Ruedas:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('silla_ruedas', false) !!}
        {!! Form::checkbox('silla_ruedas', '1', null) !!} 1
    </label>
</div>

<!-- Calzado Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calzado_especial', 'Calzado Especial:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('calzado_especial', false) !!}
        {!! Form::checkbox('calzado_especial', '1', null) !!} 1
    </label>
</div>

<!-- Otros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otros', 'Otros:') !!}
    {!! Form::text('otros', null, ['class' => 'form-control']) !!}
</div>

<!-- Difi Escuchar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('difi_escuchar', 'Difi Escuchar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('difi_escuchar', false) !!}
        {!! Form::checkbox('difi_escuchar', '1', null) !!} 1
    </label>
</div>

<!-- Apara Escuchar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apara_escuchar', 'Apara Escuchar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('apara_escuchar', false) !!}
        {!! Form::checkbox('apara_escuchar', '1', null) !!} 1
    </label>
</div>

<!-- Proble Ver Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proble_ver', 'Proble Ver:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('proble_ver', false) !!}
        {!! Form::checkbox('proble_ver', '1', null) !!} 1
    </label>
</div>

<!-- Utiliza Lentes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('utiliza_lentes', 'Utiliza Lentes:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('utiliza_lentes', false) !!}
        {!! Form::checkbox('utiliza_lentes', '1', null) !!} 1
    </label>
</div>

<!-- Enfer Cronode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfer_cronode', 'Enfer Cronode:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enfer_cronode', false) !!}
        {!! Form::checkbox('enfer_cronode', '1', null) !!} 1
    </label>
</div>

<!-- Enfer Infec Conta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfer_infec_conta', 'Enfer Infec Conta:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enfer_infec_conta', false) !!}
        {!! Form::checkbox('enfer_infec_conta', '1', null) !!} 1
    </label>
</div>

<!-- Enfer Cance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfer_cance', 'Enfer Cance:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enfer_cance', false) !!}
        {!! Form::checkbox('enfer_cance', '1', null) !!} 1
    </label>
</div>

<!-- Problema Lenguaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('problema_lenguaje', 'Problema Lenguaje:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('problema_lenguaje', false) !!}
        {!! Form::checkbox('problema_lenguaje', '1', null) !!} 1
    </label>
</div>

<!-- Dificultad Aprender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dificultad_aprender', 'Dificultad Aprender:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('dificultad_aprender', false) !!}
        {!! Form::checkbox('dificultad_aprender', '1', null) !!} 1
    </label>
</div>

<!-- Enfer Como Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enfer_como', 'Enfer Como:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enfer_como', false) !!}
        {!! Form::checkbox('enfer_como', '1', null) !!} 1
    </label>
</div>

<!-- Problemas Relacionarte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('problemas_relacionarte', 'Problemas Relacionarte:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('problemas_relacionarte', false) !!}
        {!! Form::checkbox('problemas_relacionarte', '1', null) !!} 1
    </label>
</div>

<!-- Tienes Fobia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tienes_fobia', 'Tienes Fobia:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tienes_fobia', false) !!}
        {!! Form::checkbox('tienes_fobia', '1', null) !!} 1
    </label>
</div>

<!-- Aspirantes Generales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_generales_id', 'Aspirantes Generales Id:') !!}
    {!! Form::number('aspirantes_generales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSaluds.index') !!}" class="btn btn-default">Cancel</a>
</div>
