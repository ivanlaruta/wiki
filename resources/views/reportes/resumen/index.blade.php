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
              <span class="count_top"><i class="fa fa-user"></i> COTIZACIONES {{$año_actual}}</span>
              <div class="count">{{$total_cotizaciones}}</div>
              <span class="sparkline_cotizaciones" >
                <canvas width="300" height="30" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span><br>
              <span class="count_bottom txt_cotiza"><i class="green"><i class="fa fa-sort-asc txt_cotiza"></i></i> </span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> TEST DRIVE {{$año_actual}}</span>
              <div class="count">0</div>
              <span class="sparkline_test_drive" >
                <canvas width="300" height="30" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span><br>
              <span class="count_bottom txt_test_drive"><i class="red"><i class="fa fa-sort-desc"></i></i> </span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> RESERVAS {{$año_actual}}</span>
              <div class="count">{{$total_reservas}}</div>
              <span class="sparkline_reservas" >
                <canvas width="300" height="30" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span><br>
              <span class="count_bottom txt_reservas"><i class="green"><i class="fa fa-sort-asc"></i></i> </span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> FACTURAS {{$año_actual}}</span>
              <div class="count">{{$total_facturas}}</div>
              <span class="sparkline_facturas" >
                <canvas width="300" height="30" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
              </span><br>
              <span class="count_bottom txt_facturas"><i class="green"><i class="fa fa-sort-asc"></i></i> </span>
            </div>
          </div>


            <div class="row">
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

var values_cotizaciones = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];
var dato_cotizaciones  = <?php echo json_encode($cotizaciones); ?>;
var len_cotizaciones = dato_cotizaciones.length;

for (var i = 0; i < len_cotizaciones; i++) {
   values_cotizaciones[i]=dato_cotizaciones[i].COTIZACIONES;
}

$('.txt_cotiza').text('POR MES');
  
$(".sparkline_cotizaciones").sparkline(values_cotizaciones, {
        type: 'bar',
        
        height: '40',
        barWidth: 10,
        colorMap: {
          '0': '#a1a1a1'  
        },
        barSpacing: 7,
        barColor: '#26B99A',
        chartRangeMin: 12,
      });

$('.sparkline_cotizaciones').bind('sparklineRegionChange', function(ev) {
    var sparkline = ev.sparklines[0];
        var region = sparkline.getCurrentRegionFields();
        var value = region.y;
        //console.log(region);
        if(region[0].offset == 0){mes='ENERO';}
        if(region[0].offset == 1){mes='FEBRERO';}
        if(region[0].offset == 2){mes='MARZO';}
        if(region[0].offset == 3){mes='ABRIL';}
        if(region[0].offset == 4){mes='MAYO';}
        if(region[0].offset == 5){mes='JUNIO';}
        if(region[0].offset == 6){mes='JULIO';}
        if(region[0].offset == 7){mes='AGOSTO';}
        if(region[0].offset == 8){mes='SEPTIEMBRE';}
        if(region[0].offset == 9){mes='OCTUBRE';}
        if(region[0].offset == 10){mes='NOVIEMBE';}
        if(region[0].offset == 11){mes='DICIEMBRE';}

    $('.txt_cotiza').text(mes + " : "+region[0].value);
}).bind('mouseleave', function() {
    $('.txt_cotiza').text('POR MES');
});



///////////////////////////////////////////////////////////////

var values_test_drive = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];


$('.txt_test_drive').text('POR MES');
  
$(".sparkline_test_drive").sparkline(values_test_drive, {
        type: 'bar',
        
        height: '40',
        barWidth: 10,
        colorMap: {
          '0': '#a1a1a1'  
        },
        barSpacing: 7,
        barColor: '#26B99A',
        chartRangeMin: 12,
      });

$('.sparkline_test_drive').bind('sparklineRegionChange', function(ev) {
    var sparkline = ev.sparklines[0];
        var region = sparkline.getCurrentRegionFields();
        var value = region.y;
        //console.log(region);
        if(region[0].offset == 0){mes='ENERO';}
        if(region[0].offset == 1){mes='FEBRERO';}
        if(region[0].offset == 2){mes='MARZO';}
        if(region[0].offset == 3){mes='ABRIL';}
        if(region[0].offset == 4){mes='MAYO';}
        if(region[0].offset == 5){mes='JUNIO';}
        if(region[0].offset == 6){mes='JULIO';}
        if(region[0].offset == 7){mes='AGOSTO';}
        if(region[0].offset == 8){mes='SEPTIEMBRE';}
        if(region[0].offset == 9){mes='OCTUBRE';}
        if(region[0].offset == 10){mes='NOVIEMBE';}
        if(region[0].offset == 11){mes='DICIEMBRE';}

    $('.txt_test_drive').text(mes + " : "+region[0].value);
}).bind('mouseleave', function() {
    $('.txt_test_drive').text('POR MES');
});


///////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////

var values_reservas = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];

var dato_reservas  = <?php echo json_encode($reservas); ?>;
var len_reservas = dato_reservas.length;

for (var i = 0; i < len_reservas; i++) {
   values_reservas[i]=dato_reservas[i].RESERVADOS;
}

$('.txt_reservas').text('POR MES');
  
$(".sparkline_reservas").sparkline(values_reservas, {
        type: 'bar',
        
        height: '40',
        barWidth: 10,
        colorMap: {
          '0': '#a1a1a1'  
        },
        barSpacing: 7,
        barColor: '#26B99A',
        chartRangeMin: 12,
      });

$('.sparkline_reservas').bind('sparklineRegionChange', function(ev) {
    var sparkline = ev.sparklines[0];
        var region = sparkline.getCurrentRegionFields();
        var value = region.y;
        //console.log(region);
        if(region[0].offset == 0){mes='ENERO';}
        if(region[0].offset == 1){mes='FEBRERO';}
        if(region[0].offset == 2){mes='MARZO';}
        if(region[0].offset == 3){mes='ABRIL';}
        if(region[0].offset == 4){mes='MAYO';}
        if(region[0].offset == 5){mes='JUNIO';}
        if(region[0].offset == 6){mes='JULIO';}
        if(region[0].offset == 7){mes='AGOSTO';}
        if(region[0].offset == 8){mes='SEPTIEMBRE';}
        if(region[0].offset == 9){mes='OCTUBRE';}
        if(region[0].offset == 10){mes='NOVIEMBE';}
        if(region[0].offset == 11){mes='DICIEMBRE';}

    $('.txt_reservas').text(mes + " : "+region[0].value);
}).bind('mouseleave', function() {
    $('.txt_reservas').text('POR MES');
});


///////////////////////////////////////////////////////////////


var values_facturas = [0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0];

var dato_facturas  = <?php echo json_encode($facturas); ?>;
var len_facturas = dato_facturas.length;

for (var i = 0; i < len_facturas; i++) {
   values_facturas[i]=dato_facturas[i].FACTURADOS;
}

$('.txt_facturas').text('POR MES');
  
$(".sparkline_facturas").sparkline(values_facturas, {
        type: 'bar',
        
        height: '40',
        barWidth: 10,
        colorMap: {
          '0': '#a1a1a1'  
        },
        barSpacing: 7,
        barColor: '#26B99A',
        chartRangeMin: 12,
      });

$('.sparkline_facturas').bind('sparklineRegionChange', function(ev) {
    var sparkline = ev.sparklines[0];
        var region = sparkline.getCurrentRegionFields();
        var value = region.y;
        //console.log(region);
        if(region[0].offset == 0){mes='ENERO';}
        if(region[0].offset == 1){mes='FEBRERO';}
        if(region[0].offset == 2){mes='MARZO';}
        if(region[0].offset == 3){mes='ABRIL';}
        if(region[0].offset == 4){mes='MAYO';}
        if(region[0].offset == 5){mes='JUNIO';}
        if(region[0].offset == 6){mes='JULIO';}
        if(region[0].offset == 7){mes='AGOSTO';}
        if(region[0].offset == 8){mes='SEPTIEMBRE';}
        if(region[0].offset == 9){mes='OCTUBRE';}
        if(region[0].offset == 10){mes='NOVIEMBE';}
        if(region[0].offset == 11){mes='DICIEMBRE';}

    $('.txt_facturas').text(mes + " : "+region[0].value);
}).bind('mouseleave', function() {
    $('.txt_facturas').text('POR MES');
});


/////////////////////////////////////////////////////////////////

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




</script>

@endsection