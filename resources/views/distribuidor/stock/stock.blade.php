  @extends('layouts.main')

  @section('content')
  
  <div class="right_col" role="main">
    <div class="page-title">
      <div class="title">
        <h3>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}"> STOCK / </a> 
          @if($vista  =='ver_dist' )
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}"> DISTRIBUIDOR </a> 
          @endif
          @if($vista  =='ver_reg' )
            <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'TODOS'])}}">
            @if($ciudad  =='TODOS' )
              TODAS LAS REGIONALES 
            @else
             
              {{$ciudad}}  
            @endif
            @if($pais <> 'TODOS') <small class="red">({{$pais}})</small>  @endif
            </a>
          @endif 
        </h3>
      </div>
    </div>
   <br>
    <div class="col-md-12 col-sm-12 col-xs-12">
     {!! Form::open(array('route' => ['vehiculos.stock','vista'=>$vista,'ciudad'=>'0','pais'=>'TODOS'], 'method' => 'get' )) !!}﻿
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 " align="center">
        
          @if($vista  =='ver_reg' )
           <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}" class="check_distribuidor_des" >  <i class="fa fa-circle-o "> </i> VER DISTRIBUIDOR </a> 
          @endif
          @if($vista  =='ver_dist' )
           <a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}" class="check_distribuidor_des red" >  <i class="fa fa-check"> </i> VER DISTRIBUIDOR </a>
          @endif
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 " align="center">
        
         @if($vista  == 'ver_dist' )
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>'TODOS','pais'=>'TODOS'])}}" class="check_regionales_des" >  <i class="fa fa-circle-o "> </i> VER REGIONALES </a>
          @endif
          @if($vista  == 'ver_reg' )
           <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>'TODOS','pais'=>'TODOS'])}}" class="check_regionales_des red" > <i class="fa fa-check"> </i> VER REGIONALES </a>
          @endif 
        </div>
         @if($vista  == 'ver_reg' )
        <div class="col-md-4 col-sm-4 col-xs-12 " align="center">
        
          <select class="" data-width="100%" option="{{$ciudad}}" name="nom_localidad" id="nom_localidad" onchange='this.form.submit();' >
              <option value="TODOS">Seleccione una regional</option>
              <option value="TODOS">TODAS LAS REGIONALES</option>
              @foreach($ubica as $ub)
                <option value="{{$ub->nom_localidad}}" >
                 {{$ub->nom_localidad}} 
                 </option>                
              @endforeach
          </select>

        </div>
         @endif 
      </div>
      {!! Form::close()!!}
    </div>

    <div class="col-md-12 col-sm-12 col-xs12">
      <div class="row tile_count" align="center">

        <div class="col-md-4 col-sm-4 col-xs-6  tile_stats_count animated flipInY">
          <span @if($pais == 'TODOS') class="green" @else class="count_top"> @endif <i class="fa fa-car"></i> TODAS LAS UNIDADES</span>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'TODOS'])}}">
          <div  @if($pais == 'TODOS') class="count green"  @else class="count" @endif  align="center">{{$total}}</div>
          <span  @if($pais == 'TODOS')  class="count_bottom green" @else class="count_bottom" @endif ><i><i class="fa fa-search-plus"></i> </i> @if($ciudad  =='TODOS' )  TODAS LAS REGIONALES  @else   {{$ciudad}} @endif</span>
          </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6  tile_stats_count animated flipInY">
          <span @if($pais == 'BOLIVIA') class="green" @else class="count_top"> @endif</i> EN BOLIVIA</span>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'BOLIVIA'])}}">
          <div @if($pais == 'BOLIVIA') class="count green"  @else class="count" @endif  align="center">{{$total_bol}}</div>
          <span @if($pais == 'BOLIVIA')  class="count_bottom green" @else class="count_bottom" @endif ><i><i class="fa fa-search-plus"></i> </i> @if($ciudad  =='TODOS' )  TODAS LAS REGIONALES  @else   {{$ciudad}} @endif</span>
          </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6  tile_stats_count animated flipInY">
          <span @if($pais == 'TRANSITO') class="green" @else class="count_top"> @endif</i> EN TRANSITO</span>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'TRANSITO'])}}">
          <div @if($pais == 'TRANSITO') class="count green"  @else class="count" @endif align="center">{{$total_tra}}</div>
          <span @if($pais == 'TRANSITO')  class="count_bottom green" @else class="count_bottom" @endif ><i><i class="fa fa-search-plus"></i> </i> @if($ciudad  =='TODOS' )  TODAS LAS REGIONALES  @else   {{$ciudad}} @endif</span>
          </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6  tile_stats_count animated flipInY">
          <span @if($pais == 'PRODUCCION') class="green" @else class="count_top"> @endif</i> EN PRODUCCION</span>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'PRODUCCION'])}}">
          <div @if($pais == 'PRODUCCION') class="count green"  @else class="count" @endif  align="center">{{$total_pro}}</div>
          <span @if($pais == 'PRODUCCION')  class="count_bottom green" @else class="count_bottom" @endif ><i><i class="fa fa-search-plus"></i> </i> @if($ciudad  =='TODOS' )  TODAS LAS REGIONALES  @else   {{$ciudad}} @endif</span>
          </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6  tile_stats_count animated flipInY">
          <span @if($pais == 'SC_ESPECIAL') class="green" @else class="count_top"> @endif</i> SC ESPECIAL</span>
          <a href="{{ route('vehiculos.stock',['vista'=>'ver_reg','ciudad'=>$ciudad,'pais'=>'SC_ESPECIAL'])}}">
          <div @if($pais == 'SC_ESPECIAL') class="count green"  @else class="count" @endif align="center">{{$total_esp}}</div>
          <span @if($pais == 'SC_ESPECIAL')  class="count_bottom green" @else class="count_bottom" @endif ><i><i class="fa fa-search-plus"></i> </i> @if($ciudad  =='TODOS' )  TODAS LAS REGIONALES  @else   {{$ciudad}} @endif</span>
          </a>
        </div>

      </div>
    </div>

  <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="x_panel">
        <h2>LEXUS <small class=" red">@if($pais == 'TODOS') TODAS LAS UNIDADES @else EN {{$pais}} @endif</small>
          <a href="javascript:;" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver unidades"><i class="fa fa-car green "></i> <strong class="green"> {{$total_l}}</strong></a>
        </h2>
      </div>
   
          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MODELO GENERICO</th>
                  <th style="text-align: right;"> STOCK </th>
{{--                   @if($ciudad <> 'TODOS') <th style="text-align: right;">ASIGNADO</th> @endif                               
 --}}                </tr>
              </thead>
              <tbody>
                @foreach($mod_L as $modl)
                <tr class='clickable-row' data-href="{{ route('vehiculos.modelos',['id'=>$modl -> MODELOS,'id2'=>$modl -> MARCA ,'id4'=>$ciudad ,'pais'=>$pais])}}" >                
                  <td> {{ $modl-> MODELOS }}  </td>
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

    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h2>YAMAHA <small class=" red">@if($pais == 'TODOS') TODAS LAS UNIDADES @else EN {{$pais}} @endif</small>
          <a href="javascript:;" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver unidades"><i class="fa fa-car green "></i> <strong class="green"> {{$total_y}}</strong></a>
        </h2>
      </div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MODELO GENERICO</th>
                  <th style="text-align: right;"> STOCK </th>
{{--                   @if($ciudad <> 'TODOS') <th style="text-align: right;">ASIGNADO</th> @endif                               
 --}}                </tr>
              </thead>
              <tbody>
                @foreach($mod_Y as $mody)
                <tr class='clickable-row' data-href="{{ route('vehiculos.modelos',['id'=>$mody -> MODELOS,'id2'=>$mody -> MARCA ,'id4'=>$ciudad,'pais'=>$pais])}}" >                
                  <td> {{ $mody-> MODELOS }}  </td>
                  <td align="right"> <span class="badge">{{ $mody-> STOCK_REAL }}</span> </td>
                  {{-- @if ($ciudad <>'TODOS')
                  <td align="right"><span class="badge" style="background-color: #00cc88">542</span></td>
                  @endif --}}
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
       <div class="x_panel">
        <h2>TOYOTA <small class=" red">@if($pais == 'TODOS') TODAS LAS UNIDADES @else EN {{$pais}} @endif</small>
          <a href="javascript:;" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver unidades"><i class="fa fa-car green "></i> <strong class="green"> {{$total_t}}</strong></a>
        </h2>
      </div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MODELO GENERICO</th>
                  <th style="text-align: right;"> STOCK </th>
{{--                   @if($ciudad <> 'TODOS') <th style="text-align: right;">ASIGNADO</th> @endif                               
 --}}                </tr>
              </thead>
              <tbody>
                @foreach($mod_T as $modt)
                <tr class='clickable-row' data-href="{{ route('vehiculos.modelos',['id'=>$modt -> MODELOS,'id2'=>$modt -> MARCA ,'id4'=>$ciudad,'pais'=>$pais])}}" >                
                  <td> {{ $modt-> MODELOS }}  </td>
                  <td align="right"> <span class="badge">{{ $modt-> STOCK_REAL }}</span> </td>
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