@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title">
                <h3><a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a><a href="{{route('ventas.por_mes',$mes)}}">{{$desc_mes}}-{{$año_actual}} / </a> <small><i class="red">{{$marca}} </i> <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>
              <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
                        <span class="count_top"> Ventas {{$marca}} </span>
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
                          <h2>VENTAS <small>REGIONAL</small></h2>
                           
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
                               @foreach($por_regional as $reg)
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
                      

                      <div class="col-md-6 col-sm-12 col-xs-12 animated slideInUp">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>VENTAS <small>POR MODELO</small></h2>
                           
                          <div class="clearfix"></div>
                        </div>
                        
                        <div class="x_content">
                          
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>MODELO</th>
                                  <th style="text-align: right;">VENTAS</th>
                                                                   
                                </tr>
                              </thead>
                                
                              <tbody>
                               @foreach($por_modelo as $mod)
                                <tr class='clickable-row' data-href="#" >                
                                  <td> {{ $mod-> MODELO }}</td>
                                  <td align="right">{{ $mod-> VENTAS }}</td>
                                                                    
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