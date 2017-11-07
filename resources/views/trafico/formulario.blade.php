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
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Datos generales</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <p><strong>MOTIVO DE VISITA</strong></p>
                <select class="form-control col-md-12 col-sm-12 col-xs-12 select_motivos" data-width="100%" name="id_motivo" id="id_motivo" required >
                <option value="">Selecione un motivo</option>
                  @if(sizeof($motivos)>0)
                    @foreach($motivos as $det)
                      <option value="{{$det->motivo->id}}"> {{$det->motivo->descripcion}}</option>
                    @endforeach
                  @endif
                </select>
              </div>
              <hr>
              <div class="panelcliente">
                <div class="row">
                  <div class="tipo_cli">
                  <p><strong>TIPO DE CLIENTE</strong></p>
                    <input type="radio" name="tipo_cliente" checked value="Antiguo" class="radio_antiguo"> Antiguo<br>
                    <input type="radio" name="tipo_cliente" value="Nuevo" class="radio_nuevo"> Nuevo<br>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="nuevo">
                    <p><strong>DATOS CLIENTE</strong></p>
                    <input type="text" name="ci" class="form-control" placeholder="CI">
                    <input type="text" name="paterno" class="form-control" placeholder="Paterno">
                    <input type="text" name="materno" class="form-control" placeholder="Materno">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="existente">
                    <p><strong>SELECCIONE CLIENTE</strong></p>
                    <select class="form-control select2" data-width="100%" name="id_cliente" id="id_cliente">
                    <option value="">Selecione un cliente</option>
                        @foreach($clientes as $det)
                          <option value="{{$det->id}}">{{$det->ci}} - {{$det->nombre}} {{$det->paterno}} {{$det->materno}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="datos">
                    <p><strong>RANGO DE EDAD</strong></p>
                    {{-- <select class="form-control select_edades" data-width="100%" name="EDADES" id="EDADES" required >
                    <option value="">Selecione un rango</option>
                      @foreach($edades as $det)
                        <option value="{{$det->codigo}}">{{$det->descripcion}}</option>
                      @endforeach
                    </select> --}}
                      @foreach($edades as $det)
                        <input type="radio" name="rango_edad" value="{{$det->codigo}}" class="radio_edad"> {{$det->descripcion}}<br>
                      @endforeach
                    <hr>
                    <p><strong>GENERO</strong></p>
                    <div class="row">
                      <div class="col-md-6"><input type="radio" name="genero" value="M"> Masculino</div>
                      <div class="col-md-6"><input type="radio" name="genero" value="F"> Femenino</div>
                    </div>
                    <hr>
                    <p><strong>TELEFONO</strong></p> 
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12 col-xs-12 ">
        <div class="x_panel panel_categorias">
          <div class="x_title">
            <h2 class="titulo_categorias">CATEGORIAS</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              @foreach($motivo_Categoria as $det2)
              <div class="col-md-6 col-sm-12 col-xs-12 cat-{{$det2->motivo->id}}">
                <div class="x_title">
                  <h2> {{$det2->categoria->descripcion}} : </h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  @foreach($modelos as $det3)
                    @if($det3->id_categoria == $det2->categoria->id)
                    <input type="checkbox" name="modelos[]" value="{{$det3->id}}"> {{$det3->descripcion}}<br>
                    @endif
                  @endforeach
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="x_panel panel_ejecutivo">
          <div class="x_title">
            <h2 class="titulo">EJECUTIVO DE VENTAS ASIGNADO</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <select class="form-control select3 col-md-12 col-sm-12 col-xs-12"  data-width="100%" name="id_ejecutivo" id="id_ejecutivo">
              <option value="">Selecione un Ejecutivo de venta</option>
              @foreach($vendedores as $det)
                <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="row" align="center">
      <input type="submit" value="FINALIZAR" class="btn btn-success btn-block">
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

$('.select2').select2({
  placeholder: 'Seleccione un cliente',
  minimumInputLength: 2,
  language: {
    noResults: function() { return "No hay resultado";},
    searching: function() { return "Buscando.."; },
    inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
  },
});

$('.select3').select2({
  placeholder: 'Seleccione un cliente',
  language: {
    noResults: function() { return "No hay resultado";},
    searching: function() { return "Buscando.."; },
    inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
  },
});

  $('.nuevo').hide();
  $('.panel_categorias').hide();
  $('.panelcliente').hide();
  $('.panel_ejecutivo').hide();

  $(document).ready(function() {

    $('.radio_nuevo').change(function() {
        $('.nuevo').show();
        $('.existente').hide();
    });

    $('.radio_antiguo').change(function() {
        $('.nuevo').hide();
        $('.existente').show();
        // $('.datos').show();
    });

    $('.select_motivos').change(function() {
    
      switch (this.value) {

          case '1':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').show();
              $('.cat-2').hide();
              break;
          case '2':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').hide();
              $('.cat-2').show();
              break;
          case '3':
             
              $('.panelcliente').hide();
              $('.panel_categorias').hide();
              $('.panel_ejecutivo').show();
              
              break;
          default:
              $('.panelcliente').hide();
              $('.panel_categorias').hide();
              $('.panel_ejecutivo').hide();
      }     

    })

  });

</script>
@endsection