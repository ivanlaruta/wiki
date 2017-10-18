      {!! Form::open(array('route' => ['trafico.add_motivo_encuesta'], 'method' => 'get' , 'id'=>'loginForm', 'class'=>'form-horizontal form-label-left')) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva relacion motivo - encuesta</h4>
        </div>
        <div class="modal-body">
          <p>Profavor complete la informacion del formulario.</p>
          <div class="form-group">
            
            
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">ENCUESTA 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <select class="form-control select2" data-width="100%" name="ENCUESTA" id="ENCUESTA" required >
                <option value="">Selecione una encuesta</option>
                  @foreach($encuestas as $det)
                    <option value="{{$det->id}}">{{$det->id}} - {{$det->descripcion}}</option>
                  @endforeach
                </select>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">MOTIVO 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <select class="form-control select2" data-width="100%" name="MOTIVO" id="MOTIVO" required >
                <option value="">Selecione un motivo</option>
                  @foreach($motivos as $det)
                    <option value="{{$det->id}}">{{$det->id}} - {{$det->descripcion}}</option>
                  @endforeach
                </select>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DESCRIPCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="DESCRIPCION" name="DESCRIPCION"  class="form-control col-md-7 col-xs-12" placeholder="Ingrese el nombre de la encuesta" >
              </div>
            </div>


          </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>
      {!! Form::close()!!}

<script type="text/javascript">

  $('.select2').select2();

</script>

          