@extends('layouts.main')

@section('content')


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3>

          <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{date ("Y")}} </a>  / BUSQUEDA

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

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Seleccion <small> </small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="">
                    <ul class="to_do">
                      <li>
                        <p><input type="checkbox" class="flat nro_cotizacion_check"> Nro cotizacion </p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat fecha_check"> Fecha Cotizacion </p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat regional_check"> Regional</p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat sucursal_check"> Sucursal</p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat vendedor_check"> Vendedor</p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat cliente_check"> Cliente</p>
                      </li>

                      <li>
                        <p><input type="checkbox" class="flat chassis_check"> Chassis </p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat master_check"> Master</p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat modelo_check"> Modelo</p>
                      </li>
                      <li>
                        <p><input type="checkbox" class="flat marca_check"> Marca</p>
                      </li>



                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Opciones de busqueda <small> </small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group nro_cotizacion">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nro cotizacion </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('nro_cotizacion', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group fecha">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" style="width: 100%" name="fecha"  class="form-control" />
                      </div>
                    </div>


                    <div class="form-group regional">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Regional </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('regional', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group sucursal">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sucursal </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('sucursal', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group vendedor">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Vendedor </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('vendedor', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group cliente">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Cliente </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('cliente', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group chassis">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Chassis </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('chassis', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group master">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Master </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('master', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group modelo">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Modelo </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('modelo', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="form-group marca">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Marca </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('marca', null,['class'=> 'form-control'])!!}
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary cancelar" type="button">Cancelar</button>

                        <button type="submit" class="btn btn-success buscar">Buscar</button>
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
    // $(".nro_cotizacion").hide();
    // $(".fecha").hide();
    // $(".regional").hide();
    // $(".sucursal").hide();
    // $(".vendedor").hide();
    // $(".cliente").hide();
    // $(".chassis").hide();
    // $(".master").hide();
    // $(".modelo").hide();
    // $(".marca").hide();

    // $(".cancelar").hide();
    // $(".buscar").hide();

$("p:first").addClass("intro");

    $(document).ready(function($) {
    $(".nro_cotizacion_check").click(function() {
      alert('no funcionaaaa');
    });
  });




    $(function() {
      $('input[name="fecha"]').daterangepicker({
        "locale": {
          "format": "DD/MM/YYYY",
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