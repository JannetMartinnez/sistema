
<div class="row">
<!-- Tipo Sangre Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline">
    {!! Form::label('tipo_sangre', 'Tipo Sangre:') !!}
    {!! Form::text('tipo_sangre', null, ['class' => 'form-control']) !!}
</div>

<!-- Baston Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('baston', 'Baston:') !!}
 <label class="rad">
        {!! Form::label('baston', 'Si:') !!}
        {!! Form::radio('baston',true ) !!}
        {!! Form::label('baston', 'No:') !!}
        {!! Form::radio('baston',false ) !!} 
    </label>
</div>

<!-- Muletas Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('muletas', 'Muletas:') !!}
    <label class="rad">
        {!! Form::label('muletas', 'Si:') !!}
        {!! Form::radio('muletas',true ) !!}
        {!! Form::label('muletas', 'No:') !!}
        {!! Form::radio('muletas',false ) !!} 
    </label>
</div>

<!-- Silla Ruedas Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('silla_ruedas', 'Silla Ruedas:') !!}
    <label class="rad">
        {!! Form::label('silla_ruedas', 'Si:') !!}
        {!! Form::radio('silla_ruedas',true ) !!}
        {!! Form::label('silla_ruedas', 'No:') !!}
        {!! Form::radio('silla_ruedas',false ) !!} 
    </label>
</div>

<!-- Calzado Especial Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('calzado_especial', 'Calzado Especial:') !!}
      <label class="rad">
        {!! Form::label('calzado_especial', 'Si:') !!}
        {!! Form::radio('calzado_especial',true ) !!}
        {!! Form::label('calzado_especial', 'No:') !!}
        {!! Form::radio('calzado_especial',false ) !!} 
    </label>
</div>

<!-- Otros Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline sinp1">
    {!! Form::label('otros', 'Otros:') !!}
    {!! Form::text('otros', null, ['class' => 'form-control']) !!}
</div>

<!-- Difi Escuchar Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('difi_escuchar', 'Difi Escuchar:') !!}
     <label class="rad">
        {!! Form::label('difi_escuchar', 'Si:') !!}
        {!! Form::radio('difi_escuchar',true ) !!}
        {!! Form::label('difi_escuchar', 'No:') !!}
        {!! Form::radio('difi_escuchar',false ) !!} 
    </label>
</div>

<!-- Apara Escuchar Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('apara_escuchar', 'Apara Escuchar:') !!}
       <label class="rad">
        {!! Form::label('apara_escuchar', 'Si:') !!}
        {!! Form::radio('apara_escuchar',true ) !!}
        {!! Form::label('apara_escuchar', 'No:') !!}
        {!! Form::radio('apara_escuchar',false ) !!} 
       </label>
</div>

<!-- Proble Ver Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('proble_ver', 'Proble Ver:') !!}
            <label class="rad">
        {!! Form::label('proble_ver', 'Si:') !!}
        {!! Form::radio('proble_ver',true ) !!}
        {!! Form::label('proble_ver', 'No:') !!}
        {!! Form::radio('proble_ver',false ) !!} 
    </label>
</div>

<!-- Utiliza Lentes Field -->
<div style="clear:both" class="form-group col-xs-6 form-inline ">
    {!! Form::label('utiliza_lentes', 'Utiliza Lentes:') !!}
    <label class="rad">
        {!! Form::label('utiliza_lentes', 'Si:') !!}
        {!! Form::radio('utiliza_lentes',true ) !!}
        {!! Form::label('utiliza_lentes', 'No:') !!}
        {!! Form::radio('utiliza_lentes',false ) !!} 
    </label>
</div>

<!-- Enfer Cronode Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('enfer_cronode', 'Enfer Cronode:') !!}
        <label class="rad">
        {!! Form::label('enfer_cronode', 'Si:') !!}
        {!! Form::radio('enfer_cronode',true ) !!}
        {!! Form::label('enfer_cronode', 'No:') !!}
        {!! Form::radio('enfer_cronode',false ) !!} 
        </label>
</div>

<!-- Enfer Infec Conta Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('enfer_infec_conta', 'Enfer Infec Conta:') !!}
   <label class="rad">
        {!! Form::label('enfer_infec_conta', 'Si:') !!}
        {!! Form::radio('enfer_infec_conta',true ) !!}
        {!! Form::label('enfer_infec_conta', 'No:') !!}
        {!! Form::radio('enfer_infec_conta',false ) !!} 
    </label>
</div>

<!-- Enfer Cance Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('enfer_cance', 'Enfer Cance:') !!}
   <label class="rad">
        {!! Form::label('enfer_cance', 'Si:') !!}
        {!! Form::radio('enfer_cance',true ) !!}
        {!! Form::label('enfer_cance', 'No:') !!}
        {!! Form::radio('enfer_cance',false ) !!} 
    </label>
</div>

<!-- Problema Lenguaje Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('problema_lenguaje', 'Problema Lenguaje:') !!}
   <label class="rad">
        {!! Form::label('problema_lenguaje', 'Si:') !!}
        {!! Form::radio('problema_lenguaje',true ) !!}
        {!! Form::label('problema_lenguaje', 'No:') !!}
        {!! Form::radio('problema_lenguaje',false ) !!} 
    </label>
</div>

<!-- Dificultad Aprender Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('dificultad_aprender', 'Dificultad Aprender:') !!}
   <label class="rad">
        {!! Form::label('dificultad_aprender', 'Si:') !!}
        {!! Form::radio('dificultad_aprender',true ) !!}
        {!! Form::label('dificultad_aprender', 'No:') !!}
        {!! Form::radio('dificultad_aprender',false ) !!} 
    </label>
</div>

<!-- Enfer Como Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('enfer_como', 'Enfer Como:') !!}
      <label class="rad">
        {!! Form::label('enfer_comor', 'Si:') !!}
        {!! Form::radio('enfer_como',true ) !!}
        {!! Form::label('enfer_como', 'No:') !!}
        {!! Form::radio('enfer_como',false ) !!} 
    </label>
</div>

<!-- Problemas Relacionarte Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
{!! Form::label('problemas_relacionarte', 'Problemas Relacionarte:') !!}
    <label class="rad">
    {!! Form::label('problemas_relacionarte', 'Si:') !!}
    {!! Form::radio('problemas_relacionarte',true ) !!}
    {!! Form::label('problemas_relacionarte', 'No:') !!}
    {!! Form::radio('problemas_relacionarte',false ) !!} 
    </label>
</div>

<!-- Tienes Fobia Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline ">
    {!! Form::label('tienes_fobia', 'Tienes Fobia:') !!}
         <label class="rad">
    {!! Form::label('tienes_fobia', 'Si:') !!}
    {!! Form::radio('tienes_fobia',true ) !!}
    {!! Form::label('tienes_fobia', 'No:') !!}
    {!! Form::radio('tienes_fobia',false ) !!} 
    </label>
</div>

<!-- Aspirantes Generales Id Field -->
<div class="form-group col-xs-6 col-sm-6 form-inline sinp1">
    {!! Form::label('aspirantes_generales_id', 'Aspirantes Generales Id:') !!}
    {!! Form::number('aspirantes_generales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSaluds.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>