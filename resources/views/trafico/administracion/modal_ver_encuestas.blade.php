{{-- {!! Form::open(array('route' => ['trafico.add_encuestas'], 'method' => 'get' , 'id'=>'loginForm', 'class'=>'form-horizontal form-label-left')) !!} --}}
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">ENCUESTA N° {{$encuesta->id}}<small> / {{$encuesta->descripcion}}</small> </h4> 
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-12">
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>MOTIVOS CATEGORIAS Y MODELOS <small></small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach($motivos as $det)
                        <div class="panel">
                          <a class="panel-heading collapsed" role="tab" id="heading{{$det->motivo->id}}" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$det->motivo->id}}" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title"> {{$det->motivo->id}} .- {{$det->motivo->descripcion}}</h4>
                          </a>
                          <div id="collapse{{$det->motivo->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                              <div class="">
                              <ul class="to_do">
                              @foreach($motivo_Categoria as $det2)
                                @if($det2->id_motivo == $det->motivo->id)
                                  <li>
                                    <p>
                                      {{$det2->categoria->id}} .- {{$det2->categoria->descripcion}} 
                                    </p>
                                    <ul>
                                      @foreach($modelos as $det3)
                                        @if($det3->id_categoria == $det2->categoria->id)
                                          <li>
                                            <p>
                                               {{$det3->descripcion}} 
                                            </p>
                                          </li>
                                        @endif
                                      @endforeach
                                    </ul>
                                  </li>
                                @endif
                              @endforeach
                              </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>SUCURSALES <small></small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="">
                        <ul class="to_do">
                          @foreach($sucursales as $det)
                          <li>
                            <p>
                              {{$det->sucursal->id}} .- {{$det->sucursal->nom_sucursal}}
                            </p>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <p>observaciones: {{$encuesta->observaciones}}</p>
  </div>
{{-- {!! Form::close()!!} --}}

<script type="text/javascript">


</script>

         