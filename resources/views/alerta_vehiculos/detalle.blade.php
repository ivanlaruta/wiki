@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
            <a href="{{route('ventas.index')}}">REPORTE DE ESTACIONADOS / </a> 
            <small><i class="red">  </i> <i class="fa fa-pencil-square-o"></i></small>
          </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      {{-- <div class="row">
        <div class="col-md-offset-8">
          <div class="">
            <label>
              <input type="checkbox" class="js-switch v_res" @if($vista =='1') checked @endif data-href="{{route('ventas.detalle_fecha',['f_ini'=>$f_ini,'f_fin'=>$f_fin,'title'=>$title,'vista'=>'1','origen'=>'index'])}}" /> Datos Genrales
            </label>
         &nbsp|&nbsp
            <label>
               <input type="checkbox" class="js-switch v_res" @if($vista =='0') checked @endif data-href="{{route('ventas.detalle_fecha',['f_ini'=>$f_ini,'f_fin'=>$f_fin,'title'=>$title,'vista'=>'0','origen'=>$origen])}}" /> Datos Completos
            </label>
          </div>

        </div> 
      </div> --}}

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>VENTAS <small>  </small></h2>
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
                     <th>COD MODELO</th> 
                     <th>MODELO</th>  
                     <th>COD MASTER</th> 
                     <th>MASTER</th> 
                     <th>AÑO</th> 
                     <th>CHASSIS</th> 
                     <th>FECHA CONTRATO</th> 
                     <th>FECHA FACTURA</th> 
                     <th>FECHA ENTREGA</th> 
                     <th>SUCURSAL</th> 
                     <th>REGIONAL</th> 
                     <th>COD TITULAR</th> 
                     <th>NIT</th> 
                     <th>CLIENTE</th> 
                     <th>PRECIO Bs</th> 
                     <th>PRECIO Sus</th> 
                     <th>ESTADO</th> 
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($detalle as $det)
                      <tr class='clickable-row' data-href="#" > 
                        <td>{{$det->ITEM}}</td> 
                        <td>{{$det->MARCA}}</td>
                        <td>{{$det->cod_modelo}}</td>
                        <td>{{$det->MODELO}}</td>
                        <td>{{$det->cod_master}}</td>
                        <td>{{$det->MASTER}}</td>
                        <td>{{$det->ANIO}}</td> 
                        <td>{{$det->CHASIS}}</td> 
                        <td>{{date('d/m/Y',strtotime($det->FECHA_CONTRATO))}}</td> 
                        <td><label class="text-success">{{date('d/m/Y',strtotime($det->FECHA_FACTURA))}}</label></td>
                        <td> @if (is_null($det->FECHA_ENTREGA)) No Entregado @else {{date('d/m/Y',strtotime($det->FECHA_ENTREGA))}}  </td> 
                        <td>{{$det->SUCURSAL}}</td> 
                        <td>{{$det->REGIONAL}}</td> 
                        <td>{{$det->cod_tit}}</td> 
                        <td>{{$det->NIT}}</td> 
                        <td>{{$det->CLIENTE}}</td> 
                        <td align="right"><label  class="text-success" >{{number_format($det->BOLIVIANOS,2, '.', ',')}}</label></td> 
                        <td align="right"><label  class="text-primary" >{{number_format($det->DOLARES,2, '.', ',')}}</label></td> 
                     
                        <td>{{$det->ESTADO}}</td> @endif
                       
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