@extends('layouts.main')

@section('content')
<style type="text/css">
  .color-0{
    color: #3e95cd;
  }
  .color-1{
    color: #8e5ea2;
  }
  .color-2{
    color: #3cba9f;
  }
  .color-3{
    color: #e8c3b9;
  }
  .color-4{
    color: #c45850;
  }
  .color-5{
    color: #8fc4c7;
  }
  .color-6{
    color: #dcd895;
  }
  .color-7{
    color: #8e5ea2;
  }
</style>
        <div class="right_col" role="main">
          <div class="">
            <div class="row tile_count">
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> COTIZACIONES </span>
                <div class="count">{{$total_cotizaciones}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>             
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> TEST DRIVE </span>
                <div class="count">0</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>    
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> RESERVAS </span>
                <div class="count ">{{$total_reservas}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>  
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> FACTURAS </span>
                <div class="count green">{{$total_facturas}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MES <SMALL>COTIZACIONES</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_bar_cotizaciones" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MES <SMALL>TEST DRIVE</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_bar_test" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MES <SMALL>RESERVAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_bar_reservas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MES <SMALL>FACTURAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_bar_facturas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR REGIONAL <SMALL>COTIZACIONES</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_cotiza" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR REGIONAL <SMALL>TEST DRIVE</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_test" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR REGIONAL <SMALL>RESERVAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_reservas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR REGIONAL <SMALL>FACTURAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_facturas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MARCA <SMALL>COTIZACIONES</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="bar-chart-horizontal-cotiza" width="400" height="250"></canvas>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MARCA <SMALL>TEST DRIVE</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="bar-chart-horizontal-test" width="400" height="250"></canvas>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MARCA <SMALL>RESERVAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="bar-chart-horizontal-reserva" width="400" height="250"></canvas>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <h2>POR MARCA <SMALL>FACTURAS</SMALL></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="bar-chart-horizontal-facturas" width="400" height="250"></canvas>
                  </div>
              </div>
            </div>

            <div class="">

            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="x_panel tile ">
                <div class="x_title">
                  <h2>COTIZACIONES</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" align="center">
                <canvas class="doughnut-chart" id="doughnut-chart" ></canvas>
                  <table class="table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                          
                          <th>MARCA</th>
                          <th style="text-align: right;">COTIZACIONES</th>
                        </tr>
                      </thead>
                      <tbody >
                      @for ($i = 0; $i < sizeof($cotizaciones_por_marca); $i++)
                      <tr>
                        <td><i class="fa fa-square color-{{$i}}"></i> {{$cotizaciones_por_marca[$i]['MARCA']}}</td>
                        <td align="right">{{$cotizaciones_por_marca[$i]['COTIZACIONES']}}</td> 
                      </tr>
                      @endfor
                      </tbody>

                  </table>
                </div>
              </div>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="x_panel tile ">
                <div class="x_title">
                  <h2>TEST DRIVE</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" align="center">
                <canvas class="doughnut-chart-test" id="doughnut-chart-test" ></canvas>
                  <table class="table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                          <th>MARCA</th>
                          <th style="text-align: right;">TEST's</th>
                        </tr>
                      </thead>
                      <tbody >
                      <tr>

                        <td>TOYOTA</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      <tr>
                        <td>HINO</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      <tr>
                        <td>YAMAHA</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      <tr>
                        <td>LEXUS</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      <tr>
                        <td>KUBOTA</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      <tr>
                        <td>DAIHATSU</td>                        
                        <td align="right">0</td>                        
                      </tr>
                      </tbody>

                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="x_panel tile ">
                <div class="x_title">
                  <h2>RESERVAS</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" align="center">
                <canvas class="doughnut-chart" id="doughnut-chart-reservas" ></canvas>
                  <table class="table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                          <th>MARCA</th>
                          <th style="text-align: right;">RESERVAS</th>
                        </tr>
                      </thead>
                      <tbody >
                      @for ($i = 0; $i < sizeof($reservas_por_marca); $i++)
                      <tr>
                      <td><i class="fa fa-square color-{{$i}}"></i> {{$reservas_por_marca[$i]['MARCA']}}</td>                        
                      <td align="right">{{$reservas_por_marca[$i]['RESERVADOS']}}</td>    
                      </tr>
                      @endfor
                      </tbody>

                  </table>
                </div>
              </div>
            </div>



            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="x_panel tile ">
                <div class="x_title">
                  <h2>FACTURAS</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" align="center">
                <canvas class="doughnut-chart" id="doughnut-chart-facturas" ></canvas>
                  <table class="table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                          <th>MARCA</th>
                          <th style="text-align: right;">FACTURAS</th>
                        </tr>
                      </thead>
                      <tbody >
                       @for ($i = 0; $i < sizeof($facturas_por_marca); $i++)
                      <tr>
                       <td><i class="fa fa-square color-{{$i}}"></i> {{$facturas_por_marca[$i]['MARCA']}}</td>                        
                        <td align="right">{{$facturas_por_marca[$i]['FACTURADOS']}}</td>   
                      </tr>
                      @endfor
                      </tbody>

                  </table>
                </div>
              </div>
            </div>


            </div>
            <br/>
          </div>
        </div>
        

@endsection

@section('scripts')
    <!-- Chart.js -->
    <script src="{{asset('bower_components/gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('bower_components/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- morris.js -->
    <script src="{{asset('bower_components/gentelella/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/morris.js/morris.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('bower_components/gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('bower_components/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('bower_components/gentelella/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('bower_components/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('bower_components/gentelella/vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript">


function nombreMes(mes) {
  if(mes == 1){ return 'ENERO';}
  if(mes == 2){ return 'FEBRERO';}
  if(mes == 3){ return 'MARZO';}
  if(mes == 4){ return 'ABRIL';}
  if(mes == 5){ return 'MAYO';}
  if(mes == 6){ return 'JUNIO';}
  if(mes == 7){ return 'JULIO';}
  if(mes == 8){ return 'AGOSTO';}
  if(mes == 9){ return 'SEPTIEMBRE';}
  if(mes == 10){ return 'OCTUBRE';}
  if(mes == 11){ return 'NOVIEMBE';}
  if(mes == 12){ return 'DICIEMBRE';}
}

//======================   BARRAS      =====================================
//========================================================================
 //================ BARRA COTIZACIONES ===============================
var dato_cotizaciones  = <?php echo json_encode($cotizaciones); ?>;
var len_cotizaciones = dato_cotizaciones.length;
var data_cotizaciones=[];

for (var i = 0; i < len_cotizaciones; i++) {
  var oData = {
    'meses':'',
    'cotiza':dato_cotizaciones[i].COTIZACIONES
  };

oData.meses = nombreMes(dato_cotizaciones[i].MES);
data_cotizaciones.push(oData);
}

Morris.Bar({
  element: 'graph_bar_cotizaciones',
  data:data_cotizaciones,
  xkey: 'meses',
  ykeys: ['cotiza'],
  labels: ['Cotizaciones'],
  barRatio: 0.4,
  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
  xLabelAngle: 90,
  hideHover: 'auto',
  resize: true
});

//====================================================================
 //================ BARRA TEST ===============================
Morris.Bar({
          element: 'graph_bar_test',
          data: [
          
          {device: 'ENERO', Tests: 0},
          {device: 'FEBRERO', Tests: 0},
          {device: 'MARZO', Tests: 0},
          {device: 'ABRIL', Tests: 0},
          {device: 'MAYO', Tests: 0},
          {device: 'JUNIO', Tests: 0},
          {device: 'JULIO', Tests: 0},
          {device: 'AGOSTO', Tests: 0},
          {device: 'SEPTIEMBRE', Tests: 0},
          {device: 'OCTUBRE', Tests: 0},
          {device: 'NOVIEMBE', Tests: 0},
          {device: 'DICIEMBRE', Tests: 0}
          ],
          xkey: 'device',
          ykeys: ['Tests'],
          labels: ['Tests'],
          barRatio: 0.4,
          barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
          xLabelAngle: 90,
          hideHover: 'auto',
          resize: true
        });
//========================================================================

 //================ BARRA RESERVAS ===============================
var dato_reservas  = <?php echo json_encode($reservas); ?>;
var len_reservas = dato_reservas.length;
var data_reservas=[];

for (var i = 0; i < len_reservas; i++) {
  var oData = {
    'meses':'',
    'res':dato_reservas[i].RESERVADOS
  };

oData.meses = nombreMes(dato_reservas[i].MES);
data_reservas.push(oData);
}

Morris.Bar({
  element: 'graph_bar_reservas',
  data:data_reservas,
  xkey: 'meses',
  ykeys: ['res'],
  labels: ['Reservas'],
  barRatio: 0.4,
  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
  xLabelAngle: 90,
  hideHover: 'auto',
  resize: true
});
//========================================================================

 //================ BARRA FACTURAS ===============================
var dato_facturas  = <?php echo json_encode($facturas); ?>;
var len_facturas = dato_facturas.length;
var data_facturas=[];

for (var i = 0; i < len_facturas; i++) {
  var oData = {
    'meses':'',
    'res':dato_facturas[i].FACTURADOS
  };

oData.meses = nombreMes(dato_facturas[i].MES);
data_facturas.push(oData);
}

Morris.Bar({
  element: 'graph_bar_facturas',
  data:data_facturas,
  xkey: 'meses',
  ykeys: ['res'],
  labels: ['Facturas'],
  barRatio: 0.4,
  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
  xLabelAngle: 90,
  hideHover: 'auto',
  resize: true
});
//========================================================================
//========================================================================


//======================   DONAS      =====================================
//========================================================================
//===================== DONA COTIZACIONES ================================

var dato_cot_reg  = <?php echo json_encode($cotizaciones_por_reg); ?>;
var data_cot_reg=[];
for (var i = 0; i < dato_cot_reg.length; i++) 
{
  var oData = {'label':dato_cot_reg[i].REGIONAL, 'value':dato_cot_reg[i].COTIZACIONES };
  data_cot_reg.push(oData);
}

Morris.Donut({
          element: 'graph_donut_cotiza',
          data: data_cot_reg,
          colors: ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          
          resize: true
        });
//========================================================================

//===================== DONA RESERVAS ================================

var dato_res_reg  = <?php echo json_encode($reservas_por_reg); ?>;
var data_res_reg=[];
for (var i = 0; i < dato_res_reg.length; i++) 
{
  var oData = {'label':dato_res_reg[i].REGIONAL, 'value':dato_res_reg[i].RESERVADOS };
  data_res_reg.push(oData);
}

Morris.Donut({
          element: 'graph_donut_reservas',
          data: data_res_reg,
          colors: ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          
          resize: true
        });
//========================================================================

//===================== DONA FACTURAS ================================

var dato_fac_reg  = <?php echo json_encode($facturas_por_reg); ?>;
var data_fac_reg=[];
for (var i = 0; i < dato_fac_reg.length; i++) 
{
  var oData = {'label':dato_fac_reg[i].REG_ASIGNADA, 'value':dato_fac_reg[i].FACTURADOS };
  data_fac_reg.push(oData);
}

Morris.Donut({
          element: 'graph_donut_facturas',
          data: data_fac_reg,
          colors: ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          
          resize: true
        });
//========================================================================
///////////////////////////////////////////////////////////////


//====================  BARRAS HORISONTALES  ================================
//========================================================================
//===================== BARRA H COTIZA ================================
var label_cotiza = [];
var data_cotiza = [];

var datos_cotiza_marca  = <?php echo json_encode($cotizaciones_por_marca); ?>;

for (var i = 0; i < datos_cotiza_marca.length; i++) {
   label_cotiza[i]=datos_cotiza_marca[i].MARCA.trim();
   data_cotiza[i]=datos_cotiza_marca[i].COTIZACIONES;
}

new Chart(document.getElementById("bar-chart-horizontal-cotiza"), {
    type: 'horizontalBar',
    data: {
      labels: label_cotiza,
      datasets: [
        {
          label: "Cotizaciones: ",
          backgroundColor:  ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          data: data_cotiza
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false
      }
    }
});
//========================================================================

//===================== BARRA H RESERVAS ================================
var label_reserva = [];
var data_reserva = [];

var datos_reserva_marca  = <?php echo json_encode($reservas_por_marca); ?>;

for (var i = 0; i < datos_reserva_marca.length; i++) {
   label_reserva[i]=datos_reserva_marca[i].MARCA.trim();
   data_reserva[i]=datos_reserva_marca[i].RESERVADOS;
}

new Chart(document.getElementById("bar-chart-horizontal-reserva"), {
    type: 'horizontalBar',
    data: {
      labels: label_reserva,
      datasets: [
        {
          label: "Cotizaciones: ",
          backgroundColor:  ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          data: data_reserva
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false
      }
    }
});
//========================================================================

//===================== BARRA H FACTURAS ================================
var label_facturas = [];
var data_facturas = [];

var datos_facturas_marca  = <?php echo json_encode($facturas_por_marca); ?>;

for (var i = 0; i < datos_facturas_marca.length; i++) {
   label_facturas[i]=datos_facturas_marca[i].MARCA.trim();
   data_facturas[i]=datos_facturas_marca[i].FACTURADOS;
}

new Chart(document.getElementById("bar-chart-horizontal-facturas"), {
    type: 'horizontalBar',
    data: {
      labels: label_facturas,
      datasets: [
        {
          label: "Cotizaciones: ",
          backgroundColor:  ['#26B99A', '#3498DB' ,'#34495E', '#ACADAC', '#145d66', '#4b3a52', '#455c73'],
          data: data_facturas
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: false
      }
    }
});
//========================================================================






var values_reservas = [0, 0, 0, 0, 0, 0];
var values_data = [0, 0, 0, 0, 0, 0];

var reservas  = <?php echo json_encode($cotizaciones_por_marca); ?>;
var len_reservas = reservas.length;

for (var i = 0; i < len_reservas; i++) {
   values_reservas[i]=reservas[i].MARCA.trim();
   values_data[i]=reservas[i].COTIZACIONES;
}

new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: values_reservas,
      datasets: [
        {
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#8fc4c7", "#dcd895"],
          data: values_data
        }
      ]
    },
    options: {
      legend: false, 
      resposive:true,
      title: {
        display: false,
      }
    }
});

/////////////////////////////////////////////////////////////////

var values_test = [0, 0, 0, 0, 0, 0];
var values_data_test = [0, 0, 0, 0, 0, 0];

new Chart(document.getElementById("doughnut-chart-test"), {
    type: 'doughnut',
    data: {
      labels: values_test,
      datasets: [
        {
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#8fc4c7", "#dcd895"],
          data: values_data_test
        }
      ]
    },
    options: {
      legend: false, 
      resposive:true,
      title: {
        display: false,
      }
    }
});


/////////////////////////////////////////////////////////////////

var values_marcas_res = [0, 0, 0, 0, 0, 0];
var values_data_res = [0, 0, 0, 0, 0, 0];

var marcas_res  = <?php echo json_encode($reservas_por_marca); ?>;
var len_marcas_res = marcas_res.length;

for (var i = 0; i < len_marcas_res; i++) {
   values_marcas_res[i]=marcas_res[i].MARCA.trim();
   values_data_res[i]=marcas_res[i].RESERVADOS;
}


new Chart(document.getElementById("doughnut-chart-reservas"), {
    type: 'doughnut',
    data: {
      labels: values_marcas_res,
      datasets: [
        {
          
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#8fc4c7", "#dcd895"],

          data: values_data_res
        }
      ]
    },
    options: {
      legend: false, 
      resposive:true,
      title: {
        display: false,
      }
    }
});

/////////////////////////////////////////////////////////////////

var values_marcas_fact = [0, 0, 0, 0, 0, 0];
var values_data_fact = [0, 0, 0, 0, 0, 0];

var marcas_fact  = <?php echo json_encode($facturas_por_marca); ?>;
var len_marcas_fact = marcas_fact.length;

for (var i = 0; i < len_marcas_fact; i++) {
   values_marcas_fact[i]=marcas_fact[i].MARCA.trim();
   values_data_fact[i]=marcas_fact[i].FACTURADOS;
}


new Chart(document.getElementById("doughnut-chart-facturas"), {
    type: 'doughnut',
    data: {
      labels: values_marcas_fact,
      datasets: [
        {
          
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#8fc4c7", "#dcd895"],

          data: values_data_fact
        }
      ]
    },
    options: {
      legend: false, 
      resposive:true,
      title: {
        display: false,
      }
    }
});






// var values_test_drive = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];


// $('.txt_test_drive').text('POR MES');
  
// $(".sparkline_test_drive").sparkline(values_test_drive, {
//         type: 'bar',
        
//         height: '35',
//         barWidth: 15,
//         colorMap: {
//           '0': '#ff000c'  
//         },
//         barSpacing: 2,
//         barColor: '#26B99A',
//         chartRangeMin: 12,
//       });

// $('.sparkline_test_drive').bind('sparklineRegionChange', function(ev) {
//     var sparkline = ev.sparklines[0];
//         var region = sparkline.getCurrentRegionFields();
//         var value = region.y;
//         //console.log(region);
//         if(region[0].offset == 0){mes='ENERO';}
//         if(region[0].offset == 1){mes='FEBRERO';}
//         if(region[0].offset == 2){mes='MARZO';}
//         if(region[0].offset == 3){mes='ABRIL';}
//         if(region[0].offset == 4){mes='MAYO';}
//         if(region[0].offset == 5){mes='JUNIO';}
//         if(region[0].offset == 6){mes='JULIO';}
//         if(region[0].offset == 7){mes='AGOSTO';}
//         if(region[0].offset == 8){mes='SEPTIEMBRE';}
//         if(region[0].offset == 9){mes='OCTUBRE';}
//         if(region[0].offset == 10){mes='NOVIEMBE';}
//         if(region[0].offset == 11){mes='DICIEMBRE';}

//     $('.txt_test_drive').text(mes + " : "+region[0].value);
// }).bind('mouseleave', function() {
//     $('.txt_test_drive').text('POR MES');
// });


///////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////

// var values_reservas = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];

// var dato_reservas  = <?php echo json_encode($reservas); ?>;
// var len_reservas = dato_reservas.length;

// for (var i = 0; i < len_reservas; i++) {
//    values_reservas[i]=dato_reservas[i].RESERVADOS;
// }

// $('.txt_reservas').text('POR MES');
  
// $(".sparkline_reservas").sparkline(values_reservas, {
//         type: 'bar',
        
//         height: '35',
//         barWidth: 15,
//         colorMap: {
//           '0': '#ff000c'  
//         },
//         barSpacing: 2,
//         barColor: '#26B99A',
//         chartRangeMin: 12,
//       });

// $('.sparkline_reservas').bind('sparklineRegionChange', function(ev) {
//     var sparkline = ev.sparklines[0];
//         var region = sparkline.getCurrentRegionFields();
//         var value = region.y;
//         //console.log(region);
//         if(region[0].offset == 0){mes='ENERO';}
//         if(region[0].offset == 1){mes='FEBRERO';}
//         if(region[0].offset == 2){mes='MARZO';}
//         if(region[0].offset == 3){mes='ABRIL';}
//         if(region[0].offset == 4){mes='MAYO';}
//         if(region[0].offset == 5){mes='JUNIO';}
//         if(region[0].offset == 6){mes='JULIO';}
//         if(region[0].offset == 7){mes='AGOSTO';}
//         if(region[0].offset == 8){mes='SEPTIEMBRE';}
//         if(region[0].offset == 9){mes='OCTUBRE';}
//         if(region[0].offset == 10){mes='NOVIEMBE';}
//         if(region[0].offset == 11){mes='DICIEMBRE';}

//     $('.txt_reservas').text(mes + " : "+region[0].value);
// }).bind('mouseleave', function() {
//     $('.txt_reservas').text('POR MES');
// });



</script>

@endsection