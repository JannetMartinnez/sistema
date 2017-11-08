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
<div class="row encAl">
 <div class= "col-xs-12 col-md-2 encAl">    
 <div class="container-fluid continer2 encAl"> 
<img class="img-responsive img-" src="{{url('img/img94joktmu76583.jpg')}}">
<a href=""><caption><center><h6 <i class="fa fa-camera" aria-hidden="true"</i>Cambiar Imagen</h6></center></caption></a>
    
        </div>

      </div>
             <div class="col-xs-12 col-md-10 encAl">

        <!-- Apellido Paterno Aspirante Field  nombres y datos   -->


        <center><h3 class="titulos">Datos del aspirante</h3></center>

    
<!-- CAMPO DEL ASPIRANTE-->
        <div  class="form-group col-sm-3 encAl">
           <center> {!! Form::label('apellido_paterno_aspirante', 'Nombre del Aspirante') !!}</center>
        </div>
        <div  class="form-group col-sm-3 encAl">
            {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}
        </div>
        <!-- Apellido Materno Aspirante Field -->
        <div  class="form-group col-sm-3 encAl">
            {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}
        </div>
        <!-- Nombres Aspirante Field -->
        <div class="form-group col-sm-3 encAl">   
            {!! Form::text('nombres_aspirante', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>

        <div class="row encAl">
        <!-- Fecha Nacimiento Asp Field -->
        <div class="form-group col-sm-4 ">
            <center>{!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento') !!}</center>
            {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Sexo Asp Field -->
        <div class="form-group col-sm-4 ">
        <center>{!! Form::label('sexo_asp', 'Sexo') !!}</center>
        <select class='form-control'>
        <option>Seleccione Sexo</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        </select>
        </div>
    

        <!-- Curp Asp Field -->
        <div class="form-group col-sm-4 ">
        <center>{!! Form::label('curp_asp', 'Curp') !!}</center>
        {!! Form::text('curp_asp', null, ['class' => 'form-control']) !!}
        </div>
         </div>

</div>
        <!--  Asp estado civil  %%%%Field -->
        <div class="form-group col-sm-4">
        <center>{!! Form::label('estado_civil', 'Estado Civil') !!}</center>
        <select class='form-control'>
        <option>Selecciona el estado civil</option>
        <option value="S">Soltero(a)</option>
        <option value="C">Casado(a)</option>
        <option value="D">Divorciado(a)</option>
        <option value="v">viudo(a)</option>
        </select>
        </div>

         <!-- Correo Elect Dom Actual Field -->
        <div class="form-group col-sm-4">
        <center> {!! Form::label('correo_elect_dom_actual', 'Correo Electronico') !!}</center>
        {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ejemplo@hotmail.com']) !!}
        </div>
        <!-- %%Telefono Fijo Dom Actual Field -->
        <div class="form-group col-sm-4">
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
        {!! Form::text('numero_s_s', null, ['class' => 'form-control']) !!}
        </div>

        <!-- pais-->
        <div class="form-group col-sm-2">
        <center> {!! Form::label('pais', 'Pais' )!!} </center>
        {!! Form::select('paises',$paises,null,array('class'=>'form-control')) !!}
        </div>

       
        <!--Entidades Federativas-->
        <div class="form-group col-sm-3">
        <center> {!! Form::label('entidad_federativa','Estado de Nacimiento')!!}</center>
         {!! Form::select('entidadesFederativas',$entidadesFederativas,null,array('class'=>'form-control', 'id'=>'state')) !!}
        </div>
         <!--Municipios-->
        <div class="form-group col-sm-2">
         <center>{!! Form::label('municipio','Municipio')!!}</center>
         {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,array('class'=>'form-control','id'=>'town')) !!}
        </div>

        <!--CAMPO DE CARRERAS-->

        <!-- Carrera Op1 Id Field -->
          <div class="form-gropup col-sm-12"> 
                <center><h3 class="titulos">Carreras en Orden de Preferencia</h3></center>
<div class="form-group col-sm-6">
   <center> {!! Form::label('carrera_op1_id', 'Opción 1:') !!}</center>
    {!! Form::select('carrera_op1_id', $carreraOfertada) !!}
</div>

<!-- Carrera Op2 Id Field -->
<div class="form-group col-sm-6">
   <center> {!! Form::label('carrera_op2_id', 'Opción 2:') !!}</center>
    {!! Form::select('carrera_op2_id', $carreraOfertada) !!}
</div>

</div>

<!--PREPARATORIA DE PROCEDENCIA-->

<!-- Entidad Federativa Proc Id Field -->
   <div class="form-gropup col-sm-12"> 
        <center><h3 class="titulos">Preparatoria de Procedencia</h3></center>
<div class="form-group col-sm-3">
        <center> {!! Form::label('entidad_federativa','Estado de Nacimiento')!!}</center>
         {!! Form::select('entidadesFederativas',$entidadesFederativas,null,array('class'=>'form-control', 'id'=>'state')) !!}
        </div>
<!-- Municipio Dom Actual Id Field -->
<div class="form-group col-sm-2">
         <center>{!! Form::label('municipio','Municipio')!!}</center>
         {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,array('class'=>'form-control','id'=>'town')) !!}
        </div>


<!-- Escuela Procedencia Id Field -->
<div class="form-group col-sm-5">
   <center> {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia Id:') !!}
    {!! Form::text('escuela_procedencia_id', null, ['class' => 'form-control']) !!}
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
         <div class="form-gropup col-sm-8">
         {!! Form::text('apellido_paterno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_padre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>
         <!-- Vive Padre Field -->
        <class="form-group col-sm-2">
        {!! Form::label('vive_padre', 'Vive') !!}<br>
        <label class="checkbox-inline">
         <input type="checkbox" id="cbox1" value="second_checkbox"> <label for="cbox2">Si</label><br>
         <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>
         </label>


        
         </div>
         <!--datos de la madre-->
         <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos" >Datos de la madre</h3></center>
            <div class="form-gropup col-sm-8">
         {!! Form::text('apellido_paterno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_madre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
        </div>
               <!-- Vive Madre Field -->
        <class="form-group col-sm-2">
        {!! Form::label('vive_madre', 'Vive ') !!}<br>
        <label class="checkbox-inline">
   
        <input type="checkbox" id="cbox1" value="second_checkbox"> <label for="cbox2">Si</label><br>
         <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>
        </label>


     

         </div>
         <!--datos del tutor-->
         <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos"  >Datos del tutor</h3></center>
            <div class="form-gropup col-sm-8">
         {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_tutor', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}<br>
        </div>
                      <!-- Vive Tutor Field -->
        <class="form-group col-sm-2">
        {!! Form::label('vive_tutor', 'Vive ') !!}<br>
         <label class="checkbox-inline">
         <input type="checkbox" id="cbox1" value="second_checkbox"> <label for="cbox2">Si</label><br>
         <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>
         </label>

         

         </div>
        
         <div class="form-gropup col-sm-12">
         <center><h3 class="titulos"  >Domicilio Actual</h3></center>
         </div>



        <!-- Calle Dom Actual Field -->
        <div class="form-group col-sm-3">
        <center>{!! Form::label('calle_dom_actual', 'Calle Dom Actual:') !!}</center>
        {!! Form::text('calle_dom_actual', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Codigo Postal Dom Actual Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('codigo_postal_dom_actual', 'Codigo Postal Dom Actual:') !!}
        {!! Form::number('codigo_postal_dom_actual', null, ['class' => 'form-control']) !!}
        </div>



          <!-- Entidad Federativa Dom Actual Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa Dom Actual Id:') !!}
    {!! Form::select('entidadesFederativas',$entidadesFederativas,null,array('class'=>'form-control', 'id'=>'state')) !!}
</div>

        <!-- Municipio Proc Id Field -->
        <div class="form-group col-sm-3">
        <center>{!! Form::label('municipio_proc_id', 'Municipio de Procedencia') !!}</center>
        {!! Form::number('municipio_proc_id', null, ['class' => 'form-control']) !!}
        </div>


     
        <!-- Colonia Dom Actual Field -->
        <div class="form-group col-sm-2">
        <center>{!! Form::label('colonia_dom_actual', 'Colonia Dom Actual:') !!}</center>
        {!! Form::text('colonia_dom_actual', null, ['class' => 'form-control']) !!}
        </div>

          <!-- Correo Elect Dom Actual Field -->
        <div class="form-group col-sm-3">
        <center> {!! Form::label('correo_elect_dom_actual', 'Correo Electronico') !!}</center>
        {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ejemplo@hotmail.com']) !!}
        </div>


<!-- Telefono Cel Aspirante Field -->
<div class="form-group col-sm-3">
    <center>{!! Form::label('telefono_cel_aspirante', 'Telefono Cel Aspirante:') !!}</center>
    {!! Form::text('telefono_cel_aspirante', null, ['class' => 'form-control']) !!}
</div>


<!-- Zona Proc Aspirante Field -->
<div class="form-group col-sm-4">
    {!! Form::label('zona_proc_aspirante', 'Zona Proc Aspirante:') !!}
    {!! Form::number('zona_proc_aspirante', null, ['class' => 'form-control']) !!}
</div>

        <!-- Submit Field -->
        <div   class="form-group col-sm-12 ">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('aspiranteGenerals.index') !!}" class=" btn btn-default">Cancel</a>
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
