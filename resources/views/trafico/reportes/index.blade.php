@extends('layouts.main')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="row">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>REPORTE TRAFICO / {{$desc_mes}} </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-calendar"></i> <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">ENERO</a></li>
                  <li><a href="#">FEBRERO</a></li>
                  <li><a href="#">MARZO</a></li>
                  <li><a href="#">ABRIL</a></li>
                  <li><a href="#">MAYO</a></li>
                  <li><a href="#">JUNIO</a></li>
                  <li><a href="#">JULIO</a></li>
                  <li><a href="#">AGOSTO</a></li>
                  <li><a href="#">SEPTIEMBRE</a></li>
                  <li><a href="#">OCTUBRE</a></li>
                  <li><a href="#">NOVIEMBRE</a></li>
                  <li><a href="#">DICIEMBRE</a></li>
                  <li><a href="#">ANUAL</a></li>
                  <li><a href="#">PERSONALIZADO</a></li>
                </ul>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-user"></i> Visitantes nuevos</span>
            <div class="count">{{$total_nuevos}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-users"></i> Visitantes antiguos</span>
            <div class="count">{{$total_antiguo}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-file-text"></i> Tramites y otros</span>
            <div class="count">{{$total_otros}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          {{-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-female"></i> Total Mujeres</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-male"></i> Total Varones</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div> --}}
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right">
            <span class="count_top"><i class="fa fa-car"></i> Totalizador modelos</span>
            <div class="count">{{$total_modelos}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right">
            <span class="count_top"><i class="fa fa-users"></i> Total Visitas</span>
            <div class="count green">{{$total_visitas}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
        </div>
      </div>
    </div>
            <p>Reporte consolidado de tráfico de clientes - {{$desc_mes}} </p>
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action table-bordered" id="datatable1">
                <thead>
                  <tr>
                    <th>Regional </th>
                    <th style="text-align: right;">Vehiculos </th>
                    <th style="text-align: right;">Yamaha </th>
                    <th style="text-align: right;">Maquinaria Pesada </th>
                    <th style="text-align: right;">Tramites </th>
                    <th style="text-align: right;">Repuestos </th>
                    <th style="text-align: right;">Licitaciones </th>
                    <th style="text-align: right;">Servicios </th>
                    <th style="text-align: right;">Total </th>
                    <th style="text-align: right;">Ver detalle </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($consolidado as $det)                
                  <tr>
                    <td><strong>{{$det->regional}}</strong></td>
                    <td align="right">{{$det->vehiculos}}</td>
                    <td align="right">{{$det->yamaha}}</td>
                    <td align="right">{{$det->maquinaria}}</td>
                    <td align="right">{{$det->tramites}}</td>
                    <td align="right">{{$det->repuestos}}</td>
                    <td align="right">{{$det->licitaciones}}</td>
                    <td align="right">{{$det->servicios}}</td>
                    <td align="right" class="green"><strong>{{$det->totales}}</strong></td>
                    <td align="right"><a href="#" class="btn-sm btn-info">Ver!</a>
                    </td>
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
  
</script>
@endsection