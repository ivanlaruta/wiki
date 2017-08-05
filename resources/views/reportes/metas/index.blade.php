@extends('layouts.main')

@section('content')

<style type="text/css">

.select_style 
{
  background: #FFF;
  overflow: hidden;
  display: inline-block;
  color: #525252;
  font-weight: 300;
  -webkit-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
  -moz-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
  border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
  -webkit-box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
  -moz-box-shadow: 0 0 5px rgba(123,123,123,.2);
  box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
  border: solid 1px #DADADA;
  font-family: "helvetica neue",arial;
  position: relative;
  cursor: pointer;
  padding-right:20px;

}
.select_style span
{
  position: absolute;
  right: 10px;
  width: 8px;
  height: 8px;
  background: url(http://projects.authenticstyle.co.uk/niceselect/arrow.png) no-repeat;
  top: 50%;
  margin-top: -4px;
}
.select_style select
{
  -webkit-appearance: none;
  appearance:none;
  width:120%;
  background:none;
  background:transparent;
  border:none;
  outline:none;
  cursor:pointer;
  padding:7px 10px;
}
  .bg-default {
  background-color: #73879c;
 
}

</style>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>
        METAS REGIONALES
      </h3>
      </div>
      
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <select class="select_style" data-width="100%" option="LA PAZ" name="REGIONAL" id="REGIONAL" >
              <option value="TODOS">SELECCIONE UNA REGIONAL</option>
              <option value="TODOS">TODAS LAS REGIONALES</option>
              @foreach($ubica as $ub)
                <option value="{{$ub->REGIONAL}}" >
                 {{$ub->REGIONAL}} 
                 </option>                
              @endforeach
            </select>
         
        </div>
      </div>        
    </div>
  <hr>
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$LA_PAZ}} <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <select class="select_style" data-width="100%" option="" name="REGIONAL" id="REGIONAL" >
                        <option value="TODOS">SELECCIONE UN PERIODO</option>
                        <option value="TODOS">TODOS LOS PERIODOS</option>
                        <option value="TODOS">2017-01</option>
                        <option value="TODOS">2017-02</option>
                        <option value="TODOS">2017-03</option>
                        <option value="TODOS">2017-04</option>
                        <option value="TODOS">2017-05</option>
                        <option value="TODOS">2017-06</option>
                        <option value="TODOS">2017-07</option>
             
            </select>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-12">               
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4> UNIDADES <i class="fa fa-car"></i></h4>
                        <span class="gauge-value pull-left">Actual:{{$TOTALES_LA_PAZ->REAL_TOTAL_UNIDADES}} Unidades</span><br>
                        <span class="gauge-value pull-left">Meta  :{{$TOTALES_LA_PAZ->META_TOTAL_UNIDADES}} Unidades</span><br>
                        <canvas width="200" height="130" id="gauge_lpz2" class="" ></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text-lpz2" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4 class="green">MONTO <i class="fa fa-dollar"></i></h4>
                        <span class="gauge-value pull-left green">Actual:{{number_format($TOTALES_LA_PAZ->REAL_TOTAL_MONTO,2, '.', ',')}} Bs.</span><br>
                        <span class="gauge-value pull-left green">Meta  :{{number_format($TOTALES_LA_PAZ->META_TOTAL_MONTOS,2, '.', ',')}} Bs.</span><br>
                        <canvas width="200" height="130" id="gauge_lpz" class="" ></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text-lpz" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>

                    </div>
                <hr>
                    <div class="col-xs-12 bg-white ">
                    @foreach($SUCURSALES_LA_PAZ as $lp)

                    <?php 
                    if($lp-> REAL_UNIDADES >= $lp-> META_UNIDADES)
                    {
                        $per_uni = 100;
                    }
                    else
                    {
                      $per_uni = ($lp-> REAL_UNIDADES *100)/$lp-> META_UNIDADES;
                    }

                    if($lp-> REAL_MONTO >= $lp-> META_MONTOS)
                    {
                        $per_mont = 100;
                    }
                    else
                    {
                      $per_mont = ($lp-> REAL_MONTO *100)/$lp-> META_MONTOS;
                    }

                    ?>
                    
                      <div class="row">
                      <hr>
                        <div class="progress_title" align="center">
                          <span class="center" style="text-decoration: underline;"><strong>{{ $lp-> SUCURSAL }}</strong></span>
                          <span class="right"></span>
                          <div class="clearfix"></div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="col-md-1 ">
                                <i class="fa fa-car"></i>
                              </div>
                              <div class="col-md-9">
                                <div class="progress progress progress_sm">
                                  <div class="progress-bar progress-bar-striped active bg-default" role="progressbar"  data-transitiongoal= {{number_format($per_uni,2, '.', ',')}}>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <span>{{number_format($per_uni,2, '.', ',')}}%</span>
                              </div>
                              
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                              <div class="col-md-1 ">
                                <i class="fa fa-dollar green"></i>
                              </div>
                              <div class="col-md-9">
                                <div class="progress progress progress_sm">
                                  <div class="progress-bar progress-bar-success progress-bar-striped active " role="progressbar" data-transitiongoal= {{number_format($per_mont,2, '.', ',')}}>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2">
                               <span> {{number_format($per_mont,2, '.', ',')}}%</span>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class=" col-md-8 col-md-offset-2">
                                  <div class="row">
                                    Actual:<span> {{ $lp-> REAL_UNIDADES }} Unidades</span>
                                  </div>
                                  <div class="row">
                                    Meta:<span> {{ $lp-> META_UNIDADES }} Unidades</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class=" col-md-8 col-md-offset-2">
                                  <div class="row">
                                    <span class="green">Actual: {{number_format( $lp-> REAL_MONTO ,2, '.', ',')}} Bs</span>
                                  </div>
                                  <div class="row">
                                    <span class="green">Meta: {{number_format( $lp-> META_MONTOS ,2, '.', ',')}} Bs</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                         {{--  <div class="col-xs-3">
                            <i class="fa fa-car"></i>
                            <span> {{ $lp-> REAL_UNIDADES }} de {{ $lp-> META_UNIDADES }}</span>
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-default" role="progressbar" data-transitiongoal= {{number_format($per_uni,2, '.', ',')}}></div>
                            </div>
  
                          </div>
                          <div class="col-xs-2 more_info">
                            <span>{{number_format($per_uni,2, '.', ',')}}%</span>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-3">
                            <i class="fa fa-dollar green"></i>
                            <span>{{number_format( $lp-> REAL_MONTO,2, '.', ',')}} de {{number_format($lp-> META_MONTOS,2, '.', ',')}} </span>
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal={{number_format($per_mont,2, '.', ',')}}></div>
                            </div>
                          </div>
                          <div class="col-xs-2 more_info">
                            <span>{{number_format($per_mont,2, '.', ',')}}%</span>
                          </div>
                        </div>
                      </div> --}}
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


if(('<?php echo $TOTALES_LA_PAZ->REAL_TOTAL_UNIDADES; ?>' *1)>('<?php echo $TOTALES_LA_PAZ->META_TOTAL_UNIDADES; ?>'*1) ){
  var REAL_TOTAL_UNIDADES_LPZ=100;
}
else
{
  var REAL_TOTAL_UNIDADES_LPZ=('<?php echo $TOTALES_LA_PAZ->REAL_TOTAL_UNIDADES; ?>' *100)/'<?php echo $TOTALES_LA_PAZ->META_TOTAL_UNIDADES; ?>';
}

if(('<?php echo $TOTALES_LA_PAZ->REAL_TOTAL_MONTO; ?>' *1)>('<?php echo $TOTALES_LA_PAZ->META_TOTAL_MONTOS; ?>'*1) ){
  var REAL_TOTAL_MONTO_LPZ=100;
}
else
{
  var REAL_TOTAL_MONTO_LPZ=('<?php echo $TOTALES_LA_PAZ->REAL_TOTAL_MONTO; ?>'*100)/'<?php echo $TOTALES_LA_PAZ->META_TOTAL_MONTOS; ?>';
}




var target_lpz = document.getElementById('gauge_lpz'); // your canvas element
var gauge_lpz = new Gauge(target_lpz).setOptions(opts); // create sexy gauge!
gauge_lpz.maxValue =100; // set max gauge_lpz value
gauge_lpz.setMinValue(0);  // set min value
gauge_lpz.animationSpeed = 100;
gauge_lpz.set(REAL_TOTAL_MONTO_LPZ); // set actual value
gauge_lpz.setTextField(document.getElementById("gauge-text-lpz"));



var target_lpz2 = document.getElementById('gauge_lpz2'); // your canvas element
var gauge_lpz2 = new Gauge(target_lpz2).setOptions(opts2); // create sexy gauge!
gauge_lpz2.maxValue = 100; // set max gauge_lpz2 value
gauge_lpz2.setMinValue(0);  // set min value
gauge_lpz2.animationSpeed = 100;
gauge_lpz2.set(REAL_TOTAL_UNIDADES_LPZ); // set actual value
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