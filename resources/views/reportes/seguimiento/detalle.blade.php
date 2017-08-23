@extends('layouts.main')

@section('content')
<style type="text/css">

  .timeline .block {
      margin: 0 0 0 20%;
      border-left: 3px solid #e8e8e8;
      overflow: visible;
      padding: 10px 15px;
  }


  .timeline .tags {

      position: absolute;
      top: 15px;
      left: 0;
      width: 18%;
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
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATOS GENERALES <small>{{$datos_unidad->TIPO_UNIDAD}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
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

           
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>LINEA DE TIEMPO <small>UNIDAD</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                   
                    <li>
                      <div class="block" >
                        <div class="tags">
                          <a href="" class="tag">
                            <strong>COTIZACION</strong>
                          </a>
                        </div>
                        <div class="block_content">
                         @if(sizeof($cotizacion)>0)
                          @foreach($cotizacion as $cot)
                          <div class="byline">
                            <span class="red" style="font-weight: bold;">{{$cot->FECHA_COTIZACION}}</span> cotizado por <a>{{$cot->VENDEDOR}}</a> en <a>{{$cot->SUCURSAL}} - {{$cot->REGIONAL}}</a>
                          </div>
                          <p class="excerpt">
                            <div class="row">
                              
                                  <div class="col-md-6 col-sm-6 col-xs-12">
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
                                    
                                    </ul>
                                  </div>

                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="to_do">
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
                                  </div>
                                
                            </div>
                          </p>
                          @endforeach
                          @else
                          <div class="byline">
                            <span>A la fecha</span> 
                          </div>
                          <p class="excerpt">No se tienen cotizaciones registradas
                          </p>
                          @endif
                        </div>
                      </div>
                    </li>
                    
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <strong>RESERVA</strong>
                          </a>
                        </div>
                        <div class="block_content">
                          
                          
                          @if(!empty($reserva))
                           
                           <div class="byline">
                             <span class="red" style="font-weight: bold;">{{$reserva->FECHA_RESERVA}}</span> reservado por <a>{{$reserva->VENDEDOR}}</a> en <a>{{$reserva->SUCURSAL}} - {{$reserva->REGIONAL}}</a>
                           </div>
                           <p class="excerpt">
                             <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
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
                                       
                                     
                                     </ul>
                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
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
                                   </div>
                             </div>
                           </p>
                          
                           @else
                           <div class="byline">
                             <span>A la fecha</span> 
                           </div>
                           <p class="excerpt">No reservado
                           </p>
                           @endif
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <strong>CONTRATO</strong>
                          </a>
                        </div>
                        <div class="block_content">
                          
                          
                          @if(!empty($contrato))
                           
                           <div class="byline">
                             <span class="red" style="font-weight: bold;">{{date('Y-m-d',strtotime($contrato[0]->fec_doc))}}</span> realizado por <a>{{$contrato[0]->nom_vendedor}}</a> 
                           </div>
                           <p class="excerpt">
                             <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
                                     <li>
                                         <p>
                                           <strong>N° CONTRATO: </strong> {{$contrato[0]->nro_docum}}</p>
                                       </li>
                                       
                                       
                                     
                                     </ul>
                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
                                       <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$contrato[0]->nom_tit}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>PRECIO: </strong> {{$contrato[0]->precio_total}}</p>
                                       </li>
                                       
                                     </ul>
                                   </div>
                             </div>
                           </p>
                          
                           @else
                           <div class="byline">
                             <span>A la fecha</span> 
                           </div>
                           <p class="excerpt">Sin contrato
                           </p>
                           @endif
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <strong>FACTURA</strong>
                          </a>
                        </div>
                        <div class="block_content">
                          
                          
                          @if(!empty($factura))
                           
                           <div class="byline">
                             <span class="red" style="font-weight: bold;">{{$factura->FECHA_FACTURA}}</span> facturado por <a>{{$factura->VENDEDOR}}</a> en <a>{{$factura->SUCURSAL}} - {{$factura->REGIONAL}}</a>
                           </div>
                           <p class="excerpt">
                             <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
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
                                       
                                     
                                     </ul>
                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
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
                                   </div>
                             </div>
                           </p>
                          
                           @else
                           <div class="byline">
                             <span>A la fecha</span> 
                           </div>
                           <p class="excerpt">No facturado
                           </p>
                           @endif
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <strong>ENTREGA</strong>
                          </a>
                        </div>
                        <div class="block_content">
                          
                          
                          @if(!empty($entrega))
                           
                           <div class="byline">
                             <span class="red" style="font-weight: bold;">{{date('Y-m-d',strtotime($entrega[0]->fecha_mod))}}</span> entregado en <a>{{$entrega[0]->nom_deposito}}</a> 
                           </div>
                           <p class="excerpt">
                             <div class="row">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
                                     <li>
                                         <p>
                                           <strong>N° DOC: </strong> {{$entrega[0]->nro_docum}}</p>
                                       </li>
                                       
                                       
                                     
                                     </ul>
                                   </div>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                     <ul class="to_do">
                                       <li>
                                         <p>
                                           <strong>CLIENTE: </strong> {{$entrega[0]->nom_tit}}</p>
                                       </li>
                                       
                                     </ul>
                                   </div>
                             </div>
                           </p>
                          
                           @else
                           <div class="byline">
                             <span>A la fecha</span> 
                           </div>
                           <p class="excerpt">No entregado
                           </p>
                           @endif
                          
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
        



@endsection

@section('scripts')

<script type="text/javascript">

</script>
@endsection