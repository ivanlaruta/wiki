@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
            <a href="{{route('ventas.index')}}">REPORTE DE VENTAS / </a> <a href="{{route('ventas.por_mes',$mes)}}">{{$desc_mes}}-{{$año_actual}} / </a>  <a href="{{route('ventas.mes_marca',['marca'=>$marca,'mes'=>$mes])}}">{{$marca}}/ </a>
            <small><i class="red"> {{$reg}} </i> <i class="fa fa-pencil-square-o"></i></small>
          </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-offset-8">
          <div class="">
            <label>
              <input type="checkbox" class="js-switch v_res" @if($vista =='1') checked @endif data-href="{{route('ventas.detalle_mes_regional_marca',['mes'=>$mes,'marca'=>$marca, 'reg'=>$reg,'vista'=>'1','origen'=>'regional'])}}" /> Datos Genrales
            </label>
         &nbsp|&nbsp
            <label>
               <input type="checkbox" class="js-switch v_res" @if($vista =='0') checked @endif data-href="{{route('ventas.detalle_mes_regional_marca',['mes'=>$mes,'marca'=>$marca, 'reg'=>$reg,'vista'=>'0','origen'=>'regional'])}}" /> Datos Completos
            </label>
          </div>

        </div> 
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>VENTAS <small> {{$desc_mes}}-{{$año_actual}}-{{$marca}} -{{$reg}} </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content animated fadeIn">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr>
                     <th></th> 
                     <th>MARCA</th> 
                     @if($vista == '0')<th>COD MODELO</th> @endif
                     <th>MODELO</th>  
                     @if($vista == '0')<th>COD MASTER</th> @endif
                     <th>MASTER</th> 
                     <th>AÑO</th> 
                     <th>CHASSIS</th> 
                     @if($vista == '0')<th>FECHA CONTRATO</th> @endif
                     <th>FECHA FACTURA</th> 
                     @if($vista == '0')<th>FECHA ENTREGA</th> @endif
                     <th>SUCURSAL</th> 
                     @if($vista == '0')<th>REGIONAL</th> @endif
                     @if($vista == '0')<th>COD TITULAR</th> @endif
                     @if($vista == '0')<th>NIT</th> @endif
                     <th>CLIENTE</th> 
                     
                     @if($vista == '0')<th>TELEFONO</th> @endif
                     @if($vista == '0')<th>CORREO</th> @endif

                     @if($vista == '0')<th>PRECIO Bs</th> @endif
                     @if($vista == '0')<th>PRECIO Sus</th> @endif
                     {{-- @if($vista == '0')<th>MONEDA</th> @endif --}}
                     @if($vista == '0')<th>ESTADO</th> @endif
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($detalle as $det)
                      <tr class='clickable-row' data-href="#" > 
                        <td>{{$det->ITEM}}</td> 
                        <td>{{$det->MARCA}}</td>
                        @if($vista == '0')<td>{{$det->cod_modelo}}</td>@endif
                        <td>{{$det->MODELO}}</td>
                        @if($vista == '0')<td>{{$det->cod_master}}</td>@endif
                        <td>{{$det->MASTER}}</td>
                        <td>{{$det->ANIO}}</td> 
                        <td>{{$det->CHASIS}}</td> 
                        @if($vista == '0')<td>{{date('d/m/Y',strtotime($det->FECHA_CONTRATO))}}</td> @endif
                        <td><label class="text-success">{{date('d/m/Y',strtotime($det->FECHA_FACTURA))}}</label></td>
                        @if($vista == '0')<td> @if (is_null($det->FECHA_ENTREGA)) No Entregado @else {{date('d/m/Y',strtotime($det->FECHA_ENTREGA))}} @endif </td> @endif
                        <td>{{$det->SUCURSAL}}</td> 
                        @if($vista == '0')<td>{{$det->REGIONAL}}</td> @endif
                        @if($vista == '0')<td>{{$det->cod_tit}}</td> @endif
                        @if($vista == '0')<td>{{$det->NIT}}</td> @endif
                        <td>{{$det->CLIENTE}}</td> 

                        @if($vista == '0')<td>{{$det->telefono}}</td> @endif
                        @if($vista == '0')<td>{{$det->correo}}</td> @endif
                        
                        @if($vista == '0')<td align="right"><label class="text-success">{{number_format($det->BOLIVIANOS,2, '.', ',')}}</label></td> @endif
                        @if($vista == '0')<td align="right"><label class="text-primary">{{number_format($det->DOLARES,2, '.', ',')}}</label></td> @endif
                       {{--  @if($vista == '0')<td> @if ($det->MONEDA == 1)BOLIVIANOS @endif @if ($det->MONEDA == 2)DOLARES @endif </td> @endif --}}
                        @if($vista == '0')<td>{{$det->ESTADO}}</td> @endif
                       
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
@endsection

@section('scripts')
  <script type="text/javascript">

    $(document).ready(function($) {
        $(".v_res").click(function() {
            window.location = $(this).data("href");
        });
    });

  </script>
@endsection