      {!! Form::open(array('route' => ['trafico.add_encuestas'], 'method' => 'get' , 'id'=>'loginForm', 'class'=>'form-horizontal form-label-left')) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva Encuesta</h4>
        </div>
        <div class="modal-body">
          <p>Profavor complete la informacion del formulario.</p>
          <div class="form-group">
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DESCRIPCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="DESCRIPCION" name="DESCRIPCION" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ingrese el nombre de la encuesta" >
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">SUCURSAL 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">

                <select class="form-control select2" data-width="100%" name="SUCURSAL" id="SUCURSAL" required >
                <option value="">Selecione una sucursal</option>
                  @foreach($sucursales as $suc)
                    <option value="{{$suc->id}}">{{$suc->id}} - {{$suc->nom_sucursal}}</option>
                  @endforeach
                </select>

              </div>
            </div>
          </div>
          <hr>
          <p>Profavor los motivos asociados a la encuesta.</p>

                      <div class="">
                        <ul class="to_do">
                         @foreach($motivos as $mo)
                          <li>
                            <p>
                              <input type="checkbox" class="flat" value="{{$mo->id}}" name="motivos_lista[]">  {{$mo->id}} - {{$mo->descripcion}} 
                            </p>
                          </li>
                         @endforeach
                        </ul>
                      </div>
                    
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>
      {!! Form::close()!!}

<script type="text/javascript">

  $('.select2').select2();

</script>

          