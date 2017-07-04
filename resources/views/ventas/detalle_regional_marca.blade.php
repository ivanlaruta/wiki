@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
            
            <div class="page-title">
              <div class="title">
                <h3><a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a><a href="{{ route('ventas.por_regional',$reg )}}"> {{$reg}} -{{$año_actual}}  </a>/ <small><i class="red">{{$marca}} </i> <i class="fa fa-pencil-square-o"></i></small></h3>
              </div>

              <div class="title_right"></div>
            </div>

              <div class="col-md-12">
                  <div class="row">
                    <div class="row tile_count" align="center">

                      <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
                        <span class="count_top"> Ventas {{$marca}} {{$año_actual}} </span>
                        <div class="count green " align="center">{{$total}}</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-bar-chart"></i> </i> <a href="#">Total {{$marca}} </a></span>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="row">                     

                      <div class="col-md-8 col-sm-12 col-xs-12 animated slideInUp">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>VENTAS <small>{{$reg}} -{{$año_actual}} {{$marca}}</small></h2>
                           
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
                                <tr class='por_modelo' data-href="{{route('ventas.detalle_detalle_regional_marca_modelo',['reg'=>$reg,'marca'=>$marca,'modelo'=>$mod-> MODELO,'vista'=>'0','origen'=>'regional_mod'])}}" >                
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

 $(document).ready(function($) {
        $(".por_modelo").click(function() {
            window.location = $(this).data("href");
        });
    });

</script>
@endsection