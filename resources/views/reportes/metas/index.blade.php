@extends('layouts.main')

@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <h3>
        OBEJTIVOS
      </h3>

    </div>
   <hr>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel ">
          <div class="x_title">
            <h2>La Paz <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">            
            <div class="col-xs-12" align="center">
              {{-- <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas> --}}

              <canvas  width="200" height="130" id="gauge_lpz"></canvas>
              <div class="goal-wrapper">
                <span id="gauge-value" class="gauge-value gauge-chart pull-left red">0</span>
                <span class="gauge-value pull-left red">%</span>
                <strong><span id="gauge-text-lpz" class="gauge-value gauge-chart">0</span></strong>
                <span class="gauge-value">%</span>
                <span id="goal-text" class="goal-value pull-right green">100%</span>
              </div>
              <hr>
              <div class="col-xs-12 bg-white progress_summary">
                <div class="row">
                  <div class="progress_title">
                    <span class="left">OFICINA CENTRAL</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>80%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">OFICINA - CALACOTO</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="68"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>68%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA MIRAFLORES</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="59"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>59%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">PLANTA CURVA DE HOLGUIN</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="36"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>36%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">OFICINA CALACOTO YAMAHA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>20%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel ">
          <div class="x_title">
            <h2>Cochabamba <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">            
            <div class="col-xs-12" align="center">
              {{-- <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas> --}}
              <canvas width="200" height="130" id="gauge_cocha" ></canvas>
              <div class="goal-wrapper">
                <span id="gauge-value" class="gauge-value gauge-chart pull-left red">0</span>
                <span class="gauge-value pull-left red">%</span>
                <strong><span id="gauge-text-cocha" class="gauge-value gauge-chart">0</span></strong>
                <span class="gauge-value">%</span>
                <span id="goal-text" class="goal-value pull-right green">100%</span>
              </div>
              <hr>
              <div class="col-xs-12 bg-white progress_summary">
                
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA CBBA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="68"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>68%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">SUC, Km7 CBBA</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="59"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>59%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">YAMAHA PAPA PAULO</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="36"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>36%</span>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel ">
          <div class="x_title">
            <h2>Santa Cruz <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">            
            <div class="col-xs-12" align="center">
              {{-- <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas> --}}
              <canvas width="200" height="130" id="gauge_santa" ></canvas>
              <div class="goal-wrapper">
                <span id="gauge-value" class="gauge-value gauge-chart pull-left red">0</span>
                <span class="gauge-value pull-left red">%</span>
                <strong><span id="gauge-text-santa" class="gauge-value gauge-chart">0</span></strong>
                <span class="gauge-value">%</span>
                <span id="goal-text" class="goal-value pull-right green">100%</span>
              </div>
              <hr>
              <div class="col-xs-12 bg-white progress_summary">
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA SCZ BANZER</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="98"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>98%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">OF, SCZ LAS BRISAS</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>87%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA SCZ 3 PASOS AL FRENTE</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="67"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>67%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">SUCURSAL MONTERO SCZ</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>40%</span>
                  </div>
                </div>
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA SCZ EQUIPETROL</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="20"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>20%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel ">
          <div class="x_title">
            <h2>El Alto<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">            
            <div class="col-xs-12" align="center">
              {{-- <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas> --}}
              <canvas width="200" height="130" id="gauge_ea" ></canvas>
              <div class="goal-wrapper">
                <span id="gauge-value" class="gauge-value gauge-chart pull-left red">0</span>
                <span class="gauge-value pull-left red">%</span>
                <strong><span id="gauge-text-ea" class="gauge-value gauge-chart">0</span></strong>
                <span class="gauge-value">%</span>
                <span id="goal-text" class="goal-value pull-right green">100%</span>
              </div>
              <hr>
              <div class="col-xs-12 bg-white progress_summary">
                <div class="row">
                  <div class="progress_title">
                    <span class="left">PLANTA EL ALTO SHOW ROOM</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="x_panel ">
          <div class="x_title">
            <h2> Potosi <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">            
            <div class="col-xs-12" align="center">
              {{-- <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas> --}}
              <canvas width="200" height="130" id="gauge_pt" ></canvas>
              <div class="goal-wrapper">
                <span id="gauge-value" class="gauge-value gauge-chart pull-left red">0</span>
                <span class="gauge-value pull-left red">%</span>
                <strong><span id="gauge-text-pt" class="gauge-value gauge-chart">0</span></strong>
                <span class="gauge-value">%</span>
                <span id="goal-text" class="goal-value pull-right green">100%</span>
              </div>
              <hr>
              <div class="col-xs-12 bg-white progress_summary">
                <div class="row">
                  <div class="progress_title">
                    <span class="left">TOYOSA POTOSI</span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-xs-10">
                    <div class="progress progress_sm">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                  </div>
                  <div class="col-xs-2 more_info">
                    <span>80%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
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
var opts = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#1ABC9C',
      colorStop: '#1ABC9C',
      strokeColor: '#F0F3F3',
      generateGradient: true
};
var target_lpz = document.getElementById('gauge_lpz'); // your canvas element
var gauge_lpz = new Gauge(target_lpz).setOptions(opts); // create sexy gauge!
gauge_lpz.maxValue = 100; // set max gauge_lpz value
gauge_lpz.setMinValue(0);  // set min value
gauge_lpz.animationSpeed = 250;
gauge_lpz.set(45); // set actual value
gauge_lpz.setTextField(document.getElementById("gauge-text-lpz"));

var target_cocha = document.getElementById('gauge_cocha'); // your canvas element
var gauge_cocha = new Gauge(target_cocha).setOptions(opts); // create sexy gauge!
gauge_cocha.maxValue = 100; // set max gauge_cocha value
gauge_cocha.setMinValue(0);  // set min value
gauge_cocha.animationSpeed = 250;
gauge_cocha.set(90); // set actual value
gauge_cocha.setTextField(document.getElementById("gauge-text-cocha"));

var target_santa = document.getElementById('gauge_santa'); // your canvas element
var gauge_santa = new Gauge(target_santa).setOptions(opts); // create sexy gauge!
gauge_santa.maxValue = 100; // set max gauge_santa value
gauge_santa.setMinValue(0);  // set min value
gauge_santa.animationSpeed = 250;
gauge_santa.set(75); // set actual value
gauge_santa.setTextField(document.getElementById("gauge-text-santa"));

var target_ea = document.getElementById('gauge_ea'); // your canvas element
var gauge_ea = new Gauge(target_ea).setOptions(opts); // create sexy gauge!
gauge_ea.maxValue = 100; // set max gauge_ea value
gauge_ea.setMinValue(0);  // set min value
gauge_ea.animationSpeed = 250;
gauge_ea.set(25); // set actual value
gauge_ea.setTextField(document.getElementById("gauge-text-ea"));

var target_pt = document.getElementById('gauge_pt'); // your canvas element
var gauge_pt = new Gauge(target_pt).setOptions(opts); // create sexy gauge!
gauge_pt.maxValue = 100; // set max gauge_pt value
gauge_pt.setMinValue(0);  // set min value
gauge_pt.animationSpeed = 250;
gauge_pt.set(15); // set actual value
gauge_pt.setTextField(document.getElementById("gauge-text-pt"));

</script>
@endsection