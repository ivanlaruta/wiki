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
            <a href="{{ route('vehiculos.modelos',['id'=>$modelos,'id2'=>$marca ,'id4'=>$ciudad,'pais'=>$pais])}}">/ {{$marca }} - {{ $modelos}}</a>
            / {{ $modelo -> MODELO}}
        </h3>
      </div>
    </div>
    <br>
    <div class="col-md-12 col-sm-12 col-xs12">
      <div class="row tile_count" align="center">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count animated flipInY">
          <span class="count_top "><i class="fa fa-car"></i> TOTAL {{$modelos}}</span>
          <div class="count green "  align="center">{{$total}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i> </i> <a href="#"> {{ $modelo -> MODELO}}</a></span>
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>MASTER's {{ $modelo -> MODELO}} </th>
              <th style="text-align: right;"> STOCK </th>
                </tr>
              </thead>
              <tbody>
                @foreach($mas as $masl)
                <tr class='clickable-row' data-href="{{ route('vehiculos.det_vehiculos',['id'=> str_replace("/", "_", $masl ->COD_MASTER)  ,'id1'=> str_replace("/", "_", $modelo -> MODELO) ,'id2'=> $modelos ,'id3'=>$marca,'id4'=>$ciudad,'vista'=>'master','pais'=>$pais])}}" >                
                  <td> {{ $masl-> MASTER }}  </td>
                  <td align="right"> <span class="badge">{{ $masl-> STOCK_REAL }}</span> </td>
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