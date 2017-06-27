@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title">
                <h3><a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a><small><i class="red">{{$desc_mes}} - {{$año_actual}} </i> <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>
              <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Ventas del mes </span>
                        <div class="count green " align="center">{{$ventas_mes}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-bar-chart"></i> </i> <a href="#">Total {{$desc_mes}}</a></span>
                      </div>

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Ventas mes anterior </span>
                        <div class="count " align="center">{{$ventas_mes_anterior}}</div>
                        <span class="count_bottom"><i class="red"><i class="fa fa-bar-chart"></i> </i> <a href="#">Total {{$desc_mes_ant}} </a></span>
                      </div>

                       <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Promedio ventas/mes</span>
                        <div class="count "  align="center">{{$promedio}}</div>
                        <span class="count_bottom"><i class="blue"><i class="fa fa-line-chart"></i> </i> <a href="#">Promedio por mes {{$año_actual}} </a></span>
                      </div>
            
                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Dif. mes anterior</span>
                        <div 
                          @if($dif_mes_anterior<0) class="count red" 
                          @else class="count green"
                          @endif
                          align="center">@if($dif_mes_anterior>0) +@endif{{$dif_mes_anterior}}</div>
                        
                         <span class="count_bottom">
                         @if($dif_mes_anterior<0)<i class="red"><i class="fa fa-sort-desc"></i>Menos ventas </i> 
                         @else <i class="green"><i class="fa fa-sort-asc"></i>Mas ventas </i> @endif
                        <a href="#"></a></span>
                      </div>

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Dif. al promedio</span>
                        <div 
                         @if($dif_prom<0) class="count red"
                          @else class="count green"
                          @endif
                           align="center">@if($dif_prom>0) +@endif{{$dif_prom}}</div>
                        <span class="count_bottom">
                         @if($dif_prom<0)<i class="red"><i class="fa fa-sort-desc"></i>Debajo del prom </i> 
                         @else <i class="green"><i class="fa fa-sort-asc"></i>Encima del prom </i> @endif
                        <a href="#"></a></span>
                      </div>

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                       
                      </div>
                     
                      
                     
                      
                    </div>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="row">                     

                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>VENTAS {{$desc_mes}}<small>POR DIA</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>DIA</th>
                                  <th style="text-align: right;">N° VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_dia as $dia)
                                <tr class='clickable-row' data-href="#" >                
                                  <td> {{ $dia-> FECHA_VENTA }}</td>
                                  <td align="right">{{ $dia-> VENTAS }}</td>
                                                                    
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
                          <h2>VENTAS {{$desc_mes}}<small>REGIONAL</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>REGIONAL</th>
                                  <th style="text-align: right;">N° VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_reg as $reg)
                                <tr class='clickable-row' data-href="#" >                
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
                          <h2>VENTAS {{$desc_mes}}<small>MARCA</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>MARCA</th>
                                  <th style="text-align: right;">N° VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_marca as $mar)
                                <tr class='clickable-row' data-href="#" >                
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

</script>
@endsection