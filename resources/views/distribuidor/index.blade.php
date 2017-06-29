@extends('layouts.main')

@section('content')
<style type="text/css">


.panel-success {
  border-color: #c7d3e0;
}
.panel-success > .panel-heading {
  color: #14b193;
  background-color: #ffffff;
  border-color: #c7d3e0;
}

.panel-danger {
  border-color: #c7d3e0;
}
.panel-danger > .panel-heading {
  color: #c62222;
  background-color: #ffffff;
  border-color: #c7d3e0;
}

.panel-default {
  border-color: #c7d3e0;
}
.panel-default > .panel-heading {
  color: #7e8fa2;
  background-color: #ffffff;
  border-color: #c7d3e0;
}

</style>

        <div class="right_col" role="main">
          <div class="">


          <br />
            


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Solcitudes /<small>Estados</small></h3>
                  </div>
                </div>
              </div>

                           <!-- top tiles -->
          <div class="row tile_count" align="center">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Borradores</span>
              <div class="count" align="center">{{$borradores}}</div>
              <span class="count_bottom"><i class="green">4% </i> <a href="#">Ver detalle </a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> En espera de aprobacion</span>
              <div class="count" align="center">{{$espera}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> <a href="#">Ver detalle </a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Aprobados</span>
              <div class="count green"  align="center">{{$aprobados}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> <a href="#">Ver detalle </a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Sin enviar</span>
              <div class="count red" align="center">{{$sin_enviar}}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> <a href="#">Ver detalle </a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Enviados parcialmente</span>
              <div class="count" align="center">{{$envio_parcial}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> <a href="#">Ver detalle </a></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top" align="center"><i class="fa fa-user"></i> Enviados .</span>
              <div class="count">{{$enviados }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> <a href="#">Ver detalle </a></span>
            </div>
          </div>
          <!-- /top tiles -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">{{-- 
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Envios por regional</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="mainbb" style="height:350px;"></div>

                  </div>
                </div>
               --}}</div>

            </div>
                <div class="clearfix"></div>
              </div>
          </div>
          
<br>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Reposiciones /<small>alertas</small></h3>
                  </div>
                  <div class="col-md-6"></div>
                </div>
              </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-6">
                          <div class="animated flipInY panel panel-default">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-clock-o fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                          <h1 style="font-weight: bold;">{{$regulares}}</h1>
                                          <div>Regulares</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      
                      <div class="col-lg-3 col-md-6">
                          <div class=" animated flipInY panel panel-default">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-lock fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                         <h1 style="font-weight: bold;">{{$extraordinarios}}</h1>
                                          <div>Extraordinarios</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="animated flipInY panel panel-danger">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-support fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                          <h1 style="font-weight: bold;">7</h1>
                                          <div>Alertas stock min</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="animated flipInY panel panel-success">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa  fa-th-list fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                          <h1 style="font-weight: bold;">9</h1>
                                          <div>Solicitudes automaticas</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                    </div>


                <div class="col-md-9 col-sm-9 col-xs-12">
                  {{-- <div id="chart_plot_01" class="demo-placeholder"></div> --}}
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">{{-- 
                  <div class="x_title">
                    <h2>Reposiciones</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>TOYOTA</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>YAMAHA</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>LEXUS</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                 --}}</div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>


        </div>
         
@endsection
@section('scripts')
<script type="text/javascript">
var theme = {
          color: [
            '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
            '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
            itemGap: 8,
            textStyle: {
              fontWeight: 'normal',
              color: '#408829'
            }
          },

          dataRange: {
            color: ['#1f610a', '#97b58d']
          },

          toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
              type: 'line',
              lineStyle: {
                color: '#408829',
                type: 'dashed'
              },
              crossStyle: {
                color: '#408829'
              },
              shadowStyle: {
                color: 'rgba(200,200,200,0.3)'
              }
            }
          },

          dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
          },
          grid: {
            borderWidth: 0
          },

          categoryAxis: {
            axisLine: {
              lineStyle: {
                color: '#408829'
              }
            },
            splitLine: {
              lineStyle: {
                color: ['#eee']
              }
            }
          },

          valueAxis: {
            axisLine: {
              lineStyle: {
                color: '#408829'
              }
            },
            splitArea: {
              show: true,
              areaStyle: {
                color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
              }
            },
            splitLine: {
              lineStyle: {
                color: ['#eee']
              }
            }
          },
          timeline: {
            lineStyle: {
              color: '#408829'
            },
            controlStyle: {
              normal: {color: '#408829'},
              emphasis: {color: '#408829'}
            }
          },

          k: {
            itemStyle: {
              normal: {
                color: '#68a54a',
                color0: '#a9cba2',
                lineStyle: {
                  width: 1,
                  color: '#408829',
                  color0: '#86b379'
                }
              }
            }
          },
          map: {
            itemStyle: {
              normal: {
                areaStyle: {
                  color: '#ddd'
                },
                label: {
                  textStyle: {
                    color: '#c12e34'
                  }
                }
              },
              emphasis: {
                areaStyle: {
                  color: '#99d2dd'
                },
                label: {
                  textStyle: {
                    color: '#c12e34'
                  }
                }
              }
            }
          },
          force: {
            itemStyle: {
              normal: {
                linkStyle: {
                  strokeColor: '#408829'
                }
              }
            }
          },
          chord: {
            padding: 4,
            itemStyle: {
              normal: {
                lineStyle: {
                  width: 1,
                  color: 'rgba(128, 128, 128, 0.5)'
                },
                chordStyle: {
                  lineStyle: {
                    width: 1,
                    color: 'rgba(128, 128, 128, 0.5)'
                  }
                }
              },
              emphasis: {
                lineStyle: {
                  width: 1,
                  color: 'rgba(128, 128, 128, 0.5)'
                },
                chordStyle: {
                  lineStyle: {
                    width: 1,
                    color: 'rgba(128, 128, 128, 0.5)'
                  }
                }
              }
            }
          },
          gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
              show: true,
              lineStyle: {
                color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                width: 8
              }
            },
            axisTick: {
              splitNumber: 10,
              length: 12,
              lineStyle: {
                color: 'auto'
              }
            },
            axisLabel: {
              textStyle: {
                color: 'auto'
              }
            },
            splitLine: {
              length: 18,
              lineStyle: {
                color: 'auto'
              }
            },
            pointer: {
              length: '90%',
              color: 'auto'
            },
            title: {
              textStyle: {
                color: '#333'
              }
            },
            detail: {
              textStyle: {
                color: 'auto'
              }
            }
          },
          textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
          }
        };


 var myChart = echarts.init(document.getElementById('mainbb'), theme); 
        
        var option = {
    title : {
        text: 'Solicitudes',
        subtext: 'Regionales'
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['TOYOTA','LEXUS','YAMAHA']
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: false},
            dataView : {show: false, readOnly: false},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: false},
            saveAsImage : {show: false}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['TJ','PTS','SC','CBJ','CBB','EA','OR','BN','LP']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
   series: [{
            name: 'TOYOTA',
            type: 'bar',
            data: [0,1,6,5,7,0,8,1,9],
            markPoint: {
            data: [{
              type: 'max',
              name: 'Solicitudes'
            }, {
              type: 'min',
              name: 'Solicitudes'
            }]
            },
            markLine: {
            data: [{
              type: 'average',
              name: 'Solicitudes'
            }]
            }
          }, {
            name: 'YAMAHA',
            type: 'bar',
            data: [7,2,4,2,4,2,2,2,4],
            markPoint: {
            data: [{
              type: 'max',
              name: 'Solicitudes'
            }, {
              type: 'min',
              name: 'Solicitudes'
            }]
            },
            markLine: {
            data: [{
              type: 'average',
              name: 'Solicitudes'
            }]
            }
          }, {
            name: 'LEXUS',
            type: 'bar',
            data: [9,6,3,4,4,7,3,8,4],
            markPoint: {
            data: [{
               type: 'max',
              name: 'Solicitudes'
            }, {
              type: 'min',
              name: 'Solicitudes'
            }]
            },
            markLine: {
            data: [{
              type: 'average',
              name: 'Solicitudes'
            }]
            }
          }]
};

        // Load data into the ECharts instance 
        myChart.setOption(option); 


</script>
@endsection