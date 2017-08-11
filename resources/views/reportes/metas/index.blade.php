@extends('layouts.main')

@section('content')

<style type="text/css">

.asd {
    font-weight: bold;
}
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
                    <h2>REGIONAL  <small>TODOS LOS PERIODOS </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <select class="select_style" data-width="100%" option="LA PAZ" name="REGIONAL" id="REGIONAL" >
                        <option value="TODOS">SELECCIONE UN PERIODO</option>
                        <option value="TODOS">TODOS LOS PERIODOS</option>
                        @foreach($peri as $per)
                          <option value="{{$per->periodo}}" >
                           {{$per->periodo}} 
                           </option>                
                        @endforeach
                      </select>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-12">               
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4> <strong>UNIDADES </strong> <i class="fa fa-car"></i></h4>
                        <span class="gauge-value pull-left"><strong>Actual: </strong>{{$TOTALES->REAL_TOTAL_UNIDADES}} Unidades</span><br>
                        <span class="gauge-value pull-left"><strong>Meta  : </strong>{{$TOTALES->META_TOTAL_UNIDADES}} Unidades</span><br>
                        <canvas width="200" height="130" id="gauge_unidades" class="" ></canvas>
                        <div class="goal-wrapper goal-unidades">
                          <span id="gauge-text-unidades" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>
                      <div class="col-md-6 sidebar-widget" align="center">
                        <h4 class="green"><strong>MONTO </strong> <i class="fa fa-dollar"></i></h4>
                        <span class="gauge-value pull-left "><strong>Actual: </strong>{{number_format($TOTALES->REAL_TOTAL_MONTO,2, '.', ',')}} Bs.</span><br>
                        <span class="gauge-value pull-left "><strong>Meta  : </strong>{{number_format($TOTALES->META_TOTAL_MONTOS,2, '.', ',')}} Bs.</span><br>
                        <canvas width="200" height="130" id="gauge_montos" class="" ></canvas>
                        <div class="goal-wrapper goal-montos">
                          <span id="gauge-text-montos" class="gauge-value gauge-chart ">0</span>
                          <span class="gauge-value ">%</span>
                        </div>
                      </div>

                    </div>
                <hr>
                   

                  </div>
                </div>
              </div>
      
    </div>

    <div class="row">
                    @foreach($SUCURSALES as $lp)

                    <?php 
                    if($lp-> REAL_UNIDADES >= $lp-> META_UNIDADES)
                    {
                        $per_uni = 100;
                        $pertxt_uni = ($lp-> REAL_UNIDADES *100)/$lp-> META_UNIDADES;
                    }
                    else
                    {
                      $per_uni = ($lp-> REAL_UNIDADES *100)/$lp-> META_UNIDADES;
                      $pertxt_uni = ($lp-> REAL_UNIDADES *100)/$lp-> META_UNIDADES;
                    }

                    if($lp-> REAL_MONTO >= $lp-> META_MONTOS)
                    {
                      $per_mont = 100;
                      $pertxt_mont = ($lp-> REAL_MONTO *100)/$lp-> META_MONTOS;
                    }
                    else
                    {
                      $per_mont = ($lp-> REAL_MONTO *100)/$lp-> META_MONTOS;
                      $pertxt_mont = ($lp-> REAL_MONTO *100)/$lp-> META_MONTOS;
                    }

                    ?>


                    <div class="clearfix"></div>

                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            {{ $lp-> SUCURSAL }}
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                             
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                                           
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
                                  <div @if ($pertxt_uni> 100) class="col-md-2 red asd animated infinite pulse" @else class="col-md-2" @endif>
                                    <span >{{number_format($pertxt_uni,2, '.', ',')}}%</span>
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
                                  <div  @if ($pertxt_mont> 100) class="col-md-2 red asd animated infinite pulse" @else class="col-md-2" @endif >
                                   <span > {{number_format($pertxt_mont,2, '.', ',')}}%</span>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class=" col-md-8 col-md-offset-2">
                                      <div class="row">
                                        <strong>Actual: </strong><span> {{ $lp-> REAL_UNIDADES }} Unidades</span>
                                      </div>
                                      <div class="row">
                                        <strong>Meta : </strong><span> {{ $lp-> META_UNIDADES }} Unidades</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class=" col-md-8 col-md-offset-2">
                                      <div class="row">
                                        <span class=""><strong>Actual: </strong> {{number_format( $lp-> REAL_MONTO ,2, '.', ',')}} Bs</span>
                                      </div>
                                      <div class="row">
                                        <span class=""><strong>Meta :  </strong>{{number_format( $lp-> META_MONTOS ,2, '.', ',')}} Bs</span>
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
                    @endforeach
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

var rtu = '<?php echo $TOTALES->REAL_TOTAL_UNIDADES; ?>' *1;
var mtu = '<?php echo $TOTALES->META_TOTAL_UNIDADES; ?>'*1;
var rtm = '<?php echo $TOTALES->REAL_TOTAL_MONTO; ?>' *1;
var mtm = '<?php echo $TOTALES->META_TOTAL_MONTOS; ?>'*1;


if(rtu>=mtu) 
{
  var max_rtu= (rtu *100)/mtu;
  var set_rtu= (rtu *100)/mtu;
  $(".goal-unidades").addClass("red asd animated infinite tada ");
}
else
{
  var set_rtu= (rtu *100)/mtu;
  var max_rtu=100;
}

if(rtm>mtm )
{
  var set_rtm=(rtm*100)/mtm;
  var max_rtm=(rtm*100)/mtm;
  $(".goal-montos").addClass("red asd animated infinite tada ");
}
else
{
  var set_rtm=(rtm*100)/mtm;
  var max_rtm=100;
}

var target_montos = document.getElementById('gauge_montos'); // your canvas element
var gauge_montos = new Gauge(target_montos).setOptions(opts); // create sexy gauge!
gauge_montos.maxValue =max_rtm; // set max gauge_montos value
gauge_montos.setMinValue(0);  // set min value
gauge_montos.animationSpeed = 100;
gauge_montos.set(set_rtm); // set actual value
gauge_montos.setTextField(document.getElementById("gauge-text-montos"));


var target_unidades = document.getElementById('gauge_unidades'); // your canvas element
var gauge_unidades = new Gauge(target_unidades).setOptions(opts2); // create sexy gauge!
gauge_unidades.maxValue = max_rtu; // set max gauge_unidades value
gauge_unidades.setMinValue(0);  // set min value
gauge_unidades.animationSpeed = 100;
gauge_unidades.set(set_rtu); // set actual value
gauge_unidades.setTextField(document.getElementById("gauge-text-unidades"));

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