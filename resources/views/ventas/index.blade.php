@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title_left">
                <h3>REPORTE DE VENTAS /  <small>(FACTURADOS)  <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>

            {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Toyota
                      </label>
                    </div>
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Yamaha
                      </label>
                    </div>
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Lexus
                      </label>
                    </div>
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Dahiatsu
                      </label>
                    </div>
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Volvo
                      </label>
                    </div>
                    <div class=" col-md-2">
                      <label>
                        <input type="checkbox" class="js-switch" checked /> Hino
                      </label>
                    </div>
                  </div>
                </div>
              </div> --}}
                  
                <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Hoy</span>
                        <div class="count red" align="center">{{$dia}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$hoy,'f_fin'=>$hoy,'title'=>'Diarias','vista'=>'1','origen'=>'index'])}}">{{$hoy->format('d/m/Y')}} </a></span>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Esta semana</span>
                        <div class="count" align="center">{{$esta_sema}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'De la semana','vista'=>'1','origen'=>'index'])}}">Desde el {{$inicio_sem->format('d/m/Y')}} </a></span>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Ultimos<i class="red">15 </i>dias</span>
                        <div class="count "  align="center">{{$ult_15d}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'Ultimos 15 dias','vista'=>'1','origen'=>'index'])}}">Desde el {{$ult_15->format('d/m/Y')}} </a></span>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Este mes</span>
                        <div class="count" align="center">{{$este_mes}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$inicio_mes,'f_fin'=>$hoy,'title'=>'Del mes','vista'=>'1','origen'=>'index'])}}">Desde el {{$inicio_mes->format('d/m/Y')}} </a></span>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top" align="center"><i class="fa fa-clock-o"></i> Mes pasado</span>
                        <div class="count">{{$anterior_mes }}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$inicio_mes_ant,'f_fin'=>$fin_mes_ant,'title'=>'Del mes anterior','vista'=>'1','origen'=>'index'])}}">Del 01 al {{date('d/m/Y',strtotime($fin_mes_ant))}}</a></span>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Este año</span>
                        <div class="count green" align="center">{{$este_año}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('ventas.detalle_fecha',['f_ini'=>$inicio_año,'f_fin'=>$hoy,'title'=>'Del año','vista'=>'1','origen'=>'index'])}}">Desde el {{$inicio_año->format('d/m/Y')}} </a></span>
                      </div>
                      
                    </div>
                  </div>
                </div>

              
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>POR MES<small>{{$año_actual}}</small></h2>
                         
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>MES</th>
                                  <th style="text-align: right;">VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_mes as $mes)
                                
                                <tr class='clickable-row' data-href="{{ route('ventas.por_mes',$mes-> MES )}}" >                
                                  <td> 
                                  @if ($mes-> MES == 1) ENERO @endif
                                  @if ($mes-> MES == 2) FEBRERO @endif
                                  @if ($mes-> MES == 3) MARZO @endif
                                  @if ($mes-> MES == 4) ABRIL @endif
                                  @if ($mes-> MES == 5) MAYO @endif
                                  @if ($mes-> MES == 6) JUNIO @endif
                                  @if ($mes-> MES == 7) JULIO @endif
                                  @if ($mes-> MES == 8) AGOSTO @endif
                                  @if ($mes-> MES == 9) SEPTIEMBRE @endif
                                  @if ($mes-> MES == 10) OCTUBRE @endif
                                  @if ($mes-> MES == 11) NOVIEMBRE @endif
                                  @if ($mes-> MES == 12) DICIEMBRE @endif
                               
                                  </td>
                                  <td align="right">{{ $mes-> VENTAS }}</td>
                                                                    
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>                        
                        </div>
                      </div>
                      </div>
                      

                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>POR REGIONAL<small>{{$año_actual}}</small></h2>
                         
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>REGIONAL</th>
                                  <th style="text-align: right;">VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_reg as $reg)
                                <tr class='clickable-reg' data-href="{{ route('ventas.por_regional',$reg-> REGIONAL )}}" >                
                                  <td> @if( is_null($reg-> REGIONAL)) Sin Dato @else {{ $reg-> REGIONAL }} @endif</td>
                                  <td align="right">{{ $reg-> VENTAS }}</td>
                                                                    
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>                        
                        </div>

                        </div>
                      </div>



                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>POR MARCA<small>{{$año_actual}}</small></h2>
                         
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>MARCA</th>
                                  <th style="text-align: right;">VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_marca as $mar)
                                <tr class='clickable-marca' data-href="{{ route('ventas.por_marca',$mar-> MARCA )}}" >            
                                  <td>  {{ $mar-> MARCA }} </td>
                                  <td align="right">{{ $mar-> VENTAS }}</td>
                                                                    
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
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

<script type="text/javascript">

$(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});

$(document).ready(function($) {
    $(".clickable-reg").click(function() {
        window.location = $(this).data("href");
    });
});

$(document).ready(function($) {
    $(".clickable-marca").click(function() {
        window.location = $(this).data("href");
    });
});

</script>
@endsection