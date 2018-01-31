
  <br>
<div role="tabpanel">
    <ul class="nav nav-tabs" >
      <li ><a href="{{url('/aspiranteGenerals/$idAspGral/edit')}}"><b class="glyphicon glyphicon-pencil"> Generales</b></a></li>
      <li ><a href="{{url('/aspiranteSocioecomicos/$idSoc/edit')}}"><b class="glyphicon glyphicon-usd">Socioeconómicos</b></a>      
      <li ><a href="" ><b class="glyphicon glyphicon-picture"> Documentos</b></a></li>
      <li ><a href="{{URL::to('referenciaB',['pers'=>$folio,'cve_pago'=>'01999','fechaLimite'=>$fechaLimite,'importe'=>$importe])}}" ><b class="glyphicon glyphicon-share"> Referencia de Pago</b></a></li>
    </ul>
</div>

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
  <div class ="col-xs-12 col-md-4 sepizq">
          <center><h3 class="titulos sinp">Periodo Escolar</h3></center>
          <center>{{$desPeriodo}}</center>
  </div>

<div class="row">


<div class ="form-group col-xs-12 col-md-12 ">
    <center><h3 class="titulos sinp">Datos específicos</h3></center>
    <div class ="form-group col-xs-12 col-md-4 sinp">
    {!!Form::label('numero_ss','Numero de Seguro Social') !!}
    <center>{!! Form::label('numero_ss',$numero_ss) !!}<center>
    </div>
    <!-- Tipo Sangre Field -->
    <div class="form-group col-xs-12 col-md-4 sinp">
        {!! Form::label('tipo_sangre', 'Tipo Sangre:') !!}
        {!! Form::text('tipo_sangre', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
  <div class="form-group col-xs-12 col-md-6">
  <!-- Baston Field -->
     {!! Form::label('baston', '¿Utilizas algún aparato o protesis para realizar tus actividades?') !!}
  </div>
</div>
<div class="row">
  <div class="form-group col-xs-12 col-md-2 sinp sep">
   <label class="rad">
          {!! Form::label('baston', 'Baston') !!}
          {!! Form::checkbox('baston',true ) !!}
  </label>
  </div>
  <!-- Muletas Field -->
  <div class="form-group col-xs-12 col-md-2 sinp sep">
   <label class="rad">
          {!! Form::label('muletas', 'Muletas') !!}
          {!! Form::checkbox('muletas',true ) !!}
   </label>
   </div>
   <!-- Silla Ruedas Field -->
   <div class="form-group col-xs-12 col-md-2 sinp sep">
  <label class="rad">
          {!! Form::label('silla_ruedas', 'Silla de Ruedas') !!}
          {!! Form::checkbox('silla_ruedas',true ) !!}
  </label>
  </div>
  <div class="form-group col-xs-12 col-md-2 sinp sep">
  <!-- Calzado Especial Field -->
  <label class="rad">
          {!! Form::label('calzado_especial', 'Calzado Especial') !!}
          {!! Form::checkbox('calzado_especial',true ) !!}
  </label>
  </div>
  <div class="col-xs-12 col-md-4 form-inline sinp sep">
  <!-- Otros Field -->
      {!! Form::label('otros', 'Otros:') !!}
      {!! Form::text('otros', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row">
<div  class="col-xs-12 col-md-12">
<!-- Difi Escuchar Field -->
    {!! Form::label('difi_escuchar','¿Tiene dificultada para escuchar?') !!}<br>
     <label class="rad">
        {!! Form::label('difi_escuchar', 'Si:') !!}
        {!! Form::radio('difi_escuchar',true ) !!}
        {!! Form::label('difi_escuchar', 'No:') !!}
        {!! Form::radio('difi_escuchar',false ) !!}
    </label>
</div>
</div>
<!-- Apara Escuchar Field -->
    {!! Form::label('apara_escuchar', '¿Tienes algun aparato para escuchar?') !!}<br>
       <label class="rad">
        {!! Form::label('apara_escuchar', 'Si:') !!}
        {!! Form::radio('apara_escuchar',true ) !!}
        {!! Form::label('apara_escuchar', 'No:') !!}
        {!! Form::radio('apara_escuchar',false ) !!}
       </label><br>
<!-- Proble Ver Field -->
    {!! Form::label('proble_ver', '¿Tienes problemas para ver bien?') !!}<br>
            <label class="rad">
        {!! Form::label('proble_ver', 'Si:') !!}
        {!! Form::radio('proble_ver',true ) !!}
        {!! Form::label('proble_ver', 'No:') !!}
        {!! Form::radio('proble_ver',false ) !!}
    </label><br>
<!-- Utiliza Lentes Field -->
    {!! Form::label('utiliza_lentes', '¿Utilizas lentes (Armazon o contacto)?') !!}<br>
        <label class="rad">
        {!! Form::label('utiliza_lentes', 'Si:') !!}
        {!! Form::radio('utiliza_lentes',true ) !!}
        {!! Form::label('utiliza_lentes', 'No:') !!}
        {!! Form::radio('utiliza_lentes',false ) !!}
    </label><br>
<!-- Enfer Cronode Field -->
    {!! Form::label('enfer_cronode', '¿Padeces alguna enfermedad cronicodegenerativa (diabetes millitus,hipertension arterial sistematica, enfermedad renal cronica, otras)?') !!}<br>
        <label class="rad">
    {!! Form::label('enfer_cronode', 'Si:') !!}
    {!! Form::radio('enfer_cronode',true ) !!}
    {!! Form::label('enfer_cronode', 'No:') !!}
    {!! Form::radio('enfer_cronode',false ) !!}
    </label><br>
</div>
<!--/////////////////////////////-->
<div class="form-group col-xs-12 col-md-6 sinp">
<!-- Enfer Infec Conta Field -->
    {!! Form::label('enfer_infec_conta', '¿Tiene alguna enfermedad-contagiosa (VIH, SIDA; Tuberculosis , otras)?') !!}<br>
   <label class="rad">
        {!! Form::label('enfer_infec_conta', 'Si:') !!}
        {!! Form::radio('enfer_infec_conta',true ) !!}
        {!! Form::label('enfer_infec_conta', 'No:') !!}
        {!! Form::radio('enfer_infec_conta',false ) !!}
    </label><br>
<!-- Enfer Cance Field -->
    {!! Form::label('enfer_cance', '¿Padeces alguna enfermedad canserigena (tipo de cancer)?') !!}<br>
   <label class="rad">
        {!! Form::label('enfer_cance', 'Si:') !!}
        {!! Form::radio('enfer_cance',true ) !!}
        {!! Form::label('enfer_cance', 'No:') !!}
        {!! Form::radio('enfer_cance',false ) !!}
    </label><br>
<!-- Problema Lenguaje Field -->
    {!! Form::label('problema_lenguaje', '¿Tiene algun problema con el lenguaje?') !!}<br>
   <label class="rad">
        {!! Form::label('problema_lenguaje', 'Si:') !!}
        {!! Form::radio('problema_lenguaje',true ) !!}
        {!! Form::label('problema_lenguaje', 'No:') !!}
        {!! Form::radio('problema_lenguaje',false ) !!}
    </label><br>
<!-- Dificultad Aprender Field -->
    {!! Form::label('dificultad_aprender', '¿Tienes una dificultad Aprender?') !!}<br>
   <label class="rad">
        {!! Form::label('dificultad_aprender', 'Si:') !!}
        {!! Form::radio('dificultad_aprender',true ) !!}
        {!! Form::label('dificultad_aprender', 'No:') !!}
        {!! Form::radio('dificultad_aprender',false ) !!}
    </label><br>
<!-- Enfer Como Field -->
    {!! Form::label('enfer_como', '¿Padeces alguna enfermedad como:epilepsia,depresion,ezquisofrenia,otras?') !!}<br>
      <label class="rad">
        {!! Form::label('enfer_como', 'Si:') !!}
        {!! Form::radio('enfer_como',true ) !!}
        {!! Form::label('enfer_como', 'No:') !!}
        {!! Form::radio('enfer_como',false ) !!}
    </label><br>
<!-- Problemas Relacionarte Field -->
    {!! Form::label('problemas_relacionarte', '¿Tienes problemas para  relacionarte con otros?') !!}<br>
        <label class="rad">
        {!! Form::label('problemas_relacionarte', 'Si:') !!}
        {!! Form::radio('problemas_relacionarte',true ) !!}
        {!! Form::label('problemas_relacionarte', 'No:') !!}
        {!! Form::radio('problemas_relacionarte',false ) !!}
        </label><br>
<!-- Tienes Fobia Field -->
    {!! Form::label('tienes_fobia', '¿Tienes una fobia que te impida interactuar de alguna manera?') !!}<br>
         <label class="rad">
    {!! Form::label('tienes_fobia', 'Si:') !!}
    {!! Form::radio('tienes_fobia',true ) !!}
    {!! Form::label('tienes_fobia', 'No:') !!}
    {!! Form::radio('tienes_fobia',false ) !!}
    </label>
</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSaluds.index') !!}" class="btn btn-default">Cancel</a>
</div>
