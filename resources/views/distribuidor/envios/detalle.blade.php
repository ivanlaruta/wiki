@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h2>
               
                    <a href="{{ route('envios.index')}}">SOLICITUDES  / </a>
                    <small>SOLICITUD {{$env->id_solicitud}} </small>

                </h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Buscar</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <div class="x_title">
                    <h2>
                    
                    Datos generales de solicitud
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content " style="display: none;" >
                    <!-- Smart Wizard -->   
                      <div>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">FECHA CREACION</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                      
                            {!! Form::text('fecha_creacion', $env->fecha_creacion,['class'=> 'form-control', 'readonly'])!!}
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ORIGEN</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                             {!! Form::text('origen', $env->origen,['class'=> 'form-control', 'readonly'])!!}
                            
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">DESTINO</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               {!! Form::text('destino',$env->destino,['class'=>'form-control','readonly'])!!}
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">TIPO</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            
                              {!! Form::text('tipo',$env->tipo,['class'=>'form-control ','readonly'])!!}

                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">OBSERVACIONES</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {!! Form::text('observaciones', $env->observaciones,['class'=> 'form-control','readonly'])!!}
                            </div>
                          </div>      
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              {{-- LISTA --}}   
        
              <div class="row">
                
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <div class="x_title">
                    <h2>Detalle</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- Smart Wizard -->
                      <div>
                       
                       <p class="text-muted font-13 m-b-30"></p>

                     <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th>Master</th>
                          <th>Año</th> 
                          <th>Exterior</th>
                          <th>Interior</th>
                          <th>Cant Solicitada</th>
                          @if($env->estado > '2') 
                          <th>Cant Aprobada </th> 
                          <th>Cant Enviada</th>
                          <th>Cant entregada</th>
                          @endif
                          <th>Opciones</th> 
                        </tr>
                      </thead>
                        
                      <tbody>
                        @foreach($det as $dets)
                        <tr>
                        <td>{{ $dets -> id_detalle}}</td>
                        <td>{{ $dets -> marca -> MARCA}}</td>
                        <td>{{ $dets -> modelo -> MODELO}}</td>
                        <td>{{ $dets -> master -> MASTER}}</td>
                        <td>{{ $dets -> anio }}</td>
                        <td>{{ $dets -> col_ext }}</td>
                        <td>{{ $dets -> col_int }}</td>
                        <td>{{ $dets -> cantidad}}</td>
                        @if($env->estado > '2')
                        <td>{{ $dets -> cantidad_aprobada}}</td>
                        <td>{{ $dets -> cantidad_enviada}}</td>
                        <td>{{ $dets -> cantidad_entregada}}</td>
                        @endif
                        <td align="center">
                        <div class="btn-group">
                         
                          <a href="{{ route('envios.detalle_all',['id'=>$env->id_solicitud,'id2'=>$dets -> id_detalle ] )}}" class="btn btn-success btn-round btn-xs" data-toggle="tooltip" data-placement="bottom" title="Ver unidades reservadas" ><i class="fa fa-car"></i></a> 
                       
                        </div>
                       
                        </td>
                        @endforeach
                       
                      </tbody>
                    </table>
                       @if($env->estado >= '2')
                      </div>
                      <hr>
                      <div class="col-md-12">
                      <a href="{{ route('envios.detalle_all',['id'=>$env->id_solicitud,'id2'=>'0' ])}}">
                        <div class="panel-footer">
                            <span class="pull-left">Ver todas las unidades reservadas por esta solicitud</span>
                            <span class="pull-right"><i class="fa fa-car"></i></span>

                            <div class="clearfix"></div>
                        </div>
                      </a>
                      </div>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
              
              </div>

              {{-- fin LISTA --}}
              
              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <div class="x_content">
                      <div>

                        

                       
                        <div class="form-group">
                        <div class="col-md-12">
                          <div class="btn-group btn-group-justified">
                          <a href="{{ route('envios.index')}}" class=" btn btn-primary btn-round ">PAGINA ANTERIOR</a>
                          @if($env->estado < '5' )
                            
                            <a href="{{ route('envios.envio_parcial',$env)}}" class="btn btn-warning btn-round">ENVIO PARCIAL AUTOMATICO </a>

                            <a href="" class="btn btn-info btn-round" >ENVIO PARCIAL MANUAL</a>

                            @if($env->estado == '3' )

                            <a href="" class="btn btn-success btn-round" data-toggle="modal" data-target=".bs-example-modal" >ENVIAR TODO</a>

                           @endif
                            
                          @endif
                           @if($env->estado >= '4' )
                            <a href="{{ route('envios.envios_lista',$env->id_solicitud)}}" class="btn btn-info btn-round" >VER ENVIOS DE SOLICITUD</a>
                            @endif
                          </div>  
                                               
                        </div>
                        </div>
                        

<div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
    {{--   {!! Form::open(array('route' => ['envios.guardar_parcial'], 'method' => 'get' , 'id'=>'loginForm')) !!} --}}

<input id="id" name="id" type="hidden" value="{{$id}}">

<div class="modal-body">

  <div class=" row">
    <div class="col-md-12">
      
     <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-6" >Fecha estimada de arribo: </label>
            <div class="col-md-6">
              <input type="text" name = "f_env" class="form-control has-feedback-left" id="f_env" aria-describedby="inputSuccess2Status2">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status2" class="sr-only">(success)</span>
            </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class=" row">
    <div class="col-md-12">
      
      <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-6" >Responsable de envio </label>
            <div class="col-md-6">
              <select class="form-control" data-width="100%" name="resp" id="resp" required >
                <option value="">Selecione un responsable</option>
                  @foreach($resp as $emps)
                    <option value="{{$emps->id}}">{{$emps->paterno}} {{$emps->nombre}}</option>
                  @endforeach
              </select>

              </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-6" >transportadora: </label>
            <div class="col-md-6">
              {!! Form::select('transp',$trans,null,['class'=>'form-control','placeholder'=>'seleccione transportadora','required'])!!}
            </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class=" row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-6" >Placa:</label>
            <div class="col-md-6">
              {!! Form::text('placa',null,['class'=> 'form-control','placeholder'=>'Placa tranpostador','required'])!!}
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-6" >Conductor: </label>
            <div class="col-md-6">

              <select class="form-control" data-width="100%" name="conductor" id="conductor" required >
                <option value="">Selecione un conductor</option>
                  @foreach($cond as $co)
                    <option value="{{$co->id}}">{{$co->paterno}} {{$co->nombre}}</option>
                  @endforeach
              </select>
            </div>
        </div>
      </div>
    </div>
  </div>
<br>
  <div class=" row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label col-md-3" >Observaciones:</label>
            <div class="col-md-9">
              {!! Form::text('observaciones',null,['class'=> 'form-control','placeholder'=>'Observaciones (Opcional)'])!!}
            </div>
        </div>
    </div>
  </div>

</div>


<div class="modal-footer">
<div class="btn-group " role="group" aria-label="Basic">
  <a href="#" class=" btn btn-default btn-round" data-dismiss="modal">Cerrar</a>

  <button type="submit" class="btn btn-success btn-round">Enviar</button>
  
</div>


</div>

{{-- {!! Form::close()!!}
 --}}
    </div>
  </div>
</div>
  
                      </div>
                      <hr>
                      <br>
                    </div>
                  </div>
                </div>
              </div>

                </div>
              </div>
            </div>


            </div>
          </div>
        
@endsection

@section('scripts')
 <!-- bootstrap-daterangepicker -->
    <script src="{{asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
   

   
<script type="text/javascript">

  var eta = $("#f_env");

  eta.daterangepicker({
    singleDatePicker:true,
    minDate: moment(),
    locale: {
            format: 'YYYY-MM-DD'
        }
  });

</script>

@endsection

