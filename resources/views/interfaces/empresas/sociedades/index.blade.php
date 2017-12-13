@extends('layouts.main')

@section('style')
  <style type="text/css">
    .icono_select{
      color: #2A3F54;
      font-size: larger;
    }
  </style>
@endsection

@section('content')


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Empresas <small>Vista General</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">

          <div class="x_title">
            <h2>Sociedades</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="ver_lista"><i class="fa fa-list ico_lista" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver en lista"></i></a></li>
              <li><a class="ver_bloques"><i class="fa fa-th-large ico_bloques" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver agrupado"></i></a></li>
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
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-car"></i> Automotriz</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-bank"></i> Inmobiliaria</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-gears"></i> Servicios</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        @foreach($empresas as $det)
                        @if($det->tipo=='automotriz')
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>{{$det->nombre}}</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> {{$det->nat_juridica}}</small><br>
                              <i class="fa fa-map-marker"></i> <small> {{$det->ubicacion}}</small><br>
                              <small><strong>NIT:</strong> {{$det->nit}}</small><br>
                              <small><strong>MATRICULA:</strong> {{$det->matricula}}<br></small><br>
                              <strong>Objeto</strong><br>
                              <li>{{$det->objeto}}</li><br>
                              <strong>Accionistas:</strong><br>
                              @foreach($accionistas_emp as $ae)
                              @if($det->id==$ae->id_empresa)
                               <li>@if($ae->accionista->tipo=='empresa'){{$ae->accionista->empresa}} - @endif {{$ae->accionista->persona->nombre}} {{$ae->accionista->persona->paterno}} {{$ae->accionista->persona->materno}}</li>
                              @endif
                              @endforeach
                              <br>
                              <strong>Gerente General</strong><br>
                              <li>{{$det->persona_gerente->nombre}} {{$det->persona_gerente->paterno}} {{$det->persona_gerente->materno}}</li>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                      </div>
                   
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        @foreach($empresas as $det)
                        @if($det->tipo=='inmobiliaria')
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>{{$det->nombre}}</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                              <i class="fa fa-bank"></i> <small> {{$det->nat_juridica}}</small><br>
                              <i class="fa fa-map-marker"></i> <small> {{$det->ubicacion}}</small><br>
                              <small><strong>NIT:</strong> {{$det->nit}}</small><br>
                              <small><strong>MATRICULA:</strong> {{$det->matricula}}<br></small><br>
                              <strong>Objeto</strong><br>
                              <li>{{$det->objeto}}</li><br>
                              <strong>Accionistas:</strong><br>
                              @foreach($accionistas_emp as $ae)
                              @if($det->id==$ae->id_empresa)
                               <li>@if($ae->accionista->tipo=='empresa'){{$ae->accionista->empresa}} - @endif {{$ae->accionista->persona->nombre}} {{$ae->accionista->persona->paterno}} {{$ae->accionista->persona->materno}}</li>
                              @endif
                              @endforeach
                              <br>
                              <strong>Gerente General</strong><br>
                              <li>{{$det->persona_gerente->nombre}} {{$det->persona_gerente->paterno}} {{$det->persona_gerente->materno}}</li>
                            </div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                      </div>

                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      @foreach($empresas as $det)
                          @if($det->tipo=='servicios')
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>{{$det->nombre}}</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                                <i class="fa fa-bank"></i> <small> {{$det->nat_juridica}}</small><br>
                                <i class="fa fa-map-marker"></i> <small> {{$det->ubicacion}}</small><br>
                                <small><strong>NIT:</strong> {{$det->nit}}</small><br>
                                <small><strong>MATRICULA:</strong> {{$det->matricula}}<br></small><br>
                                <strong>Objeto</strong><br>
                                <li>{{$det->objeto}}</li><br>
                                <strong>Accionistas:</strong><br>
                                @foreach($accionistas_emp as $ae)
                                @if($det->id==$ae->id_empresa)
                                 <li>@if($ae->accionista->tipo=='empresa'){{$ae->accionista->empresa}} - @endif {{$ae->accionista->persona->nombre}} {{$ae->accionista->persona->paterno}} {{$ae->accionista->persona->materno}}</li>
                                @endif
                                @endforeach
                                <br>
                                <strong>Gerente General</strong><br>
                                <li>{{$det->persona_gerente->nombre}} {{$det->persona_gerente->paterno}} {{$det->persona_gerente->materno}}</li>
                              </div>
                            </div>
                          </div>
                          @endif
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="lista">
              <p>Lista resumen conformacion de sociedades.</p>
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
                @foreach($empresas as $det)
                  <tr>
                    <td>#</td>
                    <td>
                      <a><strong>{{$det->nombre}} </strong></a>
                      <br />
                      <i class="fa fa-bank"></i> <small> {{$det->nat_juridica}}</small>
                      <br />
                      <i class="fa fa-map-marker"></i> <small> {{$det->ubicacion}}</small>
                    </td>
                    <td>
                      <ul class="list-inline">
                        @foreach($accionistas_emp as $ae)
                        @if($det->id==$ae->id_empresa)
                        <li>
                          <a href="#"><img src="{{URL::asset('/bower_components/gentelella/production/images/user.png')}}" class="avatar" alt="Avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="@if($ae->accionista->tipo=='empresa'){{$ae->accionista->empresa}} - @endif {{$ae->accionista->persona->nombre}} {{$ae->accionista->persona->paterno}} {{$ae->accionista->persona->materno}}"></a>
                        </li>
                        @endif
                        @endforeach
                      </ul>
                    </td>
                    <td class="project_progress"><p> {{$det->persona_gerente->nombre}} {{$det->persona_gerente->paterno}} {{$det->persona_gerente->materno}} </p></td>
                    <td><a><small> {{strtoupper($det->objeto)}}</small></a></td>
                    <td><a> {{$det->nit}} </a></td>
                    <td><a> {{$det->matricula}} </a></td>
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
</div>

@endsection
@section('scripts')

<script>

  ver_lista();

  $(".ver_lista").click(function() {
     ver_lista();
  });

  $(".ver_bloques").click(function() {
    ver_bloques();
  });
  
  function ver_lista()
  {
    $('.lista').show();
    $('.bloques').hide();
    $(".ico_lista").addClass("icono_select");
    $(".ico_bloques").removeClass("icono_select");
  };

  function ver_bloques()
  {
    $('.lista').hide();
    $('.bloques').show();
    $(".ico_lista").removeClass("icono_select");
    $(".ico_bloques").addClass("icono_select");
  };

</script> 
@endsection