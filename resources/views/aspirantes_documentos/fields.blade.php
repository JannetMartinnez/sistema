


    <!-- Doc Digitalizar Id Field -->
    <div style="clear:both;" class="form-group col-sm-6">
    {!! Form::label('doc_digitalizar_id', 'Doc Digitalizar Id:') !!}
    {!! Form::select('doc_digitalizar_id',$doc_digitalizar,null, array('class'=>'form-control')) !!}      
    </div>



   <div style="clear:both;" class="form-group col-sm-6">
   <label for="file"Examinar</label>
   <input type="file" id="resume" name="file" class="form-control">
   </div>

    <!-- Aspirantes Generales Id Field -->
    
     <div  style="clear:both;" class="form-group col-sm-6">
    {!! Form::label('aspirantes_generales_id', 'Aspirantes Generales Id:') !!}
    {!! Form::number('aspirantes_generales_id', null, ['class' => 'form-control']) !!}
    </div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspirantesDocumentos.index') !!}" class="btn btn-default">Cancel</a>

</div>
<div style="clear:both;">

          <br/>
                <h3>Documentos actuales</h3>
                <table border="1">
                  <tr><th>Documento</th><th>Ver</th><th>Eliminar</th></tr>
                  @foreach ($actuales as $k=>$v)
                     <tr>
                       <td>{{$v}}</td>
                       <td>
                       <a href="{{URL::route('dos')}}">ver
                       </a>
                       </td>
                       <td><a href="{{URL::route('tres')}}">Eliminar</a></td>
                     </tr>
                  @endforeach
                </table>
          </div>

