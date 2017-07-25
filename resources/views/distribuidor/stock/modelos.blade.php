@extends('layouts.main')

@section('content')
<div class="right_col" role="main">
    <div class="page-title">
      <div class="title">
        <h3>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>$pais])}}"> STOCK / </a> 
         
            <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>$pais])}}">
            @if($ciudad  =='TODOS' )
              TODAS LAS REGIONALES
            @else
              {{$ciudad}}  
            @endif
            @if($pais <> 'TODOS') <small class="red">({{$pais}})</small>  @endif 
            </a>
            / {{$marca }} - {{ $modelos}}
        </h3>
      </div>
    </div>
    <br>
    <div class="col-md-12 col-sm-12 col-xs12">
      <div class="row tile_count" align="center">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count animated flipInY">
          <span class="count_top "><i class="fa fa-car"></i> TOTAL UNIDADES</span>
          <div class="count green "  align="center">{{$total}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i> </i> <a href="#">{{$modelos}}</a></span>
        </div>
      </div>
    </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>MODELOS {{$modelos}} </th>
              <th style="text-align: right;"> STOCK </th>
{{--                   @if($ciudad <> 'TODOS') <th style="text-align: right;">ASIGNADO</th> @endif                               
--}}                </tr>
              </thead>
              <tbody>
                @foreach($mod as $modl)
                <tr class='clickable-row' data-href="{{ route('vehiculos.master',['id'=>$modl -> COD_MODELO,'id2'=> $modelos ,'id3'=>$marca,'id4'=>$ciudad ,'pais'=>$pais])}}" >                
                  <td> {{ $modl-> MODELO }}  </td>
                  <td align="right"> <span class="badge">{{ $modl-> STOCK_REAL }}</span> </td>
                  {{-- @if ($ciudad <>'TODOS')
                  <td align="right"><span class="badge" style="background-color: #00cc88">542</span></td>
                  @endif --}}
                </tr>
                @endforeach
              </tbody>
            </table>
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


</script>
@endsection