@extends('layouts.main')

@section('content')

<style type="text/css">


</style>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><a href="{{ route('trafico.index')}}">TRAFICO CLIENTES</a></h3>
              </div>
             
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <!-- form input knob -->
              <div class="ccol-md-3 col-sm-3 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inicio</h2>
                      <div class="clearfix" ></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12">
                      <div class="row">
                        <p><strong>Tipo de cliente</strong></p>
                          <div class="">
                            <input type="radio" name="tipo" value="Nuevo" class="radio_nuevo"> Nuevo<br>
                            <input type="radio" name="tipo" value="Antiguo" class="radio_antiguo"> Antiguo<br>
                          </div>
                      </div>
                      <hr>
                      <div class="row">
                        <p><strong>Motivo de visita</strong></p>
                        <select class="select_motivos">
                          <option value="0">Seleccione un motivo</option>
                          <option value="VEHICULOS">VEHICULOS</option>
                          <option value="MOTOS">MOTOS Y CUADRAS</option>
                          <option value="TRAMITE">TRAMITE DE VENTAS</option>
                          <option value="4">REPUESTOS</option>
                          <option value="5">SERVICIOS</option>
                          <option value="6">LICITACIONES</option>
                          <option value="7">MONTACARGAS</option>
                          <option value="8">MAQUINARIA PESADA</option>
                          <option value="9">LLANTAS</option>
                          <option value="9">MAQUINARIA GRICOLA</option>
                        </select>
                      </div>
                      <hr>
                    </div>
                    <div class="row" align="center">
                      <input type="submit" value="FINALIZAR" class="btn btn-success btn-block">
                    </div>
                  </div>
                </div>

                
              </div>
           
              <div class="col-md-9 col-sm-9 col-xs-12 panel_cliente">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos de cliente</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                                          

                                     
                      <div class="row">
                        <div class="nuevo">
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Paterno">
                          </div>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Materno">
                          </div>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nombres">
                          </div>
                        </div>
                        <div class="existente">
                          
                          <div class="col-md-8">
                            <select>
                              <option value="1">Seleccione un cliente</option>
                              <option value="1">SIMON CONDORI RAMOS</option>
                              <option value="2">SAMUEL HUANCA BUSTAMANTE</option>
                              <option value="3">RUDY MUMINAGC</option>
                              <option value="4">ROLANDO MENDEZ MONTECINOS</option>
                              <option value="5">ROGER ARIEL PARRA OJEDA</option>
                              <option value="6">ROGELIO ABRAHAM MONTALVO ARELLANO</option>
                              <option value="7">ROBERTO GAMEZ ARIAS</option>
                              <option value="8">ROBERTO CARLOS MERIDA VISCARRA</option>
                              <option value="9">RICHARD MORALES SEJAS</option>
                              <option value="9">RAMIRO CASTRO</option>
                            </select> 
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="datos">
                          <div class="col-md-4">
                            <select>
                              <option value="1">Seleccione rango de edad</option>
                              <option value="2">18-25</option>
                              <option value="3">26-35</option>
                              <option value="4">36-45</option>
                              <option value="5">Mayor a 45</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <strong>Genero: </strong>
                              <input type="radio" name="genero" value="M"> M 
                              <input type="radio" name="genero" value="F"> F
                          </div>
                          <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Telefono">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-9 col-sm-9 col-xs-12 panel_categorias">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="titulo_categorias">...</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="x_title">
                        <h2> AUTOMOVILES: </h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <input type="checkbox" name="AUTOMOVILES" value="1"> YARIS HB<br>
                        <input type="checkbox" name="AUTOMOVILES" value="2"> COROLLA<br>
                      </div>
                      </div>
                    
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="x_title">
                        <h2> VAGONETAS: </h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <input type="checkbox" name="VAGONETAS" value="1"> RAV4 <br>
                        <input type="checkbox" name="VAGONETAS" value="1"> PRADO <br>
                        <input type="checkbox" name="VAGONETAS" value="2"> LCRUSER200<br>
                        <input type="checkbox" name="VAGONETAS" value="2"> 4RUNNER<br>
                      </div>
                      </div>
                   
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="x_title">
                        <h2> CAMIONETAS: </h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <input type="checkbox" name="CAMIONETAS" value="1"> HILUX <br>
                        <input type="checkbox" name="CAMIONETAS" value="1"> TUNDRA <br>
                        <input type="checkbox" name="CAMIONETAS" value="2"> TACOMA<br>
                      </div>
                      </div>
                    
                      <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="x_title">
                        <h2> CAMIONES: </h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <input type="checkbox" name="CAMIONES" value="1"> HINO DUTRO <br>
                        <input type="checkbox" name="CAMIONES" value="1"> FC <br>
                        <input type="checkbox" name="CAMIONES" value="2"> FG<br>
                        <input type="checkbox" name="CAMIONES" value="2"> GH<br>
                        <input type="checkbox" name="CAMIONES" value="2"> GD<br>
                        <input type="checkbox" name="CAMIONES" value="2"> FM<br>
                      </div>
                      </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="x_title">
                        <h2> EJECUTIVO DE VENTA: </h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <select>
                          <option value="1">Seleccione un Ejecutivo de ventas</option>
                          <option value="1">SIMON CONDORI RAMOS</option>
                          <option value="2">SAMUEL HUANCA BUSTAMANTE</option>
                        </select>
                      </div>
                      </div>
                    </div>

                    
                  </div>

                </div>
              </div>

              <div class="col-md-9 col-sm-9 col-xs-12 panel_ejecutivo">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="titulo">EJECUTIVO DE VENTAS ASIGNADO</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <select>
                      <option value="1">Seleccione un Ejecutivo de ventas</option>
                      <option value="1">SIMON CONDORI RAMOS</option>
                      <option value="2">SAMUEL HUANCA BUSTAMANTE</option>
                      <option value="3">RUDY MUMINAGC</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>

          
        </div>
      </div>

@endsection

@section('scripts')

<script type="text/javascript">

  $('.panel_cliente').hide();
  $('.panel_categorias').hide();
  $('.panel_ejecutivo').hide();
  $('.nuevo').hide();
  $('.existente').hide();
  $('.datos').hide();

  $(document).ready(function() {   

    $('.radio_nuevo').change(function() {
        $('.nuevo').show();
        $('.datos').show();
        $('.existente').hide();
    });

    $('.radio_antiguo').change(function() {
        $('.nuevo').hide();
        $('.existente').show();
        $('.datos').show();
    });

    $('.select_motivos').change(function() {
      
      if(this.value == 'VEHICULOS' || this.value == 'MOTOS')
      {
        $('.panel_cliente').show();
        $('.panel_categorias').show();
        $('.panel_ejecutivo').hide();
      }
      else
      {
        if(this.value == 'TRAMITE')
        {
          $('.panel_cliente').hide();
          $('.panel_categorias').hide();
          $('.panel_ejecutivo').show();
        }
        else
        {
          $('.panel_cliente').hide();
          $('.panel_categorias').hide();
          $('.panel_ejecutivo').hide();
        }
      }

      $('.titulo_categorias').text(this.value);

    })

  });

</script>
@endsection