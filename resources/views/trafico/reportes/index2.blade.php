@extends('layouts.main')
@section('content')
<style type="text/css">
 


</style>
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
          <div class="col-md-2 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> VEHICULOS</small>
            <div class="count" >  {{$totales['vehiculos']}}</div>
            <table class="table" >
              <thead>
                <tr>
                  <th style="padding: 2px; text-align: center;">T</th>
                  <th style="padding: 2px; text-align: center;">L</th>
                  <th style="padding: 2px; text-align: center;">H</th>
                  <th style="padding: 2px; text-align: center;">O</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 2px; text-align: center;">{{$totales['toyota']}}</td>
                  <td style="padding: 2px; text-align: center;">{{$totales['lexus']}}</td>
                  <td style="padding: 2px; text-align: center;">{{$totales['hino']}}</td>
                  <td style="padding: 2px; text-align: center;">{{$totales['otros_mod']}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> MOTOS Y CUADRAS</small>
            <div class="count" >  {{$totales['motos']}}</div>
            <table class="table" >
              <thead>
                <tr>
                  <th style="padding: 2px; text-align: center;">YAMAHA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 2px; text-align: center;">{{$totales['yamaha']}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> TRAMITES</small>
            <div class="count" >  {{$totales['tramites']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> REPUESTOS</small>
            <div class="count" >  {{$totales['repuestos']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> SERVICIOS</small>
            <div class="count" >  {{$totales['servicios']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> LICITACIONES</small>
            <div class="count" >  {{$totales['licitaciones']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> MONTACARGA</small>
            <div class="count" >  {{$totales['montacargas']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> M PESADA</small>
            <div class="count" >  {{$totales['pesada']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> LLANTAS</small>
            <div class="count" >  {{$totales['llantas']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> M AGRICOLA</small>
            <div class="count" >  {{$totales['agricola']}}</div>
          </div>
          <div class="col-md-1 col-sm-6 col-xs-12 tile_stats_count " align="center">
            <small class="count_top"> TOTAL</small>
            <div class="count green" >  {{$totales['total']}}</div>
            <table class="table" >
              <thead>
                <tr>
                  <th style="padding: 2px; text-align: center;">N</th>
                  <th style="padding: 2px; text-align: center;">A</th>
                  <th style="padding: 2px; text-align: center;">O</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 2px; text-align: center;">{{$totales['nuevos']}}</td>
                  <td style="padding: 2px; text-align: center;">{{$totales['antiguos']}}</td>
                  <td style="padding: 2px; text-align: center;">{{$totales['otros']}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          

        {{-- 
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-user"></i> TRAFICO</span>
            <div class="count">{{$total_visitas}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-users"></i> COTIZACIONES</span>
            <div class="count">10</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
            <span class="count_top"><i class="fa fa-file-text"></i> VENTAS</span>
            <div class="count">1</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-female"></i> Total Mujeres</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-male"></i> Total Varones</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right">
            <span class="count_top"><i class="fa fa-users"></i> VENTAS/TRAFICO</span>
            <div class="count green">6 %</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count pull-right">
            <span class="count_top"><i class="fa fa-car"></i> COTIZA./TRAFICO</span>
            <div class="count">66 %</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Para este mes</span>
          </div>
         --}}</div>
      </div>
    </div>
            <p>Reporte consolidado de tráfico de clientes - {{$desc_mes}} </p>
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action table-bordered" id="datatable1">
                <thead>
                  <tr>
                    <th>Regional </th>
                    <th style="text-align: center;">Vehiculos </th>
                    <th style="text-align: center;">Motos </th>
                    <th style="text-align: center;">Tramites </th>
                    <th style="text-align: center;">Repuestos </th>
                    <th style="text-align: center;">Servicios </th>
                    <th style="text-align: center;">Licitaciones </th>
                    <th style="text-align: center;">Montacargas</th>
                    <th style="text-align: center;">M Pesada</th>
                    <th style="text-align: center;">Llantas</th>
                    <th style="text-align: center;">M agricola</th>
                    <th style="text-align: center;">Total </th>
                    {{-- <th style="text-align: center;">Ver detalle </th> --}}
                  </tr>
                </thead>
                <tbody>
                @foreach($consolidado as $det)                
                  <tr>
                    <td class=""><strong>{{$det->regional}}</strong></td>
                    <td align="right">
                      <p class="red">{{$det->vehiculos}}</p>
                     {{--  <table class="table" >
                        <thead>
                          <tr>
                            <th style="padding: 2px; text-align: center;">T</th>
                            <th style="padding: 2px; text-align: center;">L</th>
                            <th style="padding: 2px; text-align: center;">H</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="padding: 2px; text-align: center;">{{$det->vehiculos}}</td>
                            <td style="padding: 2px; text-align: center;">{{$det->vehiculos}}</td>
                            <td style="padding: 2px; text-align: center;">{{$det->vehiculos}}</td>
                          </tr>
                        </tbody>
                      </table> --}}
                  {{--   {{$det->vehiculos}} --}}
                    </td>
                    <td align="right">
                      <p class="red">{{$det->yamaha}}</p>
                      {{-- <table class="table" >
                        <thead>
                          <tr>
                            <th style="padding: 2px; text-align: center;">YAMAHA</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="padding: 2px; text-align: center;">{{$det->yamaha}}</td>
                          </tr>
                        </tbody>
                      </table> --}}
                    </td>
                    <td align="right" class="red">{{$det->maquinaria}}</td>
                    <td align="right" class="red">{{$det->tramites}}</td>
                    <td align="right" class="red">{{$det->repuestos}}</td>
                    <td align="right" class="red">{{$det->licitaciones}}</td>
                    <td align="right" class="red">{{$det->servicios}}</td>
                    <td align="right" class="red">{{$det->servicios}}</td>
                    <td align="right" class="red">{{$det->servicios}}</td>
                    <td align="right" class="red">{{$det->servicios}}</td>
                    <td align="right" class="green"><strong><h2>{{$det->totales}}</h2></strong></td>
                    {{-- <td align="right"><a href="#" class="btn-sm btn-info">Ver!</a> --}}
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