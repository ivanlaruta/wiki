@extends('layouts.main')

@section('content')
<style type="text/css">
  .icono_select{
    color: #2A3F54;
    font-size: larger;
  }
</style>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Empresas <small>Vista general</small></h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Sociedades</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="ver_bloques"><i class="fa fa-th-large ico_bloques" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver agrupado"></i></a></li>
              <li><a class="ver_lista"><i class="fa fa-list ico_lista" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver en lista"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


          <div class="bloques">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-car"></i> Vehiculos</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-bank"></i> Inmobiliaria</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-gears"></i> Servicios</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>TOYOSA S.A. </h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content" style="display: none;">
                          <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small><br>
                          <i class="fa fa-map-marker"></i> <small>  Santa Cruz, Bolivia.</small><br>
                          <small><strong>NIT:</strong> 1030029024</small><br>
                          <small><strong>MATRICULA:</strong> 13129<br></small><br>
                          <strong>Objetivo</strong><br>
                          - Importaciones, Exportaciones, venta de vehículos, accesorios y repuestos.<br><br>
                          <strong>Accionistas:</strong><br>
                          - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                          - ERIKA MENDIZABAL DE SAAVEDRA<br>
                          - SERGIO RODRIGO SAAVEDRA MENDIZABAL<br><br>
                          <strong>Gerente general</strong><br>
                          - ERICK MICHEL SAAVEDRA MENDIZABAL<br><br>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>TOYOTA BOLIVIA S.A. </h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                            <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small><br>
                            <i class="fa fa-map-marker"></i> <small>  La paz, Bolivia.</small><br>
                            <small><strong>NIT:</strong> 1008467028</small><br>
                            <small><strong>MATRICULA:</strong> 13534<br></small><br>
                            <strong>Objetivo</strong><br>
                            - Comercio general, Importaciones , Exportaciones y representaciones.<br><br>
                            <strong>Accionistas:</strong><br>
                            - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                            - ERIKA MENDIZABAL DE SAAVEDRA<br>
                            - SERGIO RODRIGO SAAVEDRA MENDIZABAL<br><br>
                            <strong>Gerente general</strong><br>
                            -  <br><br>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>CROWN LTDA. </h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                            <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada.</small><br>
                            <i class="fa fa-map-marker"></i> <small> -</small><br>
                            <small><strong>NIT:</strong> 1023113020</small><br>
                            <small><strong>MATRICULA:</strong> 7169<br></small><br>
                            <strong>Objetivo</strong><br>
                            -  <br><br>
                            <strong>Accionistas:</strong><br>
                            - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                            - SERGIO RODRIGO SAAVEDRA<br>
                            - ERICK MICHEL SAAVEDRA<br><br>
                            <strong>Gerente general</strong><br>
                            -   GERARDO ROJAS SILVA<br><br>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>TOCARS BROKERS S.R.L. </h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                            <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada.</small><br>
                            <i class="fa fa-map-marker"></i> <small> La Paz, Bolivia </small><br>
                            <small><strong>NIT:</strong> --</small><br>
                            <small><strong>MATRICULA:</strong> --<br></small><br>
                            <strong>Objetivo</strong><br>
                            -  <br><br>
                            <strong>Accionistas:</strong><br>
                            - EDWIN SANTOS SAAVEDRA TOLEDO  <br>
                            - ERIKA MENDIZABAL DE SAAVEDRA  <br><br>
                            <strong>Gerente general</strong><br>
                            -   <br><br>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>ATLANTIDA S.A. </h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                            <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small>
                            <small><strong>NIT:</strong> --</small><br>
                            <small><strong>MATRICULA:</strong> --<br></small><br>
                            <strong>Objetivo</strong><br>
                            - Importaciones y exportaciones.<br><br>
                            <i class="fa fa-map-marker"></i> <small> Iquique, Chile.</small><br><br>
                            <strong>Accionistas:</strong><br>
                            - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                            - SERGIO RODRIGO SAAVEDRA<br><br>
                            <strong>Gerente general</strong><br>
                            -  ZOCIMO FARIAS<br><br>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>INTERMEX S.A. </h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                            <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small>
                            <small><strong>NIT:</strong> --</small><br>
                            <small><strong>MATRICULA:</strong> --<br></small><br>
                            <strong>Objetivo</strong><br>
                            - Importaciones y exportaciones.<br><br>
                            <i class="fa fa-map-marker"></i> <small> Iquique, Chile.</small><br><br>
                            <strong>Accionistas:</strong><br>
                            - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                            - ERIKA MENDIZABAL GONZALES<br><br>
                            <strong>Gerente general</strong><br>
                            -  ZOCIMO FARIAS<br><br>
                            </div>
                          </div>
                        </div>


                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>CONSARQ S.A. </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small><br>
                              <i class="fa fa-map-marker"></i> <small>  Cochabamba, Bolivia.</small><br><br>
                              <strong>Accionistas:</strong>
                              <small><strong>NIT:</strong> 141483027</small><br>
                              <small><strong>MATRICULA:</strong> 43825<br></small><br>
                              <strong>Objetivo</strong><br>
                              - Construccion, inmobiliaria.<br><br>
                              - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                              - EDWARD DANILO SAAVEDRA MENDIZABAL<br>
                              - WILMA DEL ROSARIO SAAVEDRA TOLEDO<br>
                              - ESTEBAN SANTOS SAAVEDRA NUMBELA<br><br>
                              <strong>Gerente general</strong><br>
                              -  <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>WORLD TRADE CENTER BOLIVIA. </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima.</small><br>
                              <i class="fa fa-map-marker"></i> <small> La Paz, Bolivia </small><br>
                              <small><strong>NIT:</strong> 344116022</small><br>
                              <small><strong>MATRICULA:</strong> 373697<br></small><br>
                              <strong>Objetivo</strong><br>
                              -  <br><br>
                              <strong>Accionistas:</strong><br>
                              - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                              - ERIKA MENDIZABAL DE SAAVEDRA<br>
                              - DIEGO SAAVEDRA MENDIZABAL<br><br>
                              <strong>Gerente general</strong><br>
                              -  RODRIGO GUTIERREZ<br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>INMOBILIARIA  DE CAMPO S.A. </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima.</small><br>
                              <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small><br>
                              <small><strong>NIT:</strong> 124759026</small><br>
                              <small><strong>MATRICULA:</strong> 13459<br></small><br>
                              <strong>Objetivo</strong><br>
                              -  Inmobiliaria y Servicios<br><br>
                              <strong>Accionistas:</strong><br>
                              - JORGE ALEJANDRO NUMBELA SAAVEDRA<br>
                              - ELIZABETH JANNONE DE SAUCEDO<br>
                              - JAIME GERARDO ROJAS SILVA<br><br>
                              <strong>Gerente general</strong><br>
                              -   <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>CASA IDEAL S.R.L.  </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada.</small><br>
                              <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small><br>
                              <small><strong>NIT:</strong> --</small><br>
                              <small><strong>MATRICULA:</strong> --<br></small><br>
                              <strong>Objetivo</strong><br>
                              - FABRICACION MATERIAL DE CONSTRUCCION <br><br>
                              <strong>Accionistas:</strong><br>
                              - EDWIN SANTOS SAAVEDRA TOLEDO    <br>
                              - HALMAR ERNESTO TEJERINA ENDARA    <br><br>
                              <strong>Gerente general</strong><br>
                              - JAVIER VÍA  <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>OCORO S.A. </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima.</small><br>
                              <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small><br>
                              <small><strong>NIT:</strong> --</small><br>
                              <small><strong>MATRICULA:</strong> --<br></small><br>
                              <strong>Objetivo</strong><br>
                              -  <br><br>
                              <strong>Accionistas:</strong><br>
                              - EDWIN SANTOS SAAVEDRA TOLEDO<br>
                              - ELIZABETH JANNONE DE SAUCEDO<br>
                              - ERICK MICHEL SAAVEDRA<br><br>
                              <strong>Gerente general</strong><br>
                              -   <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>RAINBOW CONSTRUCTIONS S.R.L.  </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada.</small><br>
                              <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small><br>
                              <small><strong>NIT: 318526023</strong> --</small><br>
                              <small><strong>MATRICULA: 353564</strong> --<br></small><br>
                              <strong>Objetivo</strong><br>
                              -  Construcción y Comercialización de Edificios de departamentos y viviendas. <br><br>
                              <strong>Accionistas:</strong><br>
                              - PABLO LUIS GONZALO SOTO QUIROGA    <br>
                              - SERGIO AROON ASSEFF TALAVERA    <br><br>
                              <strong>Gerente general</strong><br>
                              -   <br><br>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>CENTROS COMERCIALES DE BOLIVIA S.R.L.  </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada.</small><br>
                              <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small><br>
                              <small><strong>NIT:</strong> --</small><br>
                              <small><strong>MATRICULA:</strong> --<br></small><br>
                              <strong>Objetivo</strong><br>
                              - FABRICACION MATERIAL DE CONSTRUCCION <br><br>
                              <strong>Accionistas:</strong><br>
                              - TELSIS TRADING GROUP LLC     <br>
                              - CAPITAL REGIONAL DE CENTROAMERICA    <br>
                              - EDWIN SANTOS SAAVEDRA TOLEDO   <br><br>
                              <strong>Gerente general</strong><br>
                              -   <br><br>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>TERSA S.A. </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima.</small><br>
                              <i class="fa fa-map-marker"></i> <small> La Paz, Bolivia </small><br>
                              <small><strong>NIT:</strong> 136463026</small><br>
                              <small><strong>MATRICULA:</strong> 118342<br></small><br>
                              <strong>Objetivo</strong><br>
                              -  <br><br>
                              <strong>Accionistas:</strong><br>
                              - DIMENSIÓN ENASA LTDA. (Rolando Olmos)<br>
                              - CONCORDIA S.A. EMPRESA CONSTRUCTORA (Edwin Santos Saavedra)<br>
                              - GIORGIO DARIO BENUCCI <br>
                              - BLANCA AZUCENA PAREDES  VEGA  <br><br>
                              <strong>Gerente general</strong><br>
                              -  VLADIMIR GUTIERREZ ALDANA. <br><br>
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







            <div class="lista">
            <p>Lista resumen conformacion de sociedades.</p>

            <!-- start project list -->
            <table class="table table-striped Empresas">
              <thead>
                <tr>
                  <th style="width: 1%">#</th>
                  <th style="width: 25%">Empresa</th>
                  <th>Accionistas</th>
                  <th>Gerente General</th>
                  <th style="width: 18%">Objeto</th>
                  <th  style="width: 1%">NIT</th>
                  <th  style="width: 1%">Matricula</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>TOYOSA S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial. Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Santa Cruz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                     <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERIKA MENDIZABAL DE SAAVEDRA"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO RODRIGO SAAVEDRA MENDIZABAL"></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>ERICK MICHEL SAAVEDRA MENDIZABAL</p></td>
                  <td><a><small>  Importaciones, Exportaciones, venta de vehículos, accesorios y repuestos.</small></a></td>
                  <td><a> 1030029024 </a></td>
                  <td><a> 13129 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>TOYOTA BOLIVIA S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  La paz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERIKA MENDIZABAL DE SAAVEDRA"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO RODRIGO SAAVEDRA MENDIZABAL"></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>---</p></td>
                  <td><a><small> Comercio general, Importaciones , Exportaciones y representaciones.</small></a></td>
                  <td><a> 1008467028 </a></td>
                  <td><a> 13534 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>CONSARQ S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Cochabamba, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWARD DANILO SAAVEDRA MENDIZABAL"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="WILMA DEL ROSARIO SAAVEDRA TOLEDO "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ESTEBAN SANTOS SAAVEDRA NUMBELA  "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>---</p></td>
                  <td><a><small> Construccion, inmobiliaria.</small></a></td>
                  <td><a> 141483027 </a></td>
                  <td><a> 43825 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>OCORO S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Santa Cruz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIZABETH JANNONE DE SAUCEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERICK MICHEL SAAVEDRA "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>---</p></td>
                  <td><a><small> --</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>TERSA S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  La Paz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="DIMENSIÓN ENASA LTDA. (Rolando Olmos)"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="CONCORDIA S.A. EMPRESA CONSTRUCTORA (Edwin Santos Saavedra)"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="GIORGIO DARIO BENUCCI "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="BLANCA AZUCENA PAREDES  VEGA  "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> VLADIMIR GUTIERREZ ALDANA.</p></td>
                  <td><a><small> --</small></a></td>
                  <td><a> 136463026 </a></td>
                  <td><a> 118342 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>ATLANTIDA S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Iquique, Chile.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO RODRIGO SAAVEDRA "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> ZOCIMO FARIAS</p></td>
                  <td><a><small> Importaciones y exportaciones.</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>INTERMEX S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial, Sociedad Anónima.</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Iquique, Chile.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERIKA MENDIZABAL GONZALES "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> ZOCIMO FARIAS</p></td>
                  <td><a><small> Importaciones y exportaciones.</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>CROWN LTDA. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  -</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO RODRIGO SAAVEDRA "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERICK MICHEL SAAVEDRA "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> GERARDO ROJAS SILVA</p></td>
                  <td><a><small> --.</small></a></td>
                  <td><a> 1023113020 </a></td>
                  <td><a> 7169 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>TOCARS BROKERS S.R.L. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  La Paz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERIKA MENDIZABAL DE SAAVEDRA"></a>
                      </li>
                      
                    </ul>
                  </td>
                  <td class="project_progress"><p> -- </p></td>
                  <td><a><small> --.</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>CASA IDEAL S.R.L. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Santa Cruz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="HALMAR ERNESTO TEJERINA ENDARA"></a>
                      </li>
                     
                    </ul>
                  </td>
                  <td class="project_progress"><p>  JAVIER VÍA</p></td>
                  <td><a><small> --.</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>CENTROS COMERCIALES DE BOLIVIA S.R.L. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small>  Santa Cruz, Bolivia.</small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="TELSIS TRADING GROUP LLC "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="CAPITAL REGIONAL DE CENTROAMERICA "></a>
                      </li>
                       <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO  "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>  --</p></td>
                  <td><a><small> --.</small></a></td>
                  <td><a> -- </a></td>
                  <td><a> -- </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>WORLD TRADE CENTER BOLIVIA. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small> La Paz, Bolivia </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="EDWIN SANTOS SAAVEDRA TOLEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ERIKA MENDIZABAL DE SAAVEDRA "></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO RODRIGO SAAVEDRA "></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> RODRIGO GUTIERREZ</p></td>
                  <td><a><small> --.</small></a></td>
                  <td><a> 344116022 </a></td>
                  <td><a> 373697 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>RAINBOW CONSTRUCTIONS S.R.L. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad de Responsabilidad Limitada</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="PABLO LUIS GONZALO SOTO QUIROGA"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="SERGIO AROON ASSEFF TALAVERA"></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p>--</p></td>
                  <td><a><small> Construcción y Comercialización de Edificios de departamentos y viviendas.</small></a></td>
                  <td><a> 318526023 </a></td>
                  <td><a> 353564 </a></td>
                </tr>

                <tr>
                  <td>#</td>
                  <td>
                    <a><strong>INMOBILIARIA  DE CAMPO S.A. </strong></a>
                    <br />
                    <i class="fa fa-bank"></i> <small> Sociedad Comercial - Sociedad Anonima</small>
                    <br />
                    <i class="fa fa-map-marker"></i> <small> Santa Cruz, Bolivia </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="JORGE ALEJANDRO NUMBELA SAAVEDRA"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ELIZABETH JANNONE DE SAUCEDO"></a>
                      </li>
                      <li>
                        <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="JAIME GERARDO ROJAS SILVA"></a>
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress"><p> -- </p></td>
                  <td><a><small> Inmobiliaria y Servicios</small></a></td>
                  <td><a> 124759026 </a></td>
                  <td><a> 13459 </a></td>
                </tr>

               
              </tbody>
            </table>
            <!-- end project list -->
          </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')

<script>
  $('.lista').hide();
  $(".ico_bloques").addClass('icono_select');

  $(".ver_lista").click(function() {
      $('.lista').show();
      $('.bloques').hide();
      $(".ico_lista").addClass("icono_select");
      $(".ico_bloques").removeClass("icono_select");

  });

  $(".ver_bloques").click(function() {
      $('.lista').hide();
      $('.bloques').show();
      $(".ico_lista").removeClass("icono_select");
      $(".ico_bloques").addClass("icono_select");
  });

</script> 
@endsection