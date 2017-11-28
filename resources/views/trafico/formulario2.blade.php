@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3><a href="{{ route('trafico.formulario')}}">TRAFICO CLIENTES</a><small> / {{Auth::user()->id_ubicacion}} - {{Auth::user()->sucursal2->nom_sucursal}} /
        @if(sizeof($encuesta)>0) {{$encuesta->descripcion}} @endif
        </small></h3>
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    
@if(sizeof($encuesta)>0)
{!! Form::open(array('route' => ['trafico.add_visita'], 'method' => 'get' , 'id'=>'VisitaForm', 'class'=>'form-horizontal form-label-left')) !!}
<input type="text" hidden class="form-control" value="{{Auth::user()->id_ubicacion}}" name="id_sucursal" id="id_sucursal">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2>Cliente.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center">
                <strong>ANTIGUO <input type="radio" name="tipo_cliente" value="Antiguo" id="antiguo" class="radio_antiguo" autocomplete="off"> </strong> | 
                <strong>NUEVO <input type="radio" name="tipo_cliente" value="Nuevo" id="nuevo" class="radio_nuevo" autocomplete="off"> </strong>
                <a class="btn btn-info pull-right btn-xs" href="" a-toggle="tooltip" data-placement="bottom" title="Completar informacion de cliente"><span class="fa fa-user"></span> Datos de cliente</a>
              </div>
            </div>
          </div>
          <div class="x_title">
            <h2>Motivo.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center">
                @if(sizeof($motivos)>0)
                  <div class="table-responsive col-md-6 col-lg-offset-3 col-sm-12">
                    <table class="table table-hover">  
                      <tbody> 
                        @foreach($motivos as $det)
                        <tr>
                          <td style="padding: 2px;"><strong>{{$det->motivo->descripcion}} </strong> 
                          <td style="padding: 2px;"> <input type="radio" name="motivo" value="{{$det->motivo->id}}" id="{{$det->motivo->id}}" class="" autocomplete="off"></td>
                          <td style="padding: 2px;">
                            <a href="#" class="" data-toggle="tooltip" data-placement="bottom" title="Ver modelos seleccionados">
                              <span class="fa fa-car fa-lg"></span> 
                            </a>
                          </td>   
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="x_title">
            <h2>Ejecutivo asignado.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center"> 
              <select class="form-control select3 col-md-6 col-lg-offset-3 col-sm-6 col-xs- req_vendedor"  style="width: 50%;" name="id_ejecutivo" id="id_ejecutivo">
                <option value="">Selecione un Ejecutivo de venta</option>
                @foreach($vendedores as $det)
                  <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option>
                @endforeach
            </select>
            </div>
            </div>
          </div>
          <div class="x_title">
            <h2>Finalizar.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-md-offset-3" align="center">
                  <input type="submit" value="GUARDAR" class="btn btn-success btn-block">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        

 
{!! Form::close()!!}
@else
No existe encuesta disponible...
@endif

</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

// $('.select2').select2({
//   placeholder: 'Seleccione un cliente',
//   minimumInputLength: 2,
//   language: {
//     noResults: function() { return "No hay resultado";},
//     searching: function() { return "Buscando.."; },
//     inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
//   },
// });

// $('.select3').select2({placeholder: 'Seleccione un cliente'});

//   $('.nuevo').hide();
//   $('.panel_categorias').hide();
//   $('.panelcliente').hide();
//   $('.panel_ejecutivo').hide();
//   $('.txt_otros').hide();


//     $('.radio_nuevo').change(function() {
//         $('.nuevo').show();
//         $('.existente').hide();
//         $(".req_nuevo").prop('required',true);
//         $(".req_antiguo").prop('required',false);
//         $('.datos_nuevo').show();
//     });
//     $('.radio_antiguo').change(function() {
//         $('.nuevo').hide();
//         $('.existente').show();
//         $('.datos_nuevo').hide();
//         $(".req_nuevo").prop('required',false);
//         $(".req_antiguo").prop('required',true);

//     });

//     $('.mod_OTROS').change(function() {
//        if($(".mod_OTROS").is(':checked'))
//        {
//              $('.txt_otros').show();
//         } 
//         else 
//         {
//              $('.txt_otros').hide();
//         }
//     });
   
//     $('.select_motivos').change(function() {
    
//       switch (this.value) {

//           case '1':
//               $('.panelcliente').show();
//               $('.panel_categorias').show();
//               $('.panel_ejecutivo').show();
//               $('.cat-1').show();
//               $('.cat-2').hide();
//               $("#antiguo").prop("checked", true);
//               $('.nuevo').hide();
//               $('.existente').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',true);
//               $(".opciones").attr('checked', false)
//               $('.datos_nuevo').hide();
//               $(".req_vendedor").prop('required',true);
//               $(".txt_otros_9").val(' ');

//               break;
//           case '2':
//               $('.panelcliente').show();
//               $('.panel_categorias').show();
//               $('.panel_ejecutivo').show();
//               $('.cat-1').hide();
//               $('.cat-2').show();
//               $("#antiguo").prop("checked", true);
//               $('.nuevo').hide();
//               $('.existente').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',true);
//               $(".opciones").attr('checked', false)
//               $('.datos_nuevo').hide();
//               $(".req_vendedor").prop('required',true);
//               $(".txt_otros_8").val(' ');

//               break;
//           case '3':
             
//               $('.panelcliente').hide();
//               $('.panel_categorias').hide();
//               $('.panel_ejecutivo').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',false);
//               $(".req_vendedor").prop('required',true);
//               $(".opciones").attr('checked', false)
              
//               break;
//           default:
//               $('.panelcliente').hide();
//               $('.panel_categorias').hide();
//               $('.panel_ejecutivo').hide();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',false);
//               $(".req_vendedor").prop('required',false);
//               $(".opciones").attr('checked', false)
//       }     
//     });

//     $('.select_cliente').change(function() {
//       var telef = $(this).find("option:selected").attr('tel');
//       $("#telefono").val(telef);
           
//     });

</script>
@endsection