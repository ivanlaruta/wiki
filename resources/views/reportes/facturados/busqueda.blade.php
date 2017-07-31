@extends('layouts.main')

@section('content')


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3>

          <a href="{{ route('facturados.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">FACTURADOS (VENTAS) {{date ("Y")}} </a>  / BUSQUEDA AVANZADA

        </h3>
      </div>
      <div class="title_right"></div>
    </div>
    <div class="clearfix"></div>


      {{-- <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="title">
              <h2>OPCIONES DE BUSQUEDA <small>  </small></h2>

            </div>
          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_content animated fadeIn">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Seleccion <small> </small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="">
                    <ul class="to_do">
                      <li>
                        <a href="#" class="check_factura_des " ><i class="fa fa-square-o fa-2x "> </i> Nro factura</a> 
                        <a href="#" class="check_factura_act green" ><i class="fa fa-check-square fa-2x "> </i> Nro factura</a> 
                         
                      </li>
                      <li>
                         <a href="#" class="check_fecha_des" ><i class="fa fa-square-o fa-2x "> </i> Fecha </a> 
                        <a href="#" class="check_fecha_act green" ><i class="fa fa-check-square fa-2x "> </i> Fecha </a> 
                         
                      </li>
                      <li>
                          <a href="#" class="check_regional_des" ><i class="fa fa-square-o fa-2x "> </i> Regional</a> 
                        <a href="#" class="check_regional_act green" ><i class="fa fa-check-square fa-2x "> </i> Regional</a> 
                          
                      </li>
                      <li>
                          <a href="#" class="check_sucursal_des" ><i class="fa fa-square-o fa-2x "> </i> Sucursal</a> 
                        <a href="#" class="check_sucursal_act green" ><i class="fa fa-check-square fa-2x "> </i> Sucursal</a> 
                          
                      </li>
                      <li>
                          <a href="#" class="check_vendedor_des" ><i class="fa fa-square-o fa-2x "> </i>  Vendedor</a> 
                        <a href="#" class="check_vendedor_act green" ><i class="fa fa-check-square fa-2x "> </i> Vendedor</a> 
                          
                      </li>
                      <li>
                         <a href="#" class="check_cliente_des" ><i class="fa fa-square-o fa-2x "> </i> Cliente</a> 
                        <a href="#" class="check_cliente_act green" ><i class="fa fa-check-square fa-2x "> </i> Cliente</a> 
                    
                      </li>

                      <li>
                         <a href="#" class="check_chassis_des" ><i class="fa fa-square-o fa-2x "> </i> Chassis</a> 
                        <a href="#" class="check_chassis_act green" ><i class="fa fa-check-square fa-2x "> </i> Chassis</a> 
                          
                      </li>
                      <li>
                         <a href="#" class="check_master_des" ><i class="fa fa-square-o fa-2x "> </i> Master</a> 
                        <a href="#" class="check_master_act green" ><i class="fa fa-check-square fa-2x "> </i> Master</a> 
                         
                      </li>
                      <li>
                         <a href="#" class="check_modelo_des" ><i class="fa fa-square-o fa-2x "> </i> Modelo</a> 
                        <a href="#" class="check_modelo_act green" ><i class="fa fa-check-square fa-2x "> </i> Modelo</a> 
                         
                      </li>
                      <li>
                         <a href="#" class="check_marca_des" ><i class="fa fa-square-o fa-2x "> </i> Marca</a> 
                        <a href="#" class="check_marca_act green" ><i class="fa fa-check-square fa-2x "> </i> Marca</a> 
                         
                      </li>



                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-9 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Opciones de busqueda <small> </small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <br />
                  {!! Form::open (['route' => 'facturados.buscador','method' => 'GET','class' => 'form-horizontal form-label-left'])!!}

                    <div class="form-group nro_factura">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nro factura </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('nro_factura', null,['class'=> 'form-control' , 'id' => 'nro_factura'])!!}
                      </div>
                    </div>

                    <div class="form-group fecha">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" style="width: 100%" name="fecha"  class="form-control" id="fecha"/>
                      </div>
                    </div>


                    <div class="form-group regional">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Regional </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('regional', null,['class'=> 'form-control','id' => 'regional'])!!}
                      </div>
                    </div>

                    <div class="form-group sucursal">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sucursal </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('sucursal', null,['class'=> 'form-control','id' => 'sucursal'])!!}
                      </div>
                    </div>

                    <div class="form-group vendedor">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Vendedor </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('vendedor', null,['class'=> 'form-control','id' => 'vendedor'])!!}
                      </div>
                    </div>

                    <div class="form-group cliente">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Cliente </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('cliente', null,['class'=> 'form-control','id' => 'cliente'])!!}
                      </div>
                    </div>

                    <div class="form-group chassis">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Chassis </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('chassis', null,['class'=> 'form-control','id' => 'chassis'])!!}
                      </div>
                    </div>

                    <div class="form-group master">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Master </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('master', null,['class'=> 'form-control','id' => 'master'])!!}
                      </div>
                    </div>

                    <div class="form-group modelo">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Modelo </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('modelo', null,['class'=> 'form-control','id' => 'modelo'])!!}
                      </div>
                    </div>

                    <div class="form-group marca">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Marca </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('marca', null,['class'=> 'form-control','id' => 'marca'])!!}
                      </div>
                    </div>

                    <input id="bandera" name="bandera" type="hidden" value='0'>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                        {{-- <button class="btn btn-primary cancelar" type="button">Cancelar</button> --}}

                        <button type="submit" class="btn btn-success buscar btn-block">Buscar</button>
                      </div>
                    </div>

                   </form>
                  

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

  <!-- bcheck -->
  <script src="{{asset('bower_components/gentelella/vendors/iCheck/icheck.min.js')}}"></script>

  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

  <!-- Ion.RangeSlider -->
  <script src="{{asset('bower_components/gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>


  <script type="text/javascript">
    $(".nro_factura").hide();
    $(".fecha").hide();
    $(".regional").hide();
    $(".sucursal").hide();
    $(".vendedor").hide();
    $(".cliente").hide();
    $(".chassis").hide();
    $(".master").hide();
    $(".modelo").hide();
    $(".marca").hide();
    $("#bandera").hide();


    $(".check_factura_act").hide();
    $(".check_fecha_act").hide();
    $(".check_regional_act").hide();
    $(".check_sucursal_act").hide();
    $(".check_vendedor_act").hide();
    $(".check_cliente_act").hide();
    $(".check_chassis_act").hide();
    $(".check_master_act").hide();
    $(".check_modelo_act").hide();
    $(".check_marca_act").hide();

    document.getElementById("nro_factura").value = null;
    //document.getElementById("fecha").value = null;
    document.getElementById("regional").value = null;
    document.getElementById("sucursal").value = null;
    document.getElementById("vendedor").value = null;
    document.getElementById("cliente").value = null;
    document.getElementById("chassis").value = null;
    document.getElementById("master").value = null;
    document.getElementById("modelo").value = null;
    document.getElementById("marca").value = null;
    document.getElementById("bandera").value = '0';

  $(document).ready(function($) {
////////////////////////////////////////////////
    //activa
    $(".check_factura_des").click(function() {
      $(".nro_factura").show();
      $(".check_factura_act").show();
    $(".check_factura_des").hide();
    });
    //desactiva
    $(".check_factura_act").click(function() {
      $(".nro_factura").hide();
      $(".check_factura_des").show();
    $(".check_factura_act").hide();
    document.getElementById("nro_factura").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_fecha_des").click(function() {
      $(".fecha").show();
      $(".check_fecha_act").show();
    $(".check_fecha_des").hide();
    document.getElementById("bandera").value = '1';
    });
    //desactiva
    $(".check_fecha_act").click(function() {
      $(".fecha").hide();
      $(".check_fecha_des").show();
    $(".check_fecha_act").hide();
    document.getElementById("bandera").value = '0';
    });

////////////////////////////////////////////////
    //activa
    $(".check_regional_des").click(function() {
      $(".regional").show();
      $(".check_regional_act").show();
    $(".check_regional_des").hide();
    });
    //desactiva
    $(".check_regional_act").click(function() {
      $(".regional").hide();
      $(".check_regional_des").show();
    $(".check_regional_act").hide();
        document.getElementById("regional").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_sucursal_des").click(function() {
      $(".sucursal").show();
      $(".check_sucursal_act").show();
    $(".check_sucursal_des").hide();
    });
    //desactiva
    $(".check_sucursal_act").click(function() {
      $(".sucursal").hide();
      $(".check_sucursal_des").show();
    $(".check_sucursal_act").hide();
        document.getElementById("sucursal").value = null;
    });

////////////////////////////////////////////////
    //activa
    $(".check_vendedor_des").click(function() {
      $(".vendedor").show();
      $(".check_vendedor_act").show();
    $(".check_vendedor_des").hide();
    });
    //desactiva
    $(".check_vendedor_act").click(function() {
      $(".vendedor").hide();
      $(".check_vendedor_des").show();
    $(".check_vendedor_act").hide();
        document.getElementById("vendedor").value = null;
    });

////////////////////////////////////////////////
    //activa
    $(".check_cliente_des").click(function() {
      $(".cliente").show();
      $(".check_cliente_act").show();
    $(".check_cliente_des").hide();
    });
    //desactiva
    $(".check_cliente_act").click(function() {
      $(".cliente").hide();
      $(".check_cliente_des").show();
    $(".check_cliente_act").hide();
        document.getElementById("cliente").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_chassis_des").click(function() {
      $(".chassis").show();
      $(".check_chassis_act").show();
    $(".check_chassis_des").hide();
    });
    //desactiva
    $(".check_chassis_act").click(function() {
      $(".chassis").hide();
      $(".check_chassis_des").show();
    $(".check_chassis_act").hide();
        document.getElementById("chassis").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_master_des").click(function() {
      $(".master").show();
      $(".check_master_act").show();
    $(".check_master_des").hide();
    });
    //desactiva
    $(".check_master_act").click(function() {
      $(".master").hide();
      $(".check_master_des").show();
    $(".check_master_act").hide();
        document.getElementById("master").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_modelo_des").click(function() {
      $(".modelo").show();
      $(".check_modelo_act").show();
    $(".check_modelo_des").hide();
    });
    //desactiva
    $(".check_modelo_act").click(function() {
      $(".modelo").hide();
      $(".check_modelo_des").show();
    $(".check_modelo_act").hide();
        document.getElementById("modelo").value = null;
    });
////////////////////////////////////////////////
    //activa
    $(".check_marca_des").click(function() {
      $(".marca").show();
      $(".check_marca_act").show();
    $(".check_marca_des").hide();
    });
    //desactiva
    $(".check_marca_act").click(function() {
      $(".marca").hide();
      $(".check_marca_des").show();
    $(".check_marca_act").hide();
        document.getElementById("marca").value = null;
    });

  });




    $(function() {
      $('input[name="fecha"]').daterangepicker({
        "maxDate": moment(),
        "locale": {
          "format": "YYYY-MM-DD",
          "separator": " - ",
          "applyLabel": "Aceptar",
          "cancelLabel": "Cancelar",
          "fromLabel": "From",
          "toLabel": "To",
          "customRangeLabel": "Custom",
          "daysOfWeek": [
          "Do",
          "Lu",
          "Ma",
          "Mi",
          "Ju",
          "Vi",
          "Sa"
          ],
          "monthNames": [
          "Enero",
          "Febrero",
          "Marzo",
          "Abril",
          "Mayo",
          "Junio",
          "Julio",
          "Agosto",
          "Septiembre",
          "Octubre",
          "Noviembre",
          "Diciembre"
          ],
          "firstDay": 1
        }
      })
    });
  </script>
  @endsection