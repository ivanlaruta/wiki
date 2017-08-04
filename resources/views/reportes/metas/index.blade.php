@extends('layouts.main')

@section('content')
<style type="text/css">
  .bg-default {
  
  background-color: #73879c;
 
}
</style>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <h3>
        OBEJTIVOS
      </h3>

    </div>
  <hr>
    <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$LA_PAZ}} <small>PERIODO</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-12">               
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4> UNIDADES <i class="fa fa-car"></i></h4>
                        <canvas width="170" height="100" id="gauge_lpz2" class="" ></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text-lpz2" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4 class="green">MONTO <i class="fa fa-dollar"></i></h4>
                        <canvas width="170" height="100" id="gauge_lpz" class="" ></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text-lpz" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 bg-white progress_summary">
                    @foreach($SUCURSALES_LA_PAZ as $lp)
                      <div class="row">
                        <div class="progress_title">
                          <span class="left" style="text-decoration: underline;">{{ $lp-> SUCURSAL }}</span>
                          <span class="right"></span>
                          <div class="clearfix"></div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-xs-3">
                            <i class="fa fa-car"></i>
                            <span> XX de {{ $lp-> meta_unidades }}</span>
                          </div>
                          <div class="col-xs-8">
                            <div class="progress progress_sm"> 
                              <div class="progress-bar bg-default" role="progressbar" data-transitiongoal="68"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span>68%</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-3">
                            <i class="fa fa-dollar green"></i>
                            <span> XXXX de {{ $lp-> meta_monto }}</span>
                          </div>
                          <div class="col-xs-8">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span>79%</span>
                          </div>
                        </div>
                      </div>
                    @endforeach
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
var opts2 = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#73879c',
      colorStop: '#73879c',
      strokeColor: '#F0F3F3',
      generateGradient: true
};
var target_lpz = document.getElementById('gauge_lpz'); // your canvas element
var gauge_lpz = new Gauge(target_lpz).setOptions(opts); // create sexy gauge!
gauge_lpz.maxValue = 100; // set max gauge_lpz value
gauge_lpz.setMinValue(0);  // set min value
gauge_lpz.animationSpeed = 100;
gauge_lpz.set(95); // set actual value
gauge_lpz.setTextField(document.getElementById("gauge-text-lpz"));

var target_lpz2 = document.getElementById('gauge_lpz2'); // your canvas element
var gauge_lpz2 = new Gauge(target_lpz2).setOptions(opts2); // create sexy gauge!
gauge_lpz2.maxValue = 100; // set max gauge_lpz2 value
gauge_lpz2.setMinValue(0);  // set min value
gauge_lpz2.animationSpeed = 100;
gauge_lpz2.set(89); // set actual value
gauge_lpz2.setTextField(document.getElementById("gauge-text-lpz2"));

// var target_cocha = document.getElementById('gauge_cocha'); // your canvas element
// var gauge_cocha = new Gauge(target_cocha).setOptions(opts); // create sexy gauge!
// gauge_cocha.maxValue = 100; // set max gauge_cocha value
// gauge_cocha.setMinValue(0);  // set min value
// gauge_cocha.animationSpeed = 250;
// gauge_cocha.set(90); // set actual value
// gauge_cocha.setTextField(document.getElementById("gauge-text-cocha"));

// var target_santa = document.getElementById('gauge_santa'); // your canvas element
// var gauge_santa = new Gauge(target_santa).setOptions(opts); // create sexy gauge!
// gauge_santa.maxValue = 100; // set max gauge_santa value
// gauge_santa.setMinValue(0);  // set min value
// gauge_santa.animationSpeed = 250;
// gauge_santa.set(75); // set actual value
// gauge_santa.setTextField(document.getElementById("gauge-text-santa"));

// var target_ea = document.getElementById('gauge_ea'); // your canvas element
// var gauge_ea = new Gauge(target_ea).setOptions(opts); // create sexy gauge!
// gauge_ea.maxValue = 100; // set max gauge_ea value
// gauge_ea.setMinValue(0);  // set min value
// gauge_ea.animationSpeed = 250;
// gauge_ea.set(25); // set actual value
// gauge_ea.setTextField(document.getElementById("gauge-text-ea"));

// var target_pt = document.getElementById('gauge_pt'); // your canvas element
// var gauge_pt = new Gauge(target_pt).setOptions(opts); // create sexy gauge!
// gauge_pt.maxValue = 100; // set max gauge_pt value
// gauge_pt.setMinValue(0);  // set min value
// gauge_pt.animationSpeed = 250;
// gauge_pt.set(15); // set actual value
// gauge_pt.setTextField(document.getElementById("gauge-text-pt"));



</script>
@endsection