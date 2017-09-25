@extends('layouts.main')

@section('content')
<link href="/path/to/c3.css" rel="stylesheet">



<style type="text/css">
.table .progress {
margin-bottom: 0px;
}

  .color-0{
    color: #26B99A;
    background: #26B99A;
  }
  .color-3{
    color: #ACADAC;
    background: #ACADAC;
  }
  .color-1{
    color: #3498DB;
    background: #3498DB;
  }
  .color-2{
    color: #34495E;
    background: #34495E;
  }
  .color-4{
    color: #145d66;
    background: #145d66;
  }
  .color-5{
    color: #4b3a52;
    background: #4b3a52;
  }
  .color-6{
    color: #455c73;
    background: #455c73;
  }
  .color-7{
    color: #8e5ea2;
    background: #8e5ea2;
  }

  .x_title span {
    color: #73879C;
  }

a:visited {
    color: #26B99A;
}

/* mouse over link */
a:hover {
    color: #26B99A;
}

  /*.sombra{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }*/
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
                <div class="count">{{intval($total_cotizaciones*0.30)}}</div>
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
{{-- 
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 sombra">
                  <div class="x_title">
                    <span>RESUMEN {{$año_actual}} / COTIZACIONES, TEST, RESERAS, FACTURAS</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row" align="center">
                      <i class="fa fa-square" style="color:  #069f7f;"></i> COTIZACIONES
                      &nbsp &nbsp<i class="fa fa-square" style="color:  #34495E;"></i> TEST 
                      &nbsp &nbsp<i class="fa fa-square" style="color:  #4b3a52;"></i> RESERVAS 
                      &nbsp &nbsp<i class="fa fa-square" style="color:  #3498DB;"></i> FACTURAS
                    </div>
                    <div id="graph_bar_resumen" style="width:100%; height:300px;"></div>
                  </div>
              </div>
            </div> --}}

<div class="ln_solid"></div>

            <div class="row sombra">
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                  <div class="x_title">
                    <h2> COTIZACIONES POR MES </h2>
                      <span class="pull-right">
                      <a href="javascript:;" class="area" ><i class="fa fa-area-chart"></i></a>
                      <a href="javascript:;" class="bar"><i class="fa fa-bar-chart"></i></a>
                      <a href="javascript:;" class="line"><i class="fa fa-line-chart"></i></a>
                      </span>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content " >
                    <div id="container" align="center" style=" display: inline-block; color: #fff;"></div>
                    <div  id="chart"></div>
                    <div  id="chart-bar"></div>
                    <div  id="chart-line"></div>
                  </div>
              </div>
            </div>
          
<div class="ln_solid"></div>

            <div class="row sombra">
              <div class="col-md-3 col-sm-3 col-xs-6 ">
                  <div class="x_title">
                    <span>COTIZACIONES POR MARCA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="chart_cotiza"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 ">
                  <div class="x_title">
                    <span>TESTS POR MARCA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="chart_test"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 ">
                  <div class="x_title">
                    <span>RESERVAS POR MARCA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="chart_reservas"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 ">
                  <div class="x_title">
                    <span>FACTURAS POR MARCA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="chart_facturas"></div>
                  </div>
              </div>
            </div>
          
<div class="ln_solid"></div>

             <div class="row sombra">
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <span>POR REGIONAL COTIZACIONES</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_cotiza" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <span>POR REGIONAL TEST DRIVE</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_test" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <span>POR REGIONAL RESERVAS</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_reservas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="x_title">
                    <span>POR REGIONAL FACTURAS</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph_donut_facturas" style="width:100%; height:200px;"></div>
                  </div>
              </div>
            </div>
            <br/>
          </div>
        </div>
      
@endsection

@section('scripts')

    <!-- Load d3.js and c3.js -->
    <script src="{{asset('bower_components/d3/d3.min.js')}}"></script>
    <script src="{{asset('bower_components/c3/c3.min.js')}}"></script>
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
$(document).ready(function($) {

var grupo =['YAMAHA','HINO','LEXUS','KUBOTA','DAIHATSU','VOLVO'];
var b_colores = {TOYOTA: '#26B99A', YAMAHA: '#ACADAC', HINO: '#3498DB', LEXUS: '#34495E', KUBOTA: '#145d66',
            DAIHATSU: '#4b3a52', VOLVO: '#8e5ea2',} ;

var barras_cotiza = [];
var datos_cotiza_marca  = <?php echo json_encode($cotizaciones_por_marca); ?>;
for (var i = 0; i < datos_cotiza_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_cotiza_marca[i].MARCA.trim()) ;
  data_temp.push(datos_cotiza_marca[i].COTIZACIONES) ;
  barras_cotiza.push(data_temp);
}
var chart = c3.generate({
    bindto: '#chart_cotiza',
    data: {
      columns: barras_cotiza,
        type: 'bar',
        colors: b_colores,
        groups: [grupo]
    },
    axis: {
        x: {
            type: 'category',
            categories: ['cotizaciones']
        }
    }
});


var barras_test = [];
var datos_test_marca  = <?php echo json_encode($cotizaciones_por_marca); ?>;
for (var i = 0; i < datos_test_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_test_marca[i].MARCA.trim()) ;
  data_temp.push(Math.round(datos_test_marca[i].COTIZACIONES*0.30)) ;
  barras_test.push(data_temp);
}

var chart = c3.generate({
    bindto: '#chart_test',
    data: {
      columns: barras_test,
        type: 'bar',
        colors: b_colores,
        groups: [grupo]
    },
    axis: {
        x: {
            type: 'category',
            categories: ['Test']
        }
    }
});


var barras_reservas = [];
var datos_reservas_marca  = <?php echo json_encode($reservas_por_marca); ?>;
for (var i = 0; i < datos_reservas_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_reservas_marca[i].MARCA.trim()) ;
  data_temp.push(datos_reservas_marca[i].RESERVADOS) ;
  barras_reservas.push(data_temp);
}

var chart = c3.generate({
    bindto: '#chart_reservas',
    data: {
      columns: barras_reservas,
        type: 'bar',
        colors: b_colores,
        groups: [grupo]
    },
    axis: {
        x: {
            type: 'category',
            categories: ['reservas']
        }
    }
});

var barras_facturas = [];
var datos_facturas_marca  = <?php echo json_encode($facturas_por_marca); ?>;
for (var i = 0; i < datos_facturas_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_facturas_marca[i].MARCA.trim()) ;
  data_temp.push(datos_facturas_marca[i].FACTURADOS) ;
  barras_facturas.push(data_temp);
}

var chart = c3.generate({
    bindto: '#chart_facturas',
    data: {
      columns: barras_facturas,
        type: 'bar',
        colors: b_colores,
        groups: [grupo]
    },
    axis: {
        x: {
            type: 'category',
            categories: ['Facturas']
        }
    }
});

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


//======================     RESUMEN   =====================================
//========================================================================





var data=[];
var max =0;
var dato_cotizaciones  = <?php echo json_encode($cotizaciones); ?>;
var dato_test  = <?php echo json_encode($cotizaciones); ?>;
var dato_reservas  = <?php echo json_encode($reservas); ?>;
var dato_facturas  = <?php echo json_encode($facturas); ?>;

if(dato_cotizaciones.length>=dato_reservas.length) {max = dato_cotizaciones.length;} 
else {max = dato_cotizaciones.length;}

var colores = {COTIZACIONES: '#26B99A', TEST: '#167d8a', RESERVAS: '#08636e', FACTURAS: '#044484'};

var data_temp_cotiza = []; var data_temp_test = []; var data_temp_reservas = []; var data_temp_facturas = [];

data_temp_cotiza[0] = 'COTIZACIONES';
data_temp_test[0] = 'TEST';
data_temp_reservas[0] = 'RESERVAS';
data_temp_facturas[0] = 'FACTURAS';

for (var i = 0; i < max; i++) 
{
  data_temp_cotiza[i+1]= dato_cotizaciones[i]? dato_cotizaciones[i].COTIZACIONES :0;
  data_temp_test[i+1]= dato_test[i]? Math.round(dato_test[i].COTIZACIONES *0.30) :0;
  data_temp_reservas[i+1]= dato_reservas[i]? dato_reservas[i].RESERVADOS :0;
  data_temp_facturas[i+1]= dato_facturas[i]? dato_facturas[i].FACTURADOS:0;
}
data.push(data_temp_cotiza,data_temp_test,data_temp_reservas,data_temp_facturas);

grafico('area-spline',data,colores);


$(".area").click(function() {
      grafico('area-spline',data,colores);
});

$(".bar").click(function() {
      grafico('bar',data,colores);
});

$(".line").click(function() {
      grafico('line',data,colores);
});

function grafico (tipo ,data,colores){
    var chart2 = c3.generate({
      bindto: '#chart-bar',
      data: {
        columns: data,
          type: tipo,
          colors: colores
      },
      axis: {
          x: {
              type: 'category',
              tick: {
                  rotate: 90,
                  multiline: false
              },
              categories: ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE']
          }
      } 
  });
}



// var chart = c3.generate({
//     bindto: '#chart',
//     data: {
//       columns: data,
//         type: 'area-spline',
//         colors: colores
//     },
//     axis: {
//         x: {
//             type: 'category',
//             tick: {
//                 rotate: 90,
//                 multiline: false
//             },
//             categories: ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE']
//         }
//     } 

// });



// var chart3 = c3.generate({
//     bindto: '#chart-line',
//     data: {
//       columns: data,
//         type: 'line',
//         colors: colores
//     },
//     axis: {
//         x: {
//             type: 'category',
//             tick: {
//                 rotate: 90,
//                 multiline: false
//             },
//             categories: ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE']
//         }
//     } 

// });

// d3.select('#container').insert('div', '.chart').attr('class', 'legend').selectAll('span')
//     .data(['COTIZACIONES', 'TEST', 'RESERVAS','FACTURAS'])
//   .enter().append('span')
//     .attr('data-id', function (id) { return id; })
//     .html(function (id) { return id; })
//     .each(function (id) {
//         d3.select(this).style('background-color', chart.color(id));
//     })
//     .on('mouseover', function (id) {
//         chart.focus(id);
//     })
//     .on('mouseout', function (id) {
//         chart.revert();
//     })
//     .on('click', function (id) {
//         chart.toggle(id);
//     });


//======================     RESUMEN   =====================================
//========================================================================
// var data=[];
// var dato_cotizaciones  = <?php echo json_encode($cotizaciones); ?>;
// var dato_test  = <?php echo json_encode($cotizaciones); ?>;
// var dato_reservas  = <?php echo json_encode($reservas); ?>;
// var dato_facturas  = <?php echo json_encode($facturas); ?>;

// for (var i = 0; i < dato_cotizaciones.length; i++) {
//   var oData = {
//     'meses':'',
//     'cotiza':dato_cotizaciones[i]? dato_cotizaciones[i].COTIZACIONES :0,
//     'test':dato_test[i]? Math.round(dato_test[i].COTIZACIONES *0.30) :0,
//     'res':dato_reservas[i]? dato_reservas[i].RESERVADOS :0 ,
//     'fact':dato_facturas[i]? dato_facturas[i].FACTURADOS:0
//   };

// oData.meses = nombreMes(dato_cotizaciones[i].MES);
// data.push(oData);

// }

// Morris.Bar({
//   element: 'graph_bar_resumen',
//   data:data,
//   xkey: 'meses',
//   ykeys: ['cotiza','test','res','fact'],
//   labels: ['Cotizaciones','Test','Reservas','Facturas'],
//   barRatio:5,
//   barColors: ['#069f7f', '#34495E', '#4b3a52', '#3498DB'],
//   xLabelAngle: 55,
//   fillOpacity: 0.6,
//       hideHover: 'auto',
//       behaveLikeLine: true,

//   resize: true,
//     redraw: true
// });


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

//===================== DONA TEST ================================

var dato_test_reg  = <?php echo json_encode($cotizaciones_por_reg); ?>;
var data_test_reg=[];
for (var i = 0; i < dato_test_reg.length; i++) 
{
  var oData = {'label':dato_test_reg[i].REGIONAL, 'value':Math.round(dato_test_reg[i].COTIZACIONES*0.30) };
  data_test_reg.push(oData);
}

Morris.Donut({
          element: 'graph_donut_test',
          data: data_test_reg,
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


});

</script>

@endsection