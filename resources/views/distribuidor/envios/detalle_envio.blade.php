@extends('layouts.main')

@section('content')

<div class="right_col" role="main">
  <div class=""> 
    <div class="page-title">
      <div class="title_left">
        <h3>COD ENVIO: {{$envio->id_envio}} / <small>DERIVADO DE LA SOLICITUD N° {{$envio->id_solicitud}}</small></h3>
      </div>
    </div>
            
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel ">
      <div class="x_title">
        <h2>
        DATOS GENERALES DEL ENVIO 
        </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content " >
        <!-- Smart Wizard -->   
          <div>
            <form class="form-horizontal form-label-left">
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Fecha envio: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',date('d-m-Y',strtotime($envio->fecha_envio)),['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Fecha est. arribo: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',date('d-m-Y',strtotime($envio->fecha_estimada_arribo)),['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Fecha aprobacion: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',date('d-m-Y',strtotime($solicitud->fecha_aprobado)),['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Origen: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->origen,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Destino: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->destino,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Responsable: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->responsable1->nombre .' '.$envio->responsable1->paterno ,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
              </div> 

              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Transportadora: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->transportadora1->nombre,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Conductor: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->conductor1->nombre .' '.$envio->conductor1->paterno,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label col-md-6">Placa: </label>
                    <div class="col-md-6">
                      {!!Form::text('env',$envio->placa,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                
               
                  <div class="form-group">
                    <label class="control-label col-md-2">Observaciones: </label>
                    <div class="col-md-10 ">
                      {!!Form::text('obs',$envio->observaciones,['class'=> 'form-control', 'readonly'])!!}
                    </div>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel ">
      <div class="x_title">
        <h2>
        UNIDADES
        </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content ">
        <!-- Smart Wizard -->   
          <div>
            <form class="form-horizontal form-label-left">
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>MARCA</th>
                          <th>MODELO</th>
                          <th>MASTER</th>
                          <th>AÑO</th>
                          <th>COLOR EXTERIOR</th>
                          <th>COLOR INTERIOR</th>
                          <th>CHASSIS</th>
                          <th>SALIDA Cod_Barras</th>
                          {{-- <th>LLEGADA CB</th> --}}
                        </tr>
                      </thead>
                        
                      <tbody>
                        @foreach($unidades as $uni)
                        <tr> 
                          <td>{{ $uni -> ITEM }}</td>
                          <td>{{ $uni -> vehiculo22 -> MARCA  }}</td>
                          <td>{{ $uni -> vehiculo22 -> COD_MODELO }} -- {{ $uni -> vehiculo22 -> MODELO  }}</td>
                          <td>{{ $uni -> vehiculo22 -> COD_MASTER }} -- {{ $uni -> vehiculo22 -> MASTER  }}</td>
                          <td>{{ $uni -> vehiculo22 -> ANIO_MOD }}</td>
                          <td>{{ $uni -> vehiculo22 -> COLOR_EXTERNO  }}</td>
                          <td>{{ $uni -> vehiculo22 -> COLOR_INTERNO  }}</td>
                          <td>{{ $uni -> chassis }}</td>
                          <td>
                            @if($uni -> salida_cb == 1) 
                              <span class="glyphicon glyphicon-ok" style="color:#45ac34;"></span>
                            @else
                              <span class="glyphicon glyphicon-remove" style="color:#bd1d1d;"></span>
                            @endif
                          </td>
                          {{-- <td>
                            @if($uni -> llegada_cb == 1)
                              <span class="glyphicon glyphicon-ok" style="color:#45ac34;"></span>
                            @else
                              <span class="glyphicon glyphicon-remove" style="color:#bd1d1d;"></span>
                            @endif
                          </td> --}}
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel ">
      <div class="x_title">
        <h2>
        LISTA RESUMEN
        </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content ">
        <div>
          <form class="form-horizontal">
            <div class="form-group">
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>MARCA</th>
                          <th>MODELO</th>
                          <th>MASTER</th>
                          <th>AÑO</th>
                          <th>COLOR EXTERIOR</th>
                          <th>CANTIDAD</th>
                        </tr>
                      </thead>
                        
                      <tbody>
                        @foreach($resumen as $res)
                        @if ($res -> cantidad <> 0)
                        <tr> 
                          <td>{{$res->marca->MARCA}}</td>
                          <td>{{$res->cod_modelo}} -- {{ $res -> modelo -> MODELO}}</td>
                          <td>{{$res->cod_master}} -- {{ $res -> master -> MASTER}}</td>
                          <td>{{$res -> anio }}</td>
                          <td>{{$res -> col_ext }}</td>
                          <td>{{$res -> cantidad}}</td>
                          
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
            <hr style="color: #bd1d1d;background-color: #bd1d1d;height: 2px;">
            
            <div class="col-md-11 text-right text-danger">
             TOTAL UNIDADES:
            </div>
            <div class="col-md-1 text-danger">
              {{$total}}
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel ">
      <div class="x_content">
        <div class="col-md-12">
          <div class="btn-group btn-group-justified">
            <a href="#" class=" btn btn-primary btn-round">PAGINA ANTERIOR</a>
            <a href="{{ route('envios.detalle',$envio->id_solicitud)}}" class="btn btn-warning btn-round">VER LA SOLICITUD DE ORIGEN </a> 
            <a target="_blank" href="{{ route('envios.getPDF',$idd)}}" class="btn btn-success btn-round">IMPRIMIR </a> 
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
              
@endsection

@section('scripts')
<script>

$(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});

    $(document).ready(function() {
         //alert('1');
        $('#datatable1').DataTable({
          
             "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }

        },
            responsive: true

        });
    });

</script> 
@endsection
