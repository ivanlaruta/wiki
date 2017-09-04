@extends('layouts.main')

@section('content')
<style type="text/css">
/* Timeline */
.timeline2,
.timeline2-horizontal {
  list-style: none;
  padding: 20px;
  position: relative;
}
.timeline2:before {
  top: 40px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline2 .timeline2-item {
  margin-bottom: 20px;
  position: relative;
}
.timeline2 .timeline2-item:before,
.timeline2 .timeline2-item:after {
  content: "";
  display: table;
}
.timeline2 .timeline2-item:after {
  clear: both;
}
.timeline2 .timeline2-item .timeline2-badge {
  color: #fff;
  width: 54px;
  height: 54px;
  line-height: 52px;
  font-size: 22px;
  text-align: center;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  background-color: #7c7c7c;
  border: 3px solid #ffffff;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline2 .timeline2-item .timeline2-badge i,
.timeline2 .timeline2-item .timeline2-badge .fa,
.timeline2 .timeline2-item .timeline2-badge .glyphicon {
  top: 2px;
  left: 0px;
}
.timeline2 .timeline2-item .timeline2-badge.green {
  background-color: #26b99a;
}
.timeline2 .timeline2-item .timeline2-badge.primary {
  background-color: #1f9eba;
}
.timeline2 .timeline2-item .timeline2-badge.info {
  background-color: #5bc0de;
}
.timeline2 .timeline2-item .timeline2-badge.success {
  background-color: #59ba1f;
}
.timeline2 .timeline2-item .timeline2-badge.warning {
  background-color: #d1bd10;
}
.timeline2 .timeline2-item .timeline2-badge.danger {
  background-color: #ba1f1f;
}
.timeline2 .timeline2-item .timeline2-panel {
  position: relative;
  width: 46%;
  float: left;
  right: 16px;
  border: 1px solid #c0c0c0;
  background: #ffffff;
  border-radius: 2px;
  padding: 20px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline2 .timeline2-item .timeline2-panel:before {
  position: absolute;
  top: 26px;
  right: -16px;
  display: inline-block;
  border-top: 16px solid transparent;
  border-left: 16px solid #c0c0c0;
  border-right: 0 solid #c0c0c0;
  border-bottom: 16px solid transparent;
  content: " ";
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-title {
  margin-top: 0;
  color: inherit;
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > p,
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > ul {
  margin-bottom: 0;
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > p + p {
  margin-top: 5px;
}
.timeline2 .timeline2-item:last-child:nth-child(even) {
  float: right;
}
.timeline2 .timeline2-item:nth-child(even) .timeline2-panel {
  float: right;
  left: 16px;
}
.timeline2 .timeline2-item:nth-child(even) .timeline2-panel:before {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline2-horizontal {
  list-style: none;
  position: relative;
  padding: 20px 0px 20px 0px;
  display: inline-block;
}
.timeline2-horizontal:before {
  height: 3px;
  top: auto;
  bottom: 26px;
  left: 56px;
  right: 0;
  width: 100%;
  margin-bottom: 20px;
}
.timeline2-horizontal .timeline2-item {
  display: table-cell;
  height: 280px;
  width: 10%;
  min-width: 220px;
  float: none !important;
  padding-left: 0px;
  padding-right: 20px;
  margin: 0 auto;
  vertical-align: bottom;
}
.timeline2-horizontal .timeline2-item .timeline2-panel {
  top: auto;
  bottom: 64px;
  display: inline-block;
  float: none !important;
  left: 0 !important;
  right: 0 !important;
  width: 100%;
  margin-bottom: 20px;
}
.timeline2-horizontal .timeline2-item .timeline2-panel:before {
  top: auto;
  bottom: -16px;
  left: 28px !important;
  right: auto;
  border-right: 16px solid transparent !important;
  border-top: 16px solid #c0c0c0 !important;
  border-bottom: 0 solid #c0c0c0 !important;
  border-left: 16px solid transparent !important;
}
.timeline2-horizontal .timeline2-item:before,
.timeline2-horizontal .timeline2-item:after {
  display: none;
}
.timeline2-horizontal .timeline2-item .timeline2-badge {
  top: auto;
  bottom: 0px;
  left: 43px;
}
  

</style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title">
                <h3><a href="{{ route('seguimiento.index')}}">SEGUIMIENTO DE UNIDAD</a></h3>
              </div>
            </div>
            <br>
            <div class="clearfix"></div>

              <div class="col-md-12 col-xs-12 animated fadeInUp">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATOS GENERALES <small>{{$datos_unidad->TIPO_UNIDAD}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">CHASSIS</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->CHASIS}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MOELO GENERICO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->MODELOS}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-MODELO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MODELO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MODELO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->MODELO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-MASTER</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MASTER}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MASTER</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MASTER}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COLOR EXTERIOR</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COLOR_EXTERNO}}">
                        </div>

                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COLOR INTERIOR</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COLOR_INTERNO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">AÑO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->ANIO_MOD}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-UBICACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_UBICACION}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">UBICACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->UBICACION}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">REGIONAL</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->nom_localidad}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">ESTADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->ESTADO}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">LIBERADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->LIBERADO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">NACIONALIZADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->NACIONALIZADO}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">PAIS</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->PAIS}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">TIPO DE VENTA</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->TIPO_DE_VENTA}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">ASIGNACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->asignacion}}">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> PRODUCCION <small>HISTORIAL</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite""></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                      <ul class="list-unstyled timeline">
                        <li>
                          <div class="block">
                            <div class="tags">
                              <a href="" class="tag">
                                <span><strong>{{date('Y-m-d',strtotime($produccion[0]->fec_produccion))}}</strong></span>
                              </a>
                            </div>
                            <div class="block_content">
                              <h2 class="title">
                                <a>PRODUCCION</a>
                              </h2>
                              <div class="byline">
                                <span>{{date('Y-m-d',strtotime($produccion[0]->fec_produccion))}}</span>
                              </div>
                              <p class="excerpt">

                               <ul class="to_do">
                                 <li>
                                   <p>
                                     <strong>N° PRODUCCION: </strong> {{$produccion[0]->chassis_aux2}}</p>
                                   </li>
                                   <li>
                                     <p>
                                       <strong>AÑO MODELO: </strong> {{$datos_unidad->ANIO_MOD}}</p>
                                     </li>                                     
                                   </ul>             
                                   <ul class="to_do">
                                     <li>
                                       <p>
                                         <strong>COSTO: </strong> {{$produccion[0]->costo}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>OBSERVACION: </strong> {{$produccion[0]->observaciones}}</p>
                                         </li>
                                       </ul>
                                     </p>
                                   </div>
                                 </div>
                               </li>
                              @if(sizeof($envio)>0)
                               <li>
                                <div class="block">
                                  <div class="tags">
                                    <a href="" class="tag">
                                      <span><strong>{{date('Y-m-d',strtotime($envio[0]->fec_despacho))}}</strong></span>
                                    </a>
                                  </div>
                                  <div class="block_content">
                                    <h2 class="title">
                                      <a>DESPACHO</a>
                                    </h2>
                                    <div class="byline">
                                      <span>{{date('Y-m-d',strtotime($envio[0]->fec_despacho))}}</span>
                                    </div>
                                    <p class="excerpt">

                                     <ul class="to_do">
                                       <li>
                                         <p>
                                           <strong>ORIGEN: </strong> {{$envio[0]->nom_origen}}</p>
                                         </li>

                                       </ul>

                                       <ul class="to_do">
                                         <li>
                                           <p>
                                             <strong>BUQUE: </strong> {{$envio[0]->nom_buque}}</p>
                                           </li>
                                         </ul>
                                       </p>
                                     </div>
                                   </div>
                                 </li>

                                 <li>
                                  <div class="block">
                                    <div class="tags">
                                      <a href="" class="tag">
                                        <span><strong>{{date('Y-m-d',strtotime($envio[0]->fecha_llegada))}}</strong></span>
                                      </a>
                                    </div>
                                    <div class="block_content">
                                      <h2 class="title">
                                        <a>LLEGADA</a>
                                      </h2>
                                      <div class="byline">
                                        <span>{{date('Y-m-d',strtotime($envio[0]->fecha_llegada))}}</span>
                                      </div>
                                      <p class="excerpt">
                                       <ul class="to_do">
                                         <li>
                                           <p>
                                             <strong>DESTINO: </strong> {{$envio[0]->nom_ubicacion}}</p>
                                           </li>
                                         </ul>

                                         <ul class="to_do">
                                           <li>
                                             <p>
                                               <strong>BUQUE: </strong> {{$envio[0]->nom_buque}}</p>
                                             </li>
                                           </ul>
                                         </p>
                                       </div>
                                     </div>
                                   </li>
                                    
                                   @endif

                                 </ul>
                               </div>
                             </div>
                           </div>


                           <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2> MOVIMIENTOS <small>HISTORIAL</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite"></i></a>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                                <ul class="list-unstyled timeline">
                                  @foreach($movimientos as $mov)
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span><strong>{{date('Y-m-d',strtotime($mov->SYSTIME))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>MOVIMIENTO</a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{date('Y-m-d',strtotime($mov->SYSTIME))}}</span>
                                        </div>
                                        <p class="excerpt">
                                         <ul class="to_do">
                                           <li>
                                             <p>
                                               <strong>ORIGEN: </strong> {{$mov->Ubicacion_Ant}}</p>
                                             </li>
                                           </ul>
                                           <ul class="to_do">
                                             <li>
                                               <p>
                                                 <strong>DESTINO: </strong> {{$mov->ubicacion_Act}}</p>
                                               </li>
                                             </ul>
                                           </p>
                                         </div>
                                       </div>
                                     </li>
                                     @endforeach
                                   </ul>
                                 </div>
                               </div>
                             </div>
                          
                           <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2> COTIZACIONES <small>HISTORIAL</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <ul class="list-unstyled timeline">
                                @if(sizeof($cotizacion)>0)
                                  @foreach($cotizacion as $cot)
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span class="coti"><strong>{{date('Y-m-d',strtotime($cot->FECHA_COTIZACION))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>COTIZACION </a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{$cot->FECHA_COTIZACION}}</span> cotizado por <a>{{$cot->VENDEDOR}}</a> en <a>{{$cot->SUCURSAL}} - {{$cot->REGIONAL}}</a>
                                        </div>
                                        <p class="excerpt">
                                <ul class="to_do">
                                  <li>
                                    <p>
                                      <strong>N° COTIZACION: </strong> {{$cot->NRO_COTIZACION}}</p>
                                    </li>
                                    <li>
                                      <p>
                                        <strong>MODALIDAD: </strong> {{$cot->modalidad}}</p>
                                      </li>
                                      <li>
                                        <p>
                                          <strong>PRECIO: </strong> {{$cot->PRECIO_TOTAL}}</p>
                                        </li>
                                        <li>
                                          <p>
                                            <strong>DESCUENTO: </strong> {{$cot->montoPorcentajeDescuento}}</p>
                                          </li>

                                        
                                          <li>
                                            <p>
                                              <strong>CLIENTE: </strong> {{$cot->CLIENTE}}</p>
                                            </li>
                                            <li>
                                              <p>
                                                <strong>TIPO: </strong> {{$cot->TIPO_CLIENTE}}</p>
                                              </li>
                                              <li>
                                                <p>
                                                  <strong>CI: </strong> {{$cot->ci}}</p>
                                                </li>
                                                <li>
                                                  <p>
                                                    <strong>NIT: </strong> {{$cot->NIT}}</p>
                                                  </li>
                                                  <li>
                                                    <p>
                                                      <strong>DIRECCION: </strong> {{$cot->DIRECCION}}</p>
                                                    </li>
                                                    <li>
                                                      <p>
                                                        <strong>TELEFONO: </strong> {{$cot->TELEFONO}}</p>
                                                      </li>
                                                      <li>
                                                        <p>
                                                          <strong>CELULAR: </strong> {{$cot->CELULAR}}</p>
                                                        </li>
                                                      </ul>
                                                </p>
                                         </div>
                                       </div>
                                     </li>
                                     @endforeach
                                     @endif
                                   </ul>
                                 </div>
                               </div>
                             </div>

                            
                           <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2> RESERVA - CONTRATO - VENTA <small>HISTORIAL</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                               <ul class="list-unstyled timeline">
                              @if(!empty($reserva))
                               
                                  
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span class="coti"><strong>{{date('Y-m-d',strtotime($reserva->FECHA_RESERVA))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>RESERVA </a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{$reserva->FECHA_RESERVA}}</span> reservado por <a>{{$reserva->VENDEDOR}}</a> en <a>{{$reserva->SUCURSAL}} - {{$reserva->REGIONAL}}</a>
                                        </div>
                                        <p class="excerpt">
                                <ul class="to_do">
                               
                                  <li>
                                    <p>
                                      <strong>COTIZACION ORIGEN: </strong>  @if(sizeof($cotizacion)>0){{$cot->NRO_COTIZACION}}@else LICITACION @endif</p>
                                    </li>


                                        
                                          <li>
                                         <p>
                                           <strong>N° RESERVA: </strong> {{$reserva->nro_docum}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>UBICACION_UNIDAD: </strong> {{$reserva->UBICACION_UNIDAD}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>LIBERADO: </strong> {{$reserva->LIBERADO}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>NACIONALIZADO: </strong> {{$reserva->NACIONALIZADO}}</p>
                                       </li>
                                        <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$reserva->CLIENTE}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>BANCO: </strong> {{$reserva->nom_banco}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>PRECIO: </strong> {{$reserva->Precio_actual}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>TIPO: </strong> {{$reserva->tipo_venta}}</p>
                                       </li>
                                                      </ul>
                                                </p>
                                         </div>
                                       </div>
                                     </li>
                                     
                                   
                                   @else
                                    Sin reserva aprobada
                                   @endif

                                   @if(sizeof($contrato)>0)
                               
                                  
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span class="coti"><strong>{{date('Y-m-d',strtotime($contrato[0]->fec_doc))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>CONTRATO </a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{date('Y-m-d',strtotime($contrato[0]->fec_doc))}}</span> Contrato realizado por <a>{{$contrato[0]->nom_vendedor}}</a> 
                                        </div>
                                        <p class="excerpt">
                                <ul class="to_do">

                                     <li>
                                         <p>
                                           <strong>N° CONTRATO: </strong> {{$contrato[0]->nro_docum}}</p>
                                       </li>

                                       <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$contrato[0]->nom_tit}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>PRECIO: </strong> {{$contrato[0]->precio_total}}</p>
                                       </li>
                                                      </ul>
                                                </p>
                                         </div>
                                       </div>
                                     </li>
                                     
                                  
                                   @else
                                    <br>Sin Contrato
                                   @endif


                                  @if(!empty($factura))

                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span class="coti"><strong>{{date('Y-m-d',strtotime($factura->FECHA_FACTURA))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>FACTURA </a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{date('Y-m-d',strtotime($factura->FECHA_FACTURA))}}</span> facturado por <a>{{$factura->VENDEDOR}}</a> en <a>{{$factura->SUCURSAL}} - {{$factura->REGIONAL}}</a>
                                        </div>
                                        <p class="excerpt">
                                <ul class="to_do">
                                  
                                     <li>
                                         <p>
                                           <strong>N° FACTURA: </strong> {{$factura->NRO_FACTURA}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>UBICACION_UNIDAD: </strong> {{$factura->UBICACION_UNIDAD}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>LIBERADO: </strong> {{$factura->LIBERADO}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>NACIONALIZADO: </strong> {{$factura->NACIONALIZADO}}</p>
                                       </li>

                                       <li>
                                         <p>
                                           <strong>COD TIT: </strong> {{$factura->COD_TIT}}</p>
                                       </li>
                                       
                                       <li>
                                         <p>
                                           <strong>NIT: </strong> {{$factura->NIT}}</p>
                                       </li>
                                       
                                       <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$factura->CLIENTE}}</p>
                                       </li>
                                       
                                       <li>
                                         <p>
                                           <strong>PRECIO: </strong> {{$factura->PRECIO}}</p>
                                       </li>
                                       
                                     
                                       
                                     
                                     
                                </ul>
                                                </p>
                                         </div>
                                       </div>
                                     </li>
                                     
                                   
                                   @else
                                    <br>No facturado
                                   @endif


                                   @if(sizeof($entrega)>0)
                               
                                  
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span class="coti"><strong>{{date('Y-m-d',strtotime($entrega[0]->fecha_mod))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>ENTREGA </a>
                                        </h2>
                                        <div class="byline">
                                          <span  style="font-weight: bold;">{{date('Y-m-d',strtotime($entrega[0]->fecha_mod))}}</span> entregado en <a>{{$entrega[0]->nom_deposito}}</a> 
                                        </div>
                                        <p class="excerpt">
                                <ul class="to_do">
                                <li>
                                         <p>
                                           <strong>N° DOC: </strong> {{$entrega[0]->nro_docum}}</p>
                                       </li>
                                       
                                       
                                     
                                     
                                       <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$entrega[0]->nom_tit}}</p>
                                       </li>
                                       </ul>
                                                </p>
                                         </div>
                                       </div>
                                     </li>
                                     
                                  
                                   @else
                                    <br>No Entregado
                                   @endif

                                   </ul>
                                 </div>
                               </div>
                             </div>
  
            

                  <div class="col-md-12 col-xs-12 animated fadeInUp">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>CONTROL DE TIEMPOS <small>LINEA  DE TIEMPO</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up animated tada infinite"></i></a>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content" >
                     
                       
                        <div style="display:inline-block;width:100%;overflow-y:auto;">
                        <ul class="timeline2 timeline2-horizontal">
                          <li class="timeline2-item">
                            <div class="timeline2-badge  green"><i class="glyphicon glyphicon-check"></i></div>
                            <div class="timeline2-panel">
                              <div class="timeline2-heading">
                                <h4 class="timeline2-title">COTIZACION</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time green"></i> aqui la fecha</small></p>
                              </div>
                              <div class="timeline2-body">
                                <p>asd</p>
                                <p>asd</p>
                                <p>asd</p>
                              </div>
                            </div>
                          </li>
                          <li class="timeline2-item">
                            <div class="timeline2-badge  green"><i class="glyphicon glyphicon-check "></i></div>
                            <div class="timeline2-panel">
                              <div class="timeline2-heading">
                                <h4 class="timeline2-title">RESERVA</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time green"></i> aqui la fecha</small></p>
                              </div>
                              <div class="timeline2-body">
                                <p>asd</p>
                                <p>asd</p>
                                <p>asd</p>
                              </div>
                            </div>
                          </li>
                          <li class="timeline2-item">
                            <div class="timeline2-badge  green"><i class="glyphicon glyphicon-check"></i></div>
                            <div class="timeline2-panel">
                              <div class="timeline2-heading">
                                <h4 class="timeline2-title">CONTRATO</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time green"></i> aqui la fecha</small></p>
                              </div>
                              <div class="timeline2-body">
                                <p>asd</p>
                                <p>asd</p>
                                <p>asd</p>
                              </div>
                            </div>
                          </li>
                          <li class="timeline2-item">
                            <div class="timeline2-badge  green"><i class="glyphicon glyphicon-check"></i></div>
                            <div class="timeline2-panel">
                              <div class="timeline2-heading">
                                <h4 class="timeline2-title">FACTURA</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time green"></i> aqui la fecha</small></p>
                              </div>
                              <div class="timeline2-body">
                                <p>asd</p>
                                <p>asd</p>
                                <p>asd</p>
                              </div>
                            </div>
                          </li>
                          <li class="timeline2-item">
                            <div class="timeline2-badge  green"><i class="glyphicon glyphicon-check"></i></div>
                            <div class="timeline2-panel">
                              <div class="timeline2-heading">
                                <h4 class="timeline2-title">ENTREGA</h4>
                                <p><small class="text-muted"><i class="glyphicon glyphicon-time green"></i> aqui la fecha</small></p>
                              </div>
                              <div class="timeline2-body">
                                <p>asd</p>
                                <p>asd</p>
                                <p>asd</p>
                              </div>
                            </div>
                          </li>
                          
                        </ul>
                      </div>
                    
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>
  </div>
</div>
        



@endsection

@section('scripts')

<script type="text/javascript">

</script>
@endsection