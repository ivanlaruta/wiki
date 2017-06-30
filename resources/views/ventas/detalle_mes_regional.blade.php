@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title">
                <h3><a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a> <a href="{{route('ventas.por_mes',$mes)}}">{{$desc_mes}}-{{$año_actual}} / </a><small><i class="red"> {{$regional}}  </i> <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>
              <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
                        <span class="count_top"> Ventas de {{$regional}} </span>
                        <div class="count green " align="center">{{$total}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-bar-chart"></i> </i> <a href="#">Total {{$desc_mes}}</a></span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="row">                     

                  


                    <div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
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
                                <tr class='suc_det' data-href="{{route('ventas.detalle_mes_regional_sucursal',['mes'=>$mes,'suc'=>$suc-> SUCURSAL, 'reg'=>$regional,'vista'=>'1'])}}" >                
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



                    <div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
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
  $(document).ready(function($) {
        $(".suc_det").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
@endsection