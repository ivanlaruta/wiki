@extends('layouts.main')

@section('content')

<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3><a href="{{ route('cotizaciones.dashboard',['f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0'])}}">COTIZACIONES {{$año_actual}} </a>/  <small> 

        @if($title == 'diarias') {{date('d/m/Y',strtotime($inicio))}} @endif 
        @if( $title == 'semanal' || $title == 'ult_15_dias' ){{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} @endif 
        @if( $title == 'mes') {{$desc_mes}}@endif 

        <i class="fa fa-pencil-square-o"></i></small></h3>
      </div>
      <div class="title_right"></div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="row tile_count" align="center">

          @if($title == 'index')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Hoy</span>
            <div class="count red" align="center">{{$dia}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['f_ini'=>$hoy,'f_fin'=>$hoy,'title'=>'diarias','mes'=>'0'])}}">{{$hoy->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Esta semana</span>
            <div class="count" align="center">{{$esta_sema}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'semanal','mes'=>'0'])}}">Desde el {{$inicio_sem->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Ultimos <i class="red">15 </i>dias</span>
            <div class="count "  align="center">{{$ult_15d}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'ult_15_dias','mes'=>'0'])}}">Desde el {{$ult_15->format('d/m/Y')}}  </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Este mes</span>
            <div class="count" align="center">{{$este_mes}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['f_ini'=>$inicio_mes,'f_fin'=>$hoy,'title'=>'mes','mes'=>'0'])}}">Desde el {{$inicio_mes->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Este año</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.dashboard',['f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0'])}}">Desde el {{$inicio_año->format('d/m/Y')}}</a></span>
          </div>
          @endif

          @if($title == 'diarias')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Hoy</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="#">Total {{date('d/m/Y',strtotime($inicio))}}</a></span>
          </div>
          @endif

          @if($title == 'semanal' || $title == 'ult_15_dias')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{date('d/m/Y',strtotime($inicio))}} -{{date('d/m/Y',strtotime($final))}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="#">Total {{$title}}</a></span>
          </div>
          @endif

          @if($title == 'mes')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$desc_mes}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="#">Total {{$desc_mes}}</a></span>
          </div>
          @endif


        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">

        @if($title == 'index')
        <div class="col-md-3 col-sm-12 col-xs-12 animated slideInUp ">
          <div class="x_panel">
            <h2>MES<small> Detalle...</small></h2>
          </div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MES</th>
                  <th style="text-align: right;">COTIZACIONES</th>
                </tr>
              </thead>
              <tbody>
               @foreach($por_mes as $mes)
               <tr class='clickable-row' data-href="{{route('cotizaciones.dashboard',['f_ini'=>$inicio_mes,'f_fin'=>$hoy,'title'=>'mes','mes'=>$mes-> MES])}}" >               
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
                <td align="right">{{ $mes-> COTIZACIONES }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>                        
      </div>
      @endif

      @if( $title == 'semanal' || $title == 'ult_15_dias' || $title == 'mes')
        <div class="col-md-3 col-sm-12 col-xs-12 animated slideInUp ">
          <div class="x_panel">
            <h2>DIAS<small> Detalle...</small></h2>
          </div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>DIA</th>
                  <th style="text-align: right;">COTIZACIONES</th>
                </tr>
              </thead>
              <tbody>
               @foreach($por_dia as $dia)
                <tr class='v_res' data-href="#" > 

                  <td> {{date('d',strtotime($dia-> FECHA_COTIZACION))  }}</td>
                  <td align="right">{{ $dia-> COTIZACIONES }}</td>
                                                    
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>                        
      </div>
      @endif

      <div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated slideInUp" @else class="col-md-3 col-sm-12 col-xs-12 animated slideInUp" @endif>
        <div class="x_panel">
          <h2>REGIONAL<small>detalle...</small></h2>
        </div>
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>REGIONAL</th>
                <th style="text-align: right;">COTIZACIONES</th>
              </tr>
            </thead>

            <tbody>
              @foreach($por_reg as $reg)
              <tr class='clickable-reg' data-href="#" >                
                <td> @if( is_null($reg-> Localidad)) Sin Dato @else {{ $reg-> Localidad }} @endif</td>
                <td align="right">{{ $reg-> COTIZACIONES }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>                        
      </div>


      <div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated slideInUp" @else class="col-md-3 col-sm-12 col-xs-12 animated slideInUp" @endif>
        <div class="x_panel">
          <h2>MARCA<small>detalle...</small></h2>
        </div>
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>MARCA</th>
                <th style="text-align: right;">COTIZACIONES</th>
              </tr>
            </thead>
            <tbody>
              <tr class='clickable-marca' data-href="#" >            
              </tr>
            </tbody>
          </table>
        </div>                        
      </div>


      <div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated slideInUp" @else class="col-md-3 col-sm-12 col-xs-12 animated slideInUp" @endif>
        <div class="x_panel">
          <h2>VENDEDORES<small>detalle...</small></h2>
        </div>
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>VENDEDOR</th>
                <th style="text-align: right;">COTIZACIONES</th>
              </tr>
            </thead>
            <tbody>
              @foreach($por_vendedor as $ven)
              <tr class='clickable-ven' data-href="#" >                
                <td> {{ $ven-> Vendedor }} </td>
                <td align="right">{{ $ven-> COTIZACIONES }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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