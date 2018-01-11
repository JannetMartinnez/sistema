<script>
function calcular_total() {
  console.log('si cargo');
  suma_ing = 0;
  $(".ingtx").each(
    function(index, value) {
      if(isNaN(eval($(this).val())))$(this).val(0);
      suma_ing = suma_ing + eval($(this).val());
      $("#totaling").val(suma_ing);
    }
  );
  return false;
}


</script>

@if($modo=='editar')
<!--para que recuerde que esta trabajando con jquerry-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!--fin-->
<script>
$(function() {
  setTimeout(function() {
    calcular_total()
  }, 100);
});

</script>
@endif
<div class="row">
<!--FOTO DEL ASPIRANTE-->
<div class="form-group col-xs-12 col-md-2">
<center><img class="img-responsive img-circle yimg" src="{{ url('img/descarga.png') }}"></center>
</div>
<br>
<div class ="col-xs-12 col-md-2 sep">
         <center><h3 class="titulos sinp">No.Solicitud</h3></center>
         <center>{!! Form::label('curp_asp',$folio) !!}<center>      
</div>
<div class ="col-xs-12 col-md-4 sep">
        <center><h3 class="titulos sinp">Nombre del Alumno</h3></center>
        <center>{!! Form::label('curp_asp',$nombre) !!}</center>       
</div>
<div class ="col-xs-12 col-md-2 sep">
        <center><h3 class="titulos sinp">Semestre</h3></center>
        <center>{!! Form::label('curp_asp', '1') !!}</center>      
</div>
<div class ="col-xs-12 col-md-2 sepizq">
        <center><h3 class="titulos sinp">Periodo Escolar</h3></center>
        <center>{{$desPeriodo}}</center>
</div>
<div class ="col-xs-12 col-md-5 sep">
        <center><h3 class="titulos sinp">Carrera</h3></center>
        <center>{!! Form::label('curp_asp', 'TECNOLOGIAS DE LA INFORMACION Y DE LAS COMUNICACIO') !!}</center>
</div>
<div class ="col-xs-12 col-md-5 sepizq">
        <center><h3 class="titulos sinp">Especialidad</h3></center>
        <center>{!! Form::label('curp_asp','INGENIERÍA EN SISTEMAS COMPUTACIONALES') !!}</center>
</div>
</div>
<!--Nivel máximo de estudios alcanzado por tus padres aunque hayan fallecido -->
<div class="row">
<div class="form-group col-xs-12 col-sm-6 sepder">
<center><h3 class="titulos">Nivel máximo de estudios alcanzado por tus padres aunque hayan fallecido</h3></center>
       <!-- Nivel Estudios Padres Id Field -->
       <div class="form-group col-xs-12 col-sm-12 sep">
       <h3 class="titulos">Padre</h3>
       {!! Form::select('nivel_estudios_padres_id',$estudios,null,array('class'=>'form-control')) !!}      
       </div>
       <!-- Nivel Estudios Madres Id Field -->
       <div class="form-group col-xs-12 col-sm-12 sep">
       <h3 class="titulos">Madre</h3>
       {!! Form::select('nivel_estudios_madres_id',$estudios,null,array('class'=>'form-control')) !!}      
</div>
</div>

<div class="form-group col-xs-12 col-sm-2 sep">
<center><h3 class="titulos">Con quien vives actualmente</h3></center>
<!-- Quien Vives Actual Id Field -->
    {!! Form::select('quien_vives_actual_id',$quienvives,null,array('class' => 'form-control')) !!}

</div>

<!--ingesso familiares mensuales//////////////////////////////-->
<div class="form-group col-xs-12 col-sm-4 sepizq">
<center><h3 class="titulos">Ingresos Familiares Mensuales</h3></center>

<!-- Ingresos Padre Field -->
<div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_padre', 'Padre:',array('class'=>'inglb'))!!}

    {!! Form::text('ingresos_padre', null,['class' =>'form-control ingtx','onchange'=>'calcular_total()']) !!}
</div>

<!-- Ingresos Madre Field -->
<div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_madre', 'Madre:',array('class'=>'inglb')) !!}
    {!! Form::text('ingresos_madre', null, ['class' => 'form-control ingtx','onchange'=>'calcular_total()']) !!}
</div>

<!-- Ingresos Hermanos Field -->
<div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_hermanos', 'Hermanos:',array('class'=>'inglb')) !!}
    {!! Form::text('ingresos_hermanos', null, ['class' => 'form-control ingtx','onchange'=>'calcular_total()']) !!}
</div>

<!-- Ingresos Propios Field -->
<div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_propios', 'Propios:',array('class'=>'inglb')) !!}
    {!! Form::text('ingresos_propios', null, ['class' => 'form-control ingtx','onchange'=>'calcular_total()']) !!}
</div>

<!-- Ingresos Otros Field -->
<div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_otros', 'Otros:',array('class'=>'inglb')) !!}
    {!! Form::text('ingresos_otros', null,['class' => 'form-control ingtx','onchange'=>'calcular_total()']) !!}
</div>
    <!-- total -->
    <div class="form-group col-xs-12 col-sm-12 form-inline sinp1">
    {!! Form::label('ingresos_total', 'total:',array('class'=>'inglb')) !!}
    {!! Form::text('ingresos_total', null,['class' => 'form-control','id'=>'totaling']) !!}
    </div>
</div>

</div>
<!--///////////¿Cual es la ocupación o Trabajo de tus padres o tutores ?-->
<div class="col-xs-12 col-sm-6 sep">
<center><h3 class="titulos ">¿Cual es la ocupación o Trabajo de tus padres o tutores ?</h3></center>
<!-- Ocupacion Padre Id Field -->
<div class="form-group col-xs-12 col-sm-6 sep">
    {!! Form::label('ocupacion_padre_id', 'Padre') !!}
    {!! Form::select('ocupacion_padre_id',$ocupacionpadres,null,array('class' => 'form-control')) !!}
</div>

<!-- Ocupacion Madre Id Field -->
<div class="form-group col-xs-12 col-sm-6 sep">
    {!! Form::label('ocupacion_madre_id', 'Madre:') !!}
    {!! Form::select('ocupacion_madre_id',$ocupacionpadres,null,array('class' => 'form-control')) !!}
</div>
</div>
<div class="col-xs-12 col-sm-6 sep">
<center><h3 class="titulos ">.</h3></center>
<!-- De Quien Dependes Id Field -->
<div class="form-group col-xs-12 col-sm-6 sep">
    {!! Form::label('de_quien_dependes_id', 'De Quien Dependes:') !!}
    {!! Form::select('de_quien_dependes_id',$quiendependes,null,array('class' => 'form-control')) !!}
</div>

<!-- Casa Vives Id Field -->
<div class="form-group col-xs-12 col-sm-6 sep">
    {!! Form::label('casa_vives_id', 'La casa donde vives es:') !!}
    {!! Form::select('casa_vives_id',$casavives,null,array('class' => 'form-control')) !!}
</div>
</div>


<!--¿Cuántos cuartos tiene la casa. (Sin contar baños ni pasillos )//////-->

 <!-- Cuartos Personas Id Field -->
<div  class="col-xs-12 col-sm-3 sep">
   <center><h3 class="titulos ">¿Cuántos cuartos tiene la casa?</h3></center>
    {!! Form::select('cuartos_personas_id',$numerospalabras,null,array('class' => 'form-control')) !!}
</div>   


    <!-- Personas Casas Id Field -->
<div class="col-xs-12 col-sm-3 sep">
    <center><h3 class="titulos ">¿Cuántas personas viven en la casa?</h3></center>
    {!! Form::select('personas_casas_id',$numerospalabras,null,array('class' => 'form-control')) !!}
</div>

    <!-- Personas Dependen Id Field -->
<div class="form-group col-xs-12 col-sm-6 sep">
    <center><h3 class="titulos ">¿Cuantas personas incluyéndote a ti,dependen económicamente del principal?</h3></center>
    {!! Form::select('personas_dependen_id',$numerospalabras,null,array('class' => 'form-control')) !!}
</div>




<!-- Aspirantes Generales Id Field 
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_generales_id', 'Aspirantes Generales Id:') !!}
    {!! Form::number('aspirantes_generales_id', null, ['class' => 'form-control']) !!}
</div>
Estado Union Padres Id Field 
<div class="form-group col-sm-6">
    {!! Form::label('estado_union_padres_id', 'Estado Union Padres Id:') !!}
    {!! Form::select('estado_union_padres_id',$estadounion,null,array('class' => 'form-control')) !!}
</div>
-->
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSocioecomicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
