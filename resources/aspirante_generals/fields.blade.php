<!-- Folio Solicitud Field -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(function() {
    $("#state").change(function(event){
        $.get("municipios/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#town").empty();
            for(i=0;i<response.length; i++){
                $("#town").append("<option value='"+response[i].id+"'> "+response[i].nombre_municipio+"</option>");
            }
        });
    });

    $('#busca').on('click', function (){
      console.log('hola');
    });
});
 
</script>
<p id="busca">Hola este párrafo es de ejempo</p>
Paises
{!! Form::select('paises',$paises) !!}
Entidades Federativas
 {!! Form::select('entidadesFederativas',$entidadesFederativas,null,['id'=>'state']) !!}
Municipios
 {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,['id'=>'town']) !!}

<div class="form-group col-sm-6">
    {!! Form::label('folio_solicitud', 'Folio Solicitud:') !!}
    {!! Form::number('folio_solicitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ficha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ficha', 'Ficha:') !!}
    {!! Form::number('ficha', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_aspirante', 'Apellido Paterno Aspirante:') !!}
    {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_aspirante', 'Apellido Materno Aspirante:') !!}
    {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_aspirante', 'Nombres Aspirante:') !!}
    {!! Form::text('nombres_aspirante', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Asp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento Asp:') !!}
    {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Asp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo_asp', 'Sexo Asp:') !!}
    <select class='form-control'>
        <option>Seleccione Sexo</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

</div>

<!-- Escuela Procedencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia Id:') !!}
    {!! Form::text('escuela_procedencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Promedio Bachillerato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promedio_bachillerato', 'Promedio Bachillerato:') !!}
    {!! Form::number('promedio_bachillerato', null, ['class' => 'form-control']) !!}
</div>

<!-- Anio Termino Bachillerato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anio_termino_bachillerato', 'Anio Termino Bachillerato:') !!}
    {!! Form::number('anio_termino_bachillerato', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Dom Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle_dom_actual', 'Calle Dom Actual:') !!}
    {!! Form::text('calle_dom_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_nac', 'Municipio Nac:') !!}
    {!! Form::text('municipio_nac', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_postal', 'Codigo Postal:') !!}
    {!! Form::number('codigo_postal', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Op1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera_op1_id', 'Carrera Op1 Id:') !!}
    {!! Form::number('carrera_op1_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Op2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera_op2_id', 'Carrera Op2 Id:') !!}
    {!! Form::number('carrera_op2_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Asp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad_asp', 'Nacionalidad Asp:') !!}
    {!! Form::text('nacionalidad_asp', null, ['class' => 'form-control']) !!}
</div>

<!-- Curp Asp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curp_asp', 'Curp Asp:') !!}
    {!! Form::text('curp_asp', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidad Federativa Proc Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidad_federativa_proc_id', 'Entidad Federativa Proc Id:') !!}
    {!! Form::number('entidad_federativa_proc_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Proc Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_proc_id', 'Municipio Proc Id:') !!}
    {!! Form::number('municipio_proc_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidad Federativa Dom Actual Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa Dom Actual Id:') !!}
    {!! Form::number('entidad_federativa_dom_actual_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Dom Actual Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_dom_actual_id', 'Municipio Dom Actual Id:') !!}
    {!! Form::number('municipio_dom_actual_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Postal Dom Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_postal_dom_actual', 'Codigo Postal Dom Actual:') !!}
    {!! Form::number('codigo_postal_dom_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Colonia Dom Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('colonia_dom_actual', 'Colonia Dom Actual:') !!}
    {!! Form::text('colonia_dom_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Elect Dom Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo_elect_dom_actual', 'Correo Elect Dom Actual:') !!}
    {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Fijo Dom Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_fijo_dom_actual', 'Telefono Fijo Dom Actual:') !!}
    {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Cel Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_cel_aspirante', 'Telefono Cel Aspirante:') !!}
    {!! Form::text('telefono_cel_aspirante', null, ['class' => 'form-control']) !!}
</div>

<!-- Zona Proc Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zona_proc_aspirante', 'Zona Proc Aspirante:') !!}
    {!! Form::number('zona_proc_aspirante', null, ['class' => 'form-control']) !!}
</div>

<!-- Oportunidades Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oportunidades_aspirante', 'Oportunidades Aspirante:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('oportunidades_aspirante', false) !!}
        {!! Form::checkbox('oportunidades_aspirante', '1', null) !!} 1
    </label>
</div>

<!-- Nombres Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_padre', 'Nombres Padre:') !!}
    {!! Form::text('nombres_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_padre', 'Apellido Paterno Padre:') !!}
    {!! Form::text('apellido_paterno_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_padre', 'Apellido Materno Padre:') !!}
    {!! Form::text('apellido_materno_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Vive Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vive_padre', 'Vive Padre:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vive_padre', false) !!}
        {!! Form::checkbox('vive_padre', '1', null) !!} 1
    </label>
</div>

<!-- Nombres Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_madre', 'Nombres Madre:') !!}
    {!! Form::text('nombres_madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_madre', 'Apellido Paterno Madre:') !!}
    {!! Form::text('apellido_paterno_madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_madre', 'Apellido Materno Madre:') !!}
    {!! Form::text('apellido_materno_madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Vive Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vive_madre', 'Vive Madre:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vive_madre', false) !!}
        {!! Form::checkbox('vive_madre', '1', null) !!} 1
    </label>
</div>

<!-- Nombres Tutor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_tutor', 'Nombres Tutor:') !!}
    {!! Form::text('nombres_tutor', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Tutor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_tutor', 'Apellido Paterno Tutor:') !!}
    {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Tutor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_tutor', 'Apellido Materno Tutor:') !!}
    {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::number('usuario_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancel</a>
</div>
