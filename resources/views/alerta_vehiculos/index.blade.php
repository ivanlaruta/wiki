@extends('layouts.main')

@section('content')
<style type="text/css">


.panel-success {
  border-color: #9ec6ba;
}
.panel-success > .panel-heading {
  color: #0da276;
  background-color: #ecf9f5;
  border-color: #9ec6ba;
}

.
.panel-default {
  border-color: #c7d3e0;
}
.panel-default > .panel-heading {
  color: #3f5367;
  background-color: #ffffff;
  border-color: #c7d3e0;
}

</style>

        <div class="right_col" role="main">
          <div class="">


          <br />
            


          
<br>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Vehiculos /<small>Estacionados por tiempo.</small></h3>
                  </div>
                  <div class="col-md-6"></div>
                </div>
              </div>

                  <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="animated flipInY panel panel-success">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-anchor fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                      <div>Mas de 60 dias</div>
                                          <h1 style="font-weight: bold;">{{$dias60}}</h1>
                                          
                                          <div>Referencia: {{date('d/m/Y',strtotime($ult_60))}}</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-search-plus"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class=" animated flipInY panel panel-default">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-eye fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                          <div>Mas de 6 meses</div>
                                         <h1 style="font-weight: bold;">{{$meses6}}</h1>
                                          <div>Referencia: {{date('d/m/Y',strtotime($ult_6mes))}}</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-search-plus"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="animated flipInY panel panel-default">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa fa-fire fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                      <div>Mas de un año</div>
                                          <h1 style="font-weight: bold;">{{$años1}}</h1>
                                          <div>Referencia: {{date('d/m/Y',strtotime($ult_anio))}}</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-search-plus"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="animated flipInY panel panel-danger">
                              <div class="panel-heading">
                                  <div class="row">
                                      <div class="col-xs-3">
                                          <i class="fa  fa-exclamation-triangle fa-5x"></i>
                                      </div>
                                      <div class="col-xs-9 text-right">
                                      <div>Mas de dos años</div>
                                          <h1 style="font-weight: bold;">{{$años2}}</h1>
                                          <div>Referencia: {{date('d/m/Y',strtotime($ult_2anio))}}</div>
                                      </div>
                                  </div>
                              </div>
                              <a href="#">
                                  <div class="panel-footer">
                                      <span class="pull-left">Ver detalle</span>
                                      <span class="pull-right"><i class="fa fa-search-plus"></i></span>
                                      <div class="clearfix"></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                    </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>MAS DE 60 DIAS.<small> {{date('d/m/Y',strtotime($ult_60))}} </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content animated fadeIn">
                          <p class="text-muted font-13 m-b-30"></p>
                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                
                                 <th>REGIONAL</th> 
                               
                                 <th style="text-align: right;">UNIDADES</th>  
                                                                 
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($detalle_reg as $det)
                                  <tr class='clickable-row' data-href="#" > 
                                    <td>{{$det->nom_localidad}}</td> 
                                   
                                    <td align="right" style="font-weight: bold;"><label class="text-danger">{{$det->UNIDADES}}</label></td>
                                    
                                   
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>MAS DE 1 AÑO <small> {{date('d/m/Y',strtotime($ult_anio))}} </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                            </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content animated fadeIn">
                          <p class="text-muted font-13 m-b-30"></p>
                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                
                                 <th>REGIONAL</th> 
                               
                                 <th style="text-align: right;">UNIDADES</th>  
                                                                 
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($detalle_reg_1año as $detS)
                                  <tr class='clickable-row' data-href="#" > 
                                    <td>{{$detS->nom_localidad}}</td> 
                                   
                                    <td align="right" style="font-weight: bold;"><label class="text-danger">{{$detS->UNIDADES}}</label></td>
                                    
                                   
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