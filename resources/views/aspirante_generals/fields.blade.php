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

});
 
</script>
<script>
$(function() {
    $("#state_da").change(function(event){
        $.get("municipios/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#town_da").empty();
            for(i=0;i<response.length; i++){
                $("#town_da").append("<option value='"+response[i].id+"'> "+response[i].nombre_municipio+"</option>");
            }
        });
    });
});
 
</script>
<script>
$(function() {
    $("#state_p").change(function(event){
        $.get("prepas/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#prepas_p").empty();
            for(i=0;i<response.length; i++){
                $("#prepas_p").append("<option value='"+response[i].id+"'> "+response[i].nombre_preparatoria+"</option>");
            }
        });
    });
});

</script>

<!--Separadorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->

<br>
<div class="row">
    <div class="col-md-10">

        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentacion" class="active"><a href="#seccion1" aria-controls="seccion1" 
                    data-toggle="tab" role="tab">Datos Generales</a></li>

                       <li role="presentacion"><a href="#seccion2" aria-controls="seccion2" 
                    data-toggle="tab" role="tab">Datos Socieconomicos</a></li>

                       <li role="presentacion" ><a href="#seccion3" aria-controls="seccion3" 
                    data-toggle="tab" role="tab">Datos de Salud</a></li>

                       <li role="presentacion" ><a href="#seccion4" aria-controls="seccion4" 
                    data-toggle="tab" role="tab">Documentos</a></li>

                  
                </ul>
                </div>
</div>
</div>

                <div class="tab-content">
                    <!--Datos Genrales-->
                <div role="tabpanel" class="tab-pane active" id="seccion1"><br>


                        <!--datos generales-->

<div class="row encAl ">
 <div class= "col-xs-12 col-md-2 encAl ">    
 <div class="container-fluid continer2 encAl"> 
<img class="img-responsive img- fimag" src="{{url('img/img94joktmu76583.jpg')}}">
<a href=""><caption><center><h6 <i class="fa fa-camera" aria-hidden="true"</i>Cambiar Imagen</h6></center></caption></a>
    
        </div>

      </div>
             <div class="col-xs-12 col-md-10 encAl">

        <!-- Apellido Paterno Aspirante Field  nombres y datos   -->


        <center><h3 class="titulos">Datos del aspirante</h3></center>

    
<!-- CAMPO DEL ASPIRANTE-->
       <center> <div   class= align="right" "form-group col-sm-3 encAl" ></center>
         <center> {!! Form::label('apellido_paterno_aspirante', 'Nombre del Aspirante') !!}</center>
        </div><br>
        <div  class="form-group col-sm-3 encAl">
            {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}
        </div>
        <!-- Apellido Materno Aspirante Field -->
        <div  class="form-group col-sm-3 encAl">
            {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}
        </div>
        <!-- Nombres Aspirante Field -->
        <div   class="form-group col-sm-3 encAl">   
            {!! Form::text('nombres_aspirante', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>

        <div class="row encAl">
        <!-- Fecha Nacimiento Asp Field -->
        <div class="form-group col-sm-3 ">
            <center>{!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento') !!}</center>
                   {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Sexo Asp Field -->
        <div class="form-group col-sm-3 ">
        <center>{!! Form::label('sexo_asp', 'Sexo') !!}</center>
        <select class='form-control'>
        <option>Seleccione Sexo</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        </select>
        </div>
    

        <!-- Curp Asp Field -->
        <div class="form-group col-sm-3 ">
        <center>{!! Form::label('curp_asp', 'Curp') !!}</center>
        {!! Form::text('curp_asp', null, ['class' => 'form-control']) !!}
        </div>
         </div>

</div>
        <!--  Asp estado civil  %%%%Field -->
        <div class="form-group col-sm-3">
        <center>{!! Form::label('estado_civil', 'Estado Civil') !!}</center>
        <select class='form-control'>
        <option>Seleciona</option>
        <option value="S">Soltero(a)</option>
        <option value="C">Casado(a)</option>
        <option value="D">Divorciado(a)</option>
        <option value="v">Viudo(a)</option>
        <option value="S">Separado(a)</option>
        <option value="U">Union libre</option>
        </select>
        </div>

         <!-- Correo Elect Dom Actual Field -->
        <div class="form-group col-sm-3">
        <center> {!! Form::label('correo_elect_dom_actual', 'Correo Electronico') !!}</center>
        {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ejemplo@hotmail.com']) !!}
        </div>
        <!-- %%Telefono Fijo Dom Actual Field -->
        <div class="form-group col-sm-2">
        <center> {!! Form::label('telefono_fijo', 'Teléfono') !!}</center>
        {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Fijo']) !!}
        </div>
        <!-- %%Telefono Movil Dom Actual Field -->
        <div class="form-group col-sm-2">
        <center>{!! Form::label('movil', 'Celular') !!}</center>
        {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Movil']) !!}<br>
        </div>
        <!-- Numero del seguro social fields%%%%-->
        <div class="form-group col-sm-2 ">
        <center>{!! Form::label('numero_s_s', 'N.S.S') !!}</center>
        {!! Form::text('numero_s_s', null, ['class' => 'form-control','placeholder'=>'Numero de Seguro']) !!}
        </div>

        <!-- pais-->
        <div style="clear:both;" class="form-group col-sm-3">
        <center> {!! Form::label('pais', 'Pais' )!!} </center>
        {!! Form::select('paises',$paises,null,array('class'=>'form-control')) !!}
        </div>

       

<!--Entidades Federativas-->
        <div class="form-group  col-sm-4">
         {!! Form::label('entidad_federativa','Entidad Federativa:')!!}<br>
         {!! Form::select('entidadesFederativas',$entidadesFederativas,null,array('class'=>'form-control', 'id'=>'state')) !!}
        </div>
<!--Municipios-->
        <div class="form-group col-sm-4">
         {!! Form::label('municipio','Municipio:')!!}<br>
         {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,array('class'=>'form-control','id'=>'town')) !!}
        </div>




         <div class="form-gropup col-sm-12">
         <h3 class="titulos">Domicilio Actual</h3>
       
</div>
 <div class="form-gropup col-sm-2">
       <!-- Calle Dom Actual Field -->
        {!! Form::label('calle_dom_actual', 'numero exterior y/o interior') !!}
        {!! Form::text('calle_dom_actual', null, ['class' => 'form-control']) !!}
         </div>
     
           <!-- Colonia Dom Actual Field -->
        <div class="form-group col-sm-3">
        <center>{!! Form::label('colonia_dom_actual', 'Colonia Dom Actual:') !!}</center><br>
        {!! Form::text('colonia_dom_actual', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Codigo Postal Dom Actual Field -->
        <div   class="form-group col-sm-2">
        {!! Form::label('codigo_postal_dom_actual', 'Codigo Postal Dom Actual:') !!}
        {!! Form::number('codigo_postal_dom_actual', null, ['class' => 'form-control']) !!}
        </div>

<!-- Zona Proc Aspirante Field -->
<div class="form-group col-sm-3"><br>
   <center> {!! Form::label('zona_proc_aspirante', 'Zona Proc Aspirante:') !!}</center>
     <select class='form-control'>
        <option>Selecciona tu Zona</option>
        <option value="R">Rural</option>
        <option value="U">Urbano</option>
        </select>
        
</div>


          <!-- Entidad Federativa Dom Actual Id Field -->

        <div style="clear:both;" class="form-group  col-sm-4">
           {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa:') !!}
        {!! Form::select('entidad_federativa_dom_actual_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_da')) !!}
        </div>
<!--Municipios  Dom Actual -->
        <div class="form-group col-sm-4">
{!! Form::label('municipio_dom_actual_id', 'Municipio:') !!}         
         {!! Form::select('municipio_dom_actual_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'town_da')) !!}

        </div>



        <!--CAMPO DE CARRERAS-->

        <!-- Carrera Op1 Id Field -->
<div class="col-sm-12">
<h3 class="titulos">Carreras en Orden de Preferencia</h3>
<!--Carrera Op1 Id Field--> 
<div class="form-group col-sm-6 form-inline">
    {!! Form::label('carrera_op1_id', 'Carrera Op1 Id:') !!}
    {!! Form::select('carrera_op1_id',$carr) !!}
</div>
<!--Carrera Op2 Id Field-->
<div class="form-group col-sm-6 form-inline">
    {!! Form::label('carrera_op2_id', 'Carrera Op2 Id:') !!}
    {!! Form::select('carrera_op2_id',$carr)!!}
</div>
</div>


<!--PREPARATORIA DE PROCEDENCIA-->

<!-- Entidad Federativa Proc Id Field -->
   <div class="form-gropup col-sm-12"> 
        <center><h3 class="titulos">Preparatoria de Procedencia</h3></center>
<div class="form-group col-sm-3">
     {!! Form::label('entidad_federativa_proc_id', 'Entidad Federativa Proc Id:') !!}
   
  {!! Form::select('entidad_federativa_proc_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_p','state_da')) !!}   
        </div>

<!-- Municipio Dom Actual Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('municipio_dom_actual_id', 'Municipio:') !!}         
         {!! Form::select('municipio_dom_actual_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'town_da')) !!}

        </div>


<!-- Escuela Procedencia Id Field -->
<div class="form-group col-sm-5">
    {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia Id:') !!}
    
    {!! Form::select('escuela_procedencia_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'prepas_p')) !!} 
</div>

<!-- Año Termino Bachillerato Field -->
<div class="form-group col-sm-6">
    <center> {!! Form::label('anio_termino_bachillerato', 'Año De Egreso:') !!}</center>
    {!! Form::number('anio_termino_bachillerato', null, ['class' => 'form-control']) !!}
</div>
<!-- Promedio Bachillerato Field -->
<div class="form-group col-sm-6">
  <center>  {!! Form::label('promedio_bachillerato', 'Promedio Bachillerato:') !!}</center>
    {!! Form::number('promedio_bachillerato', null, ['class' => 'form-control']) !!}
</div>



</div>
<!--DATOS DEL PADRE-->
        <!--datos del padre-->
        <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos" >Datos del padre</h3></center>
         <div class="form-gropup col-sm-12">
         {!! Form::text('apellido_paterno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_padre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>
         

         <!-- Vive Padre Field -->
      <div class="form-group col-sm-12 ">
        {!! Form::label('vive_padre', 'Vive Padre') !!}<br>
        <label class="rad form-inline">
            {!! Form::label('vive_padre', 'Sí') !!}
                  {!! Form::radio('vive_padre', 'true') !!}
                        {!! Form::label('vive_padre', 'No') !!}
                              {!! Form::radio('vive_padre', 'false') !!}
         
</label>
</div>
        
         </div>
      <!--DATOS DEL MADRE-->
        <!--datos del madre-->
        <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos" >Datos del padre</h3></center>
         <div class="form-gropup col-sm-12">
         {!! Form::text('apellido_paterno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_madre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>
         

         <!-- Vive Padre Field -->
      <div class="form-group col-sm-12 ">
        {!! Form::label('vive_madre', 'Vive Madre') !!}<br>
        <label class="rad form-inline">
            {!! Form::label('vive_padre', 'Sí') !!}
                  {!! Form::radio('vive_madre', 'true') !!}
                        {!! Form::label('vive_madre', 'No') !!}
                              {!! Form::radio('vive_madre', 'false') !!}
         
</label>
</div>
        
         </div>
     
  <!--DATOS DEL TUTOR-->
        <!--datos del tutor-->
        <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos" >Datos del Tutor</h3></center>
         <div class="form-gropup col-sm-12">
         {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_tutor', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>
         

         <!-- Vive Padre Field -->
      <div class="form-group col-sm-12 ">
        {!! Form::label('vive_tutor', 'Vive Tutor') !!}<br>
        <label class="rad form-inline">
            {!! Form::label('vive_tutor', 'Sí') !!}
                  {!! Form::radio('vive_tutor', 'true') !!}
                        {!! Form::label('vive_tutor', 'No') !!}
                              {!! Form::radio('vive_tutor', 'false') !!}
         
</label>
</div>
        
         </div>
        <!-- Submit Field -->
        <div  class="form-group col-sm-12 ">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('aspiranteGenerals.index') !!}" class=" btn btn-default">Cancel</a>
        </div>

</div>  


<!--Separadorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
<!--Datos Socieconomicos-->  
    <div role="tabpanel" class="tab-pane" id="seccion2">
<!--Datos de la Escuela-->
           <div class=" col-sm-12"> 
        <center><h3 class="titulos">Preparatoria de Procedencia</h3></center>
<!--Entidad Federativa Proc Id Field-->
<div class="form-group col-sm-6">
      {!! Form::label('entidad_federativa_proc_id', 'Entidad Federativa Proc Id:') !!}
   
  {!! Form::select('entidad_federativa_proc_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_p')) !!}   
        </div>
<!--Escuela Procedencia Id Field-->
<div class="form-group col-sm-6">
    {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia Id:') !!}
    
    {!! Form::select('escuela_procedencia_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'prepas_p')) !!} 


</div>


<!--tipo de bachillerato-->
<!--Modalidad Asp Field-->
<div class="form-group col-sm-4">
<center><h3 class="titulos">Tipo de Bachillerato</h3></center>
   <!-- {!! Form::text('modalidad', null, ['class' => 'form-control']) !!}-->
        <select class='form-control'>
        <option>Seleccione</option>
        <option value="u">1 años</option>
        <option value="d">2 años</option>
        <option value="t">3 años</option>
        <option value="a">Abierta</option>
        </select>
</div>

<!--Añio Termino Bachillerato Field-->
<div class="form-group col-sm-4 ">
    <center><h3 class="titulos">Fecha de Egreso</h3></center>
    {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}
        </div>

<!--Promedio Bachillerato Field--> 
<div class="form-group col-sm-4">
<center><h3 class="titulos">Promedio General</h3></center>
    <!--{!! Form::label('promedio_bachillerato', 'Promedio Bachillerato:') !!}-->
    {!! Form::number('promedio_bachillerato', null, ['class' => 'form-control']) !!}
</div>
     <!-- Cuentas Con Beca -->
        <div class="form-group col-sm-3">
        {!! Form::label('Cuenta_Beca', 'Cuentas con Beca') !!}<br>
       <label class="rad">
          {!! Form::label('Cuenta_Beca','Si:') !!}
          {!! Form::radio('Cuenta_Beca',true) !!}
          {!! Form::label('Cuenta_Beca','No:') !!}
          {!! Form::radio('Cuenta_Beca',false) !!}
          </label>
     </div>

            <!-- Tu Familia Pertenece al Programa Oportunidades -->
        <div class="form-group col-sm-9 form-inline">
        {!! Form::label('Programa_Oportunidades', '¿Tu Familia Cuenta Con El Programa Oportunidades?') !!}<br>
         <label class="rad">
          {!! Form::label('Programa_Oportunidades','Si:') !!}
          {!! Form::radio('Programa_Oportunidades',true) !!}
          {!! Form::label('Programa_Oportunidades','No:') !!}
          {!! Form::radio('Programa_Oportunidades',false) !!}
          </label>
         </label>
     </div>

<!-- Quien Te la Otorgo -->
<div class="form-group col-sm-4">
  <center>  {!! Form::label('otorgada', '¿Quien te la Otorgo?') !!}</center>
    {!! Form::number('otorgada', null, ['class' => 'form-control']) !!}
</div>



    
        <div class="col-sm-12 "> 
                <center><h3 class= "titulos" >Carreras en Orden de Preferencia</h3></center>
            <div class="form-group col-sm-4 form-inline">
                        {!! Form::label('carrera_op1_id', 'Opción 1:') !!}
                        {!! Form::select('carrera_op1_id', $carr) !!}
            </div>

            <!-- Carrera Op2 Id Field -->
            <div class="form-group col-sm-4 form-inline ">
                        {!! Form::label('carrera_op2_id', 'Opción 2:') !!}
                        {!! Form::select('carrera_op2_id', $carr) !!}

            </div>
        </div>
         <!-- Submit Field -->
        <div   class="form-group col-sm-12 ">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('aspiranteGenerals.index') !!}" class=" btn btn-default">Cancel</a>
        </div>
</div>
</div>
<!--Separadorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
<!--Datos de Salud-->
 <div role="tabpanel" class="tab-pane" id="seccion3">
<h3>sammy</h3>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!--Separadorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->
<!--Documentos-->
 <div role="tabpanel" class="tab-pane" id="seccion4">
<h3>jesus</h3>
</div>
<!--Separadorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr-->


<!--Cierre del Programa con Div-->
</div>










        <!-- recordar
        Paises
        {!! Form::select('paises',$paises) !!}
        Entidades Federativas
         {!! Form::select('entidadesFederativas',$entidadesFederativas,null,['id'=>'state']) !!}
           
     
         recordar
        Municipios
         {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,['id'=>'town']) !!}
-->

</hr>
      
<input id="invisible_id" name="invisible" type="hidden" value="secret">

<div class="form-group col-sm-6">
    {!! Form::hidden('folio_solicitud', 'Folio Solicitud:') !!}
    {!! Form::hidden('folio_solicitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('periodo', 'Periodo:') !!}
    {!! Form::hidden('periodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ficha Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('ficha', 'Ficha:') !!}
    {!! Form::hidden('ficha', null, ['class' => 'form-control']) !!}
</div>







<!-- Modalidad Asp Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('modalidad', 'Modalidad:') !!}
    {!! Form::hidden('modalidad', null, ['class' => 'form-control']) !!}
</div>







<!-- Oportunidades Aspirante Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('oportunidades_aspirante', 'Oportunidades Aspirante:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('oportunidades_aspirante', false) !!}
        {!! Form::hidden('oportunidades_aspirante', '1', null) !!} <!--1-->
    </label>
</div>



<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('usuario_id', 'Usuario Id:') !!}
    {!! Form::hidden('usuario_id', null, ['class' => 'form-control']) !!}
</div>

 <!-- Nacionalidad Asp Field -->
        <div class="form-group col-sm-2">
{!! Form::hidden('nacionalidad_asp', 'Nacionalidad ') !!}
        {!! Form::hidden('nacionalidad_asp', null, ['class' => 'form-control']) !!}
        </div>

         <!-- Correo Elect Dom Actual Field -->
        <div class="form-group col-sm-3">
        <center> {!! Form::hidden('correo_elect_dom_actual', 'Correo Electronico') !!}</center>
        {!! Form::hidden('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ejemplo@hotmail.com']) !!}
        </div>
        <!-- %%Telefono Fijo Dom Actual Field -->
        <div class="form-group col-sm-2">
        <center> {!! Form::hidden('telefono_fijo', 'Teléfono') !!}</center>
        {!! Form::hidden('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Fijo']) !!}
        </div>
