@extends('layouts.main')

@section('style')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Detalle Actividad <small> DETALLE</small></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>PAGO AFP</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <ul class="stats-overview">
                        <li>
                          <span class="name"> Plazo </span><br>
                          <span class="value text-success"> 13/12/2017 </span>
                         
                        </li>
                        <li>
                          <span class="name"> Criticidad </span><br>
                          <span class="value text-success"> Bajo </span>
                          
                        </li>
                        <li>
                          <span class="name"> Progreso </span><br>
                          <span class="value text-success">100%</span>
                        </li>
                       
                        </li>
                      </ul>
                      <br />

                      <div>
                        <h4>Actividades</h4>
                        <a data-toggle="modal" href="#myModal" class="btn btn-success btn-round pull-right "><i class="fa fa-plus"></i></a>
                        <hr>
                        <!-- end of user messages -->
                        <ul class="messages">
                          <li>
                            <img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">9</h3>
                              <p class="month">Dic</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">Actividad 2 <a class="pull-right"><i class="fa fa-pencil"></i></a></h4>
                              45% de avance
                              <blockquote class="message">Detalle y descripcion de la actividad numero 2, notas y observaciones y otros datos que correspondan a la actividad</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-user"></i> Alejandro Ballon</a>
                              </p>
                            </div>
                          </li>
                          
                          <li>
                            <img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">8</h3>
                              <p class="month">Dic</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">Actividad 1  <a class="pull-right"><i class="fa fa-pencil"></i></a></h4>
                              65% de avance
                              <blockquote class="message">Detalle y descripcion de la actividad numero 1, notas y observaciones y otros datos que correspondan a la actividad</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-user"></i> Alejandro Ballon </a>
                              </p>
                            </div>
                          </li>
                        </ul>
                        <!-- end of user messages -->
                      </div>
                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>Propuesta/ Comentario</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                          {{-- <h3 class="green"><i class="fa fa-paint-brush"></i> </h3> --}}

                          <p>Aqui se mostrara la porpuesta, comentario u observacion que se ingresa al momento de creacion de la actividad.</p>
                          <br />

                          <div class="project_detail">
                            <p class="title">Creado por:</p>
                            <p>Administrador</p>
                            <p class="title">Fecha creacion:</p>
                            <p>8/12/2017</p>
                            <p class="title">Areas:</p>
                            <span class="label label-default">ADM</span>
                            <span class="label label-default">LEGAL</span>
                              <p> </p>
                            <p class="title">Empresas:</p>
                            <span class="label label-primary">CONSARQ</span>
                            <p> </p>
                            <p class="title">Responsables:</p>
                            <p><a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Alejandro Ballon"></a></p>

                          </div>
                          <br />
                          <br />
                          <h5>Datos de actividad</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href=""><i class="fa fa-clock-o"></i> <strong>Plazo:</strong> 13/12/2017</a>
                            </li>
                            <li><a href=""><i class="fa fa-warning"></i> <strong>Criticidad:</strong> Bajo</a>
                            </li>
                            <li><a href=""><i class="fa fa-mail-forward"></i> <strong>Estado:</strong> Finalizado </a>
                            </li>
                            <li><a href=""><i class="fa fa-mail-forward"></i> <strong>Contingecia:</strong> detalle contingencia </a>
                            </li>
                          </ul>
                          <br />

                          <div class="text-center mtop20">
                            <a href="#" class="btn btn-sm btn-warning btn-block">Finalizar</a>
                          </div>
                        </div>

                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

                    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="myModal">
                    <div class="modal-dialog">
                      {!! Form::open(array('class'=>'form-horizontal form-label-left')) !!}
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Nueva actividad</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              <div class="form-horizontal form-label-left ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Titulo:</label>
                                    <input type="text" class="form-control" id="tema" name="tema" required="required" autofocus="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-horizontal form-label-left">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Descripcion:</label>
                                    <textarea class="form-control" rows="2" ></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="form-horizontal form-label-left">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <label>Progreso:</label>
                                    <input type="number" min="1" max="100" class="form-control col-md-4 col-xs-12" id="preogreso" name="preogreso" required="required">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                      {!! Form::close()!!}
                    </div>
                  </div>


                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            </div>
          </div>
</div>



@endsection

@section('scripts')
<script>
  
</script> 
@endsection