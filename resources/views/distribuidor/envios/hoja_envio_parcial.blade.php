@extends('layouts.main')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
               
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <div class="x_title">
                    <h2>
                    
                   <a href="{{ route('envios.detalle',$id)}}">SOLICITUD {{$id}} / </a>HOJA DE ENVIO PARCIAL /
                    <small>Datos generales</small>
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
                    <h2>ENVIO DE UNIDADES <small>Asignacion de solicitudes parciales.</small></h2>
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
                        <tr >
                          <th>#</th>
                          <th>Marca</th>
                          <th>Modelo</th>
                          <th>Master</th>
                          <th>Año</th> 
                          <th>Exterior</th>
                          <th>Interior</th>
                          <th>Cantidad aprobada</th>
                          <th>Cantidad enviada</th>
                          <th>Restante</th>
                          <th>Cantidad a enviar</th>
                          <th></th>
                          
                        </tr>
                      </thead>
                        
                      <tbody>
                      <?php $a = 0; ?>
                        @foreach($det as $dets)
                        <?php $a=$a+$dets -> cantidad_a_enviar ?>
                        @if($dets->sin_env > 0)
                        <tr>
                        <td>{{ $dets -> id_detalle}}</td>
                        <td>{{ $dets -> marca -> MARCA}}</td>
                        <td>{{ $dets -> modelo -> MODELO}}</td>
                        <td>{{ $dets -> master -> MASTER}}</td>
                        <td>{{ $dets -> anio }}</td>
                        <td>{{ $dets -> col_ext }}</td>
                        <td>{{ $dets -> col_int }}</td>
                        <td class="text-primary">{{ $dets -> cantidad_aprobada}}</td>
                        <td class="text-success">{{ $dets -> cantidad_enviada}}</td>
                        <td class="text-danger">{{ $dets -> sin_env}}</td>
                        <td class="text-info">{{ $dets -> cantidad_a_enviar}}</td>

                        {{-- <td><a href="{{ route('envios.modal_parcial',['id'=>$id,'id2'=>$dets -> id_detalle ] )}}"  class=" btn btn-danger btn-round btn-xs btnEnviar animated shake" title="Generar envio parcial"><i class="fa fa-sign-out"></i></a></td> --}}

                        <td><a href="#" class=" btn btn-danger btn-round btn-xs btnEnviar animated shake" id_detalle = '{{ $dets -> id_detalle}}' id = '{{$id}}' data-toggle="tooltip" data-placement="bottom" title="Generar envio parcial"><i class="fa fa-sign-out"></i></a></td>
                        
                        @endif                       
                        @endforeach
    
                      </tbody>
                    </table>

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content modal-content1">
                         
                            </div>
                          </div>
                        </div>
                  </div>
                      
                    
                      </div>
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
                         
                            <a href="{{ route('envios.index')}}" class= "btn btn-warning btn-round "  >DESCARTAR</a>
                           <a href="" @if($a>0) class="btn btn-success btn-round" @else class="btn btn-success btn-round disabled" @endif  data-toggle="modal" data-target=".bs-example-modal" >CONSOLIDAR ENVIO</a>
                            
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

<div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      {!! Form::open(array('route' => ['envios.guardar_parcial'], 'method' => 'get' , 'id'=>'loginForm')) !!}

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

{!! Form::close()!!}

    </div>
  </div>
</div>
              </div>
            </div>


            </div>
          </div>
        
@endsection

@section('scripts')
<script type="text/javascript">

var btnEnviar = $(".btnEnviar");
btnEnviar.on("click",function(){
  // alert($(this).attr('id'));
  frm_parcial($(this));
});

var modalContent = $(".modal-content1");
var modal=$(".bs-example-modal-sm");

var frm_parcial = function(objeto){ 
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('envios.modal_parcial')}}",
    data: {
      id: objeto.attr("id"),
      id_detalle: objeto.attr("id_detalle")
    },
    // beforeSend: function(xhr)
    // {
    //   NProgress.start();
    // },
    success: function(dataResult)
    {
      console.log(dataResult);
      modalContent.empty().html(dataResult);                        
      modal.modal('show');

      NProgress.done();
    },
    error: function(jqXHR, exception)
    {
      var msg = '';
      if (jqXHR.status === 0) {
          msg = 'Not connect.\n Verify Network.';
      } else if (jqXHR.status == 404) {
          msg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
          msg = 'Internal Server Error [500].';
      } else if (exception === 'parsererror') {
          msg = 'Requested JSON parse failed.';
      } else if (exception === 'timeout') {
          msg = 'Time out error.';
      } else if (exception === 'abort') {
          msg = 'Ajax request aborted.';
      } else {
          msg = 'Uncaught Error.\n' + jqXHR.responseText;
      }

      alert(msg);
      NProgress.done();
    }
  });
}

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

