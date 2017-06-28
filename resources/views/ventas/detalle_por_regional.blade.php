@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title">
                <h3><a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a> <small><i class="red"> {{$regional}} - {{$año_actual}} </i> <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>
              <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count">
                        <span class="count_top"> Ventas de {{$regional}} </span>
                        <div class="count green " align="center">{{$total}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-bar-chart"></i> </i> <a href="#">Total {{$año_actual}}</a></span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="row">                     

                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>VENTAS {{$año_actual}}<small>MES</small></h2>
                        
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>MES</th>
                                  <th style="text-align: right;">N° VENTAS</th>
                                                                   
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
                          <h2>VENTAS <small>SUCURSAL</small></h2>
                        
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>SUCURSAL</th>
                                  <th style="text-align: right;">VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_sucursal as $suc)
                                <tr class='clickable-row' data-href="#" >                
                                   <td> {{ $suc-> SUCURSAL }}</td>
                                  <td align="right">{{ $suc-> VENTAS }}</td>
                                                                    
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
                          <h2>VENTAS <small>MARCA</small></h2>
                        
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