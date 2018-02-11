
<br>
<div role="tabpanel">
    <ul class="nav nav-tabs" >
      <li ><a href="{{route('aspiranteGenerals.edit',['aspiranteGeneral'=>$idAspGral])}}" class="{{$captura_generales?'valido':'invalido'}}"><b class="glyphicon glyphicon-lock ">Generales</b></a></li>
      <li ><a href="{{route('aspiranteSocioecomicos.edit',['aspiranteSocioecomico'=>$idSoc])}}" class="{{$captura_socioeco?'valido':'invalido'}}"><b class="glyphicon glyphicon-usd ">Socioeconómicos</b></a>
      <li ><a href="" class="{{false?'valido':'invalido'}}"><b class="glyphicon glyphicon-picture"> Documentos</b></a></li>
      @if ($captura_salud and $captura_socioeco and  $captura_salud )
        <li ><a href="{{URL::to('referenciaB',['pers'=>$folio,'cve_pago'=>'01999','fechaLimite'=>$fechaLimite,'importe'=>$importe])}}" class="valido" ><b class="glyphicon glyphicon-share"> Referencia de Pago</b></a></li>
      @endif
    </ul>
</div>
    <!--FOTO DEL ASPIRANTE-->
<div class="form-group col-xs-12 col-md-2">
  <center><img class="img-responsive img-circle yimg" src="{{ url('img/descarga.png') }}"></center>
</div>

<br>
<div class ="col-xs-12 col-md-4 sep">
  <center><h3 class="titulos sinp">No.Seguro Social</h3></center>
  <center>{!! Form::label('numero_ss',$numero_ss) !!}<center>
</div>



<div class ="col-xs-12 col-md-6 sepizq">
  <center><h3 class="titulos sinp">Periodo Escolar</h3></center>
  <center>{!! Form::label('desPeriodo',$desPeriodo) !!}</center>
</div>

<div class ="row col-xs-12 col-md-12 sep">
  <center><h3 class="titulos sinp">Nombre del Alumno</h3></center>
  <center>{!! Form::label('curp_asp',$nombre) !!}</center>
  <br>
</div>


<div class="row">

  <div class ="row form-group col-xs-12 col-md-12 ">
    <center><h3 class="titulos sinp">Datos específicos</h3></center>
    <div class="form-group col-xs-12 col-md-4 sinp">
        {!! Form::label('tipo_sangre', 'Tipo Sangre:') !!}
        {{ Form::text('tipo_sangre', null, ['class' => 'form-control']) }}
    </div>
  </div>


  <div class="form-group col-xs-12 col-md-12 ">
    {!! Form::label('AparatoProtesis', '¿Utilizas algún aparato o protesis para realizar tus actividades?') !!}
  </div>
  <div  class="rad">
    <div class="row col-xs-12">
       <div class="form-group col-xs-12 col-md-2 sinp sep">
         <div class="rad">
           {!! Form::label('baston', 'Baston') !!}
           {{Form::hidden('baston',false)}}
           {!! Form::checkbox('baston',true)!!}
         </div>
      </div>

      <div class="form-group col-xs-12 col-md-2 sinp sep">
        <div class="rad">
          {!! Form::label('muletas', 'Muletas') !!}
          {{Form::hidden('muletas',false)}}
          {!! Form::checkbox('muletas', true) !!}
        </div>
      </div>

      <div class="form-group col-xs-12 col-md-3 sinp sep ">
        <div class="rad">
          {!! Form::label('silla_ruedas', 'Silla de ruedas') !!}
          {{Form::hidden('silla_ruedas',false)}}
          {!! Form::checkbox('silla_ruedas',true) !!}
        </div>
      </div>

      <div class="form-group col-xs-12 col-md-5 sinp sep ">
        <div class="rad">
          {!! Form::label('calzado_especial', 'Calzado especial') !!}
          {{Form::hidden('calzado_especial',false)}}
          {!! Form::checkbox('calzado_especial',true ) !!}
        </div>
      </div>

      <div class="form-group col-xs-12 col-md-12 form-inline sinp sep ">
        <div class="rad">
          {!! Form::label('otros', 'Otros:') !!}
          {!! Form::text('otros', null, ['class' => 'form-control']) !!}
        </div>
      </div>
    </div>
  </div>


<div  class="form-group col-xs-12 col-md-12">
    {!! Form::label('difi_escuchar','¿Tiene dificultada para escuchar?') !!}
     <div class="rad">
        {!! Form::label('difi_escuchar', 'Si:') !!}
        {!! Form::radio('difi_escuchar',1) !!}
        {!! Form::label('difi_escuchar', 'No:') !!}
        {!! Form::radio('difi_escuchar',0) !!}
    </div>
</div>

  <div  class="form-group col-xs-12 col-md-12">
    {!! Form::label('apara_escuchar', '¿Tienes algun aparato para escuchar?') !!}
    <div class="rad">
        {!! Form::label('apara_escuchar', 'Si:') !!}
        {!! Form::radio('apara_escuchar',1) !!}
        {!! Form::label('apara_escuchar', 'No:') !!}
        {!! Form::radio('apara_escuchar',0) !!}
      </div>
  </div>

<div  class="form-group col-xs-12 col-md-12">
    {!! Form::label('proble_ver', '¿Tienes problemas para ver bien?') !!}
        <div class="rad">
          {!! Form::label('proble_ver', 'Si:') !!}
          {!! Form::radio('proble_ver',1) !!}
          {!! Form::label('proble_ver', 'No:') !!}
          {!! Form::radio('proble_ver',0) !!}
        </div>
  </div>

  <div  class="form-group col-xs-12 col-md-12">
    {!! Form::label('utiliza_lentes', '¿Utilizas lentes (Armazon o contacto)?') !!}
    <div class="rad">
      {!! Form::label('utiliza_lentes', 'Si:') !!}
      {!! Form::radio('utiliza_lentes',1) !!}
      {!! Form::label('utiliza_lentes', 'No:') !!}
      {!! Form::radio('utiliza_lentes',0) !!}
    </div>
  </div>

  <div  class="form-group col-xs-12 col-md-12">
    {!! Form::label('enfer_cronode', '¿Padeces alguna enfermedad cronicodegenerativa (diabetes millitus,hipertension arterial sistematica, enfermedad renal cronica, otras)?') !!}<br>
    <div class="rad">
      {!! Form::label('enfer_cronode', 'Si:') !!}
      {!! Form::radio('enfer_cronode',1) !!}
      {!! Form::label('enfer_cronode', 'No:') !!}
      {!! Form::radio('enfer_cronode',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('enfer_infec_conta', '¿Tiene alguna enfermedad-contagiosa (VIH, SIDA, Tuberculosis , otras)?') !!}<br>
    <div class="rad">
      {!! Form::label('enfer_infec_conta', 'Si:') !!}
      {!! Form::radio('enfer_infec_conta',1) !!}
      {!! Form::label('enfer_infec_conta', 'No:') !!}
      {!! Form::radio('enfer_infec_conta',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('enfer_cance', '¿Padeces alguna enfermedad canserigena (tipo de cancer)?') !!}<br>
    <div class="rad">
      {!! Form::label('enfer_cance', 'Si:') !!}
      {!! Form::radio('enfer_cance',1) !!}
      {!! Form::label('enfer_cance', 'No:') !!}
      {!! Form::radio('enfer_cance',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('problema_lenguaje', '¿Tiene algun problema con el lenguaje?') !!}<br>
    <div class="rad">
      {!! Form::label('problema_lenguaje', 'Si:') !!}
      {!! Form::radio('problema_lenguaje',1) !!}
      {!! Form::label('problema_lenguaje', 'No:') !!}
      {!! Form::radio('problema_lenguaje',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('dificultad_aprender', '¿Tienes una dificultad Aprender?') !!}<br>
    <div class="rad">
      {!! Form::label('dificultad_aprender', 'Si:') !!}
      {!! Form::radio('dificultad_aprender',1) !!}
      {!! Form::label('dificultad_aprender', 'No:') !!}
      {!! Form::radio('dificultad_aprender',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('enfer_como', '¿Padeces alguna enfermedad como:epilepsia,depresion,ezquisofrenia,otras?') !!}<br>
    <div class="rad">
      {!! Form::label('enfer_como', 'Si:') !!}
      {!! Form::radio('enfer_como',1) !!}
      {!! Form::label('enfer_como', 'No:') !!}
      {!! Form::radio('enfer_como',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('problemas_relacionarte', '¿Tienes problemas para  relacionarte con otros?') !!}<br>
    <div class="rad">
      {!! Form::label('problemas_relacionarte', 'Si:') !!}
      {!! Form::radio('problemas_relacionarte',1) !!}
      {!! Form::label('problemas_relacionarte', 'No:') !!}
      {!! Form::radio('problemas_relacionarte',0) !!}
    </div>
  </div>

  <div class="form-group col-xs-12 col-md-12">
    {!! Form::label('tienes_fobia', '¿Tienes una fobia que te impida interactuar de alguna manera?') !!}<br>
    <div class="rad">
      {!! Form::label('tienes_fobia', 'Si:') !!}
      {!! Form::radio('tienes_fobia',1 ) !!}
      {!! Form::label('tienes_fobia', 'No:') !!}
      {!! Form::radio('tienes_fobia',0 ) !!}
    </div>
  </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteSaluds.index') !!}" class="btn btn-default">Cancelar</a>
</div>
